<?php

// Константи для кодів помилок
    define('ERROR_CONNECTION', 'Помилка при встановленні з\'єднання: ');

    /**
     * Перевірка SSL-сертифікату домену за допомогою альтернативних імен хостів (SAN).
     *
     * @param string $domain Домен для перевірки
     *
     * @return bool|string Результат перевірки. true, якщо сертифікат є дійсним, false - якщо не дійсним, або рядок із кодом помилки.
     */
    function checkSslCertificate($domain)
    {
        // Створюємо контекст потоку з опцією захоплення сертифікату
        $streamContext = stream_context_create([
            'ssl' => [
                'capture_peer_cert' => true
            ]
        ]);

        // Встановлюємо з'єднання з доменом по протоколу SSL
        $socket = @stream_socket_client(
            "ssl://$domain:443",
            $errno,
            $errstr,
            30,
            STREAM_CLIENT_CONNECT,
            $streamContext
        );

        // Якщо з'єднання не вдалося, повертаємо код помилки
        if ($socket === false) {
            return ERROR_CONNECTION . $errstr;
        }

        // Отримуємо ресурс сертифікату з параметрів потоку
        $certResource = stream_context_get_params($socket)['options']['ssl']['peer_certificate'];

        // Отримуємо дані сертифікату в масиві
        $certData = openssl_x509_parse($certResource);

        // Отримуємо масив з альтернативними іменами хостів
        $subjectAltNamesArray = $certData['extensions']['subjectAltName'] ?? [];

        // Задаємо хост, для якого хочемо перевірити сертифікат
        $hostToCheck = 'upwork.com';

        // Використовуємо функцію explode для розбиття рядка з альтернативними іменами на масив
        $subjectAltNamesArray = explode(', ', $subjectAltNamesArray);

        // Використовуємо функцію array_map для видалення зайвих пробілів з імен хостів
        $subjectAltNamesArray = array_map('trim', $subjectAltNamesArray);

        // Використовуємо функцію in_array для перевірки, чи є заданий хост у масиві
        $isValid = in_array($hostToCheck, $subjectAltNamesArray);

        // Закриваємо з'єднання
        fclose($socket);

        // Перевірка додаткових умов сертифікату
        if ($isValid) {
            // Сертифікат закінчився або ще не почав діяти
            $validFrom = strtotime($certData['validFrom_time_t']);
            $validTo = strtotime($certData['validTo_time_t']);
            $currentTime = time();

            if ($currentTime < $validFrom || $currentTime > $validTo) {
                return 'Сертифікат закінчився або ще не почав діяти.';
            }

            // Сертифікат був виданий ненадійним центром сертифікації
            $caIssuers = $certData['extensions']['authorityInfoAccess'] ?? '';
            if (strpos($caIssuers, 'http://') === 0) {
                return 'Сертифікат був виданий ненадійним центром сертифікації.';
            }

            // Сертифікат не відповідає імені домену або IP-адреси сервера
            $serverName = $certData['subject']['CN'] ?? '';
            if ($serverName !== $hostToCheck) {
                return 'Сертифікат не відповідає імені домену або IP-адреси сервера.';
            }

            // Сертифікат був скасований або відкликаний
            $crl = $certData['extensions']['crlDistributionPoints'] ?? '';
            if (!empty($crl)) {
                return 'Сертифікат був скасований або відкликаний.';
            }

            // Сертифікат має неправильний алгоритм шифрування або довжину ключа
            $encryptionAlgorithm = $certData['signatureTypeSN'] ?? '';
            if ($encryptionAlgorithm !== 'rsaEncryption') {
                return 'Сертифікат має неправильний алгоритм шифрування.';
            }

            // Сертифікат має неправильний формат або пошкоджений
            $validFormat = $certData !== false;
            if (!$validFormat) {
                return 'Сертифікат має неправильний формат або пошкоджений.';
            }

            // Сертифікат не має відповідного закритого ключа на сервері
            $privateKey = openssl_pkey_get_private($certResource);
            if ($privateKey === false) {
                return 'Сертифікат не має відповідного закритого ключа на сервері.';
            }
        }

        // Повертаємо результат перевірки
        return $isValid;
    }

// Задаємо домен для перевірки
    $domainToCheck = 'upwork.com';

// Викликаємо функцію перевірки і отримуємо результат
    $result = checkSslCertificate($domainToCheck);

// Виводимо результат на екран
    if ($result === true) {
        echo "Сертифікат є дійсним для SSL-сервера\n";
    } elseif ($result === false) {
        echo "Сертифікат не є дійсним для SSL-сервера\n";
    } else {
        echo $result; // Виводимо код помилки
    }

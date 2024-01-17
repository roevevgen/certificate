<?php

// Константа для коду помилки при встановленні з'єднання
    define('ERROR_CONNECTION', 'Помилка при встановленні з\'єднання: ');

// Константа для коду помилки перевірки сертифікату
    define('ERROR_CERTIFICATE_CHECK', 'Помилка при перевірці сертифікату: ');

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
            "ssl" => [
                "capture_peer_cert" => true
            ]
        ]);

        // Встановлюємо з'єднання з доменом по протоколу SSL
        $socket = stream_socket_client(
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
        $certResource = stream_context_get_params($socket)["options"]["ssl"]["peer_certificate"];

        // Отримуємо дані сертифікату в масиві
        $certData = openssl_x509_parse($certResource);
        $subjectAltNames = isset($certData['extensions']['subjectAltName']) ? $certData['extensions']['subjectAltName'] : '';

        // Отримуємо рядок з альтернативними іменами хостів
        $subjectAltNamesArray = explode(', ', $subjectAltNames);

        // Задаємо хост, для якого хочемо перевірити сертифікат
        $hostToCheck = "example.com";

        // Використовуємо функцію array_filter для фільтрації імен хостів
        $filteredAltNames = array_filter($subjectAltNamesArray, function ($altName) use ($hostToCheck) {
            // Використовуємо функцію trim для видалення зайвих пробілів
            return trim($altName) === $hostToCheck;
        });

        // Перевіряємо, чи є хоча б одне співпадіння
        $isValid = !empty($filteredAltNames);

        // Закриваємо з'єднання
        fclose($socket);

        // Повертаємо результат перевірки
        return $isValid;
    }

// Задаємо домен для перевірки
    $domainToCheck = "example.com";

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


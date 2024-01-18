<?php

    define('ERROR_CONNECTION', 'Помилка при встановленні з\'єднання: ');

    function checkSslCertificate($domain)
    {
        $streamContext = stream_context_create([
            'ssl' => [
                'capture_peer_cert' => true
            ]
        ]);

        $socket = @stream_socket_client(
            "ssl://$domain:443",
            $errno,
            $errstr,
            30,
            STREAM_CLIENT_CONNECT,
            $streamContext
        );

        if ($socket === false) {
            return ERROR_CONNECTION . $errstr;
        }

        $certResource = stream_context_get_params($socket)['options']['ssl']['peer_certificate'];
        $certData = openssl_x509_parse($certResource);
        $subjectAltNamesArray = explode(', ', $certData['extensions']['subjectAltName'] ?? []);

        $hostToCheck = 'example.com';
        $subjectAltNamesArray = array_map('trim', $subjectAltNamesArray);
        $isValid = in_array($hostToCheck, $subjectAltNamesArray);

        fclose($socket);

        if ($isValid) {
            $validFrom = strtotime($certData['validFrom_time_t']);
            $validTo = strtotime($certData['validTo_time_t']);
            $currentTime = time();

            if ($currentTime < $validFrom || $currentTime > $validTo) {
                return 'Сертифікат закінчився або ще не почав діяти.';
            }

            // Додаткові умови перевірки тут...

            // Перевірка, чи рядок починається з префіксу 'www.'
            if (str_starts_with($hostToCheck, 'www.')) {
                // Виконання певних дій
            }

            $privateKey = openssl_pkey_get_private($certResource);
            if ($privateKey === false) {
                return 'Сертифікат не має відповідного закритого ключа на сервері.';
            }
        }

        return $isValid;
    }

    $domainToCheck = 'example.com';
    $result = checkSslCertificate($domainToCheck);

    if ($result === true) {
        echo "Сертифікат є дійсним для SSL-сервера\n";
    } elseif ($result === false) {
        echo "Сертифікат не є дійсним для SSL-сервера\n";
    } else {
        echo $result;
    }


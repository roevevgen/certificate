<?php

// Функція для перевірки SSL-сертифікату домену
    function check_ssl($domain)
    {
        // Створюємо контекст потоку з опцією захоплення сертифікату
        $stream = stream_context_create(array("ssl" => array("capture_peer_cert" => true)));
        // Відкриваємо сокетне з'єднання з доменом по протоколу SSL
        $socket = stream_socket_client("ssl://" . $domain . ":443", $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $stream);
        // Якщо з'єднання встановлено, отримуємо параметри контексту
        if ($socket) {
            $cont = stream_context_get_params($socket);
            // Отримуємо ресурс сертифікату
            $cert_ressource = $cont ["options"] ["ssl"] ["peer_certificate"];
            // Перетворюємо сертифікат у формат X.509
            $cert = openssl_x509_read($cert_ressource);
            // Перевіряємо, чи відповідає сертифікат меті SSL-сервера
            $purpose = X509_PURPOSE_SSL_SERVER; // Код мети
            $cafile = null; // Шлях до файлу з сертифікатами CA
            $cainfo = array(); // Масив з інформацією про сертифікати CA
            $untrustedfile = null; // Шлях до файлу з додатковими сертифікатами
            $valid = openssl_x509_checkpurpose($cert, $purpose, $cainfo, $untrustedfile);
            // Повертаємо результат перевірки
            return $valid;
        } else {
            // Якщо з'єднання не встановлено, повертаємо помилку
            return $errstr;
        }
    }

// Приклад використання функції
    $domain = "example.com"; // Домен для перевірки
    $result = check_ssl($domain); // Викликаємо функцію
    if ($result === true) {
        // Якщо результат дорівнює true, значить сертифікат є дійсним
        echo "Сертифікат є дійсним для SSL-сервера\n";
    } elseif ($result === false) {
        // Якщо результат дорівнює false, значить сертифікат не є дійсним
        echo "Сертифікат не є дійсним для SSL-сервера\n";
    } else {
        // Якщо результат не є булевим значенням, значить виникла помилка
        echo "Помилка при перевірці сертифікату: " . $result . "\n";
    }



<?php

    function check_ssl($domain)
    {
        $stream = stream_context_create(array("ssl" => array("capture_peer_cert" => true)));

        $socket = stream_socket_client("ssl://" . $domain . ":443", $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $stream);

        if ($socket === false) {
            return "Помилка при встановленні з'єднання: $errstr";
        }

        $cert_ressource = stream_context_get_params($socket)["options"]["ssl"]["peer_certificate"];
        $cert = openssl_x509_read($cert_ressource);

        $purpose = X509_PURPOSE_SSL_SERVER;
        $valid = openssl_x509_checkpurpose($cert, $purpose);

        fclose($socket);

        return $valid;
    }

    $domain = "example.com";
    $result = check_ssl($domain);

    if ($result === true) {
        echo "Сертифікат є дійсним для SSL-сервера\n";
    } elseif ($result === false) {
        echo "Сертифікат не є дійсним для SSL-сервера\n";
    } else {
        echo "Помилка при перевірці сертифікату: " . $result . "\n";
    }

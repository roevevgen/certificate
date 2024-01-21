<?php

    require 'vendor/autoload.php';
    use phpseclib3\Crypt\X509;

    function check_ssl($domain)
    {
        $stream = stream_context_create([
            "ssl" => [
                "capture_peer_cert" => true
            ]
        ]);

        $socket = stream_socket_client(
            "ssl://$domain:443",
            $errno,
            $errstr,
            30,
            STREAM_CLIENT_CONNECT,
            $stream
        );

        if ($socket === false) {
            return "Помилка при встановленні з'єднання: $errstr";
        }

        $cert_ressource = stream_context_get_params($socket)["options"]["ssl"]["peer_certificate"];
        $cert = openssl_x509_read($cert_ressource);

        $host = "example.com";

        $x509 = new X509();
        $certData = openssl_x509_parse($cert_ressource);
        $subjectAltNames = isset($certData['extensions']['subjectAltName']) ? $certData['extensions']['subjectAltName'] : '';

        $subjectAltNamesArray = $x509->splitASN1DN($subjectAltNames);
        $valid = false;

        foreach ($subjectAltNamesArray as $altName) {
            if ($altName['tag'] == 2 && $altName['value'] == $host) {
                $valid = true;
                break;
            }
        }

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

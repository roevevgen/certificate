<?php

// Генерація приватного ключа
    $privkey = openssl_pkey_new();

// Генерація CSR з інформацією про сертифікат
    $dn = array(
        "countryName" => "UA",
        "stateOrProvinceName" => "Київ",
        "localityName" => "Київ",
        "organizationName" => "Example Ltd",
        "commonName" => "example.com",
        "emailAddress" => "info@example.com"
    );
    $csr = openssl_csr_new($dn, $privkey);

// Підписання CSR з власним приватним ключем
    $days = 365; // Термін дії сертифікату в днях
    $sscert = openssl_csr_sign($csr, null, $privkey, $days);

// Перетворення сертифікату у формат X.509
    $cert = openssl_x509_read($sscert);

// Перевірка, чи є сертифікат дійсним для SSL-сервера
    $purpose = X509_PURPOSE_SSL_SERVER; // Код мети
    $cafile = null; // Шлях до файлу з сертифікатами CA
    $cainfo = array(); // Масив з інформацією про сертифікати CA
    $untrustedfile = null; // Шлях до файлу з додатковими сертифікатами
    $valid = openssl_x509_checkpurpose($cert, $purpose, $cainfo, $untrustedfile);

// Виведення результату перевірки
    if ($valid === true) {
        echo "Сертифікат є дійсним для SSL-сервера\n";
    } elseif ($valid === false) {
        echo "Сертифікат не є дійсним для SSL-сервера\n";
    } else {
        echo "Помилка при перевірці сертифікату\n";
    }

// Виведення детальної інформації про сертифікат
    $info = openssl_x509_parse($cert);
    print_r($info);


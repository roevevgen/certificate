<?php
//    Дана строка. Проверьте, что она начинается на 'http://' или на 'https://' . Если это так,
//    выведите 'да', если не так – 'нет'.


    $string = 'https://example.com';

    if (substr($string, 0, 7) === 'http://' || substr($string, 0, 8) === 'https://') {
        echo 'да';
    } else {
        echo 'нет';
    }



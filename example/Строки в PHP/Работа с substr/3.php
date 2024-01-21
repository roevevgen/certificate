<?php
//    Дана строка. Проверьте, что она начинается на 'http://' . Если это так, выведите 'да', если не так – 'нет'.


    $string = 'http://example.com';

    if (substr($string, 0, 7) === 'http://') {
        echo 'да';
    } else {
        echo 'нет';
    }



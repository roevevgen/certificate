<?php
//    Дана строка. Проверьте, что она заканчивается на '.png' или на '.jpg' .
//Если это так, выведите 'да', если не так – 'нет'.


    $string = 'image.jpg';

    if (substr($string, -4) === '.png' || substr($string, -4) === '.jpg') {
        echo 'да';
    } else {
        echo 'нет';
    }



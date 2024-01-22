<?php
//    Проверьте, что в строке есть две точки подряд. Если это так – выведите 'есть', если не так – 'нет'.


    $str = 'abc..def';

    $firstDot = strpos($str, '.');

    if ($firstDot !== false) {
        $secondDot = strpos($str, '.', $firstDot + 1);

        if ($secondDot !== false) {
            echo 'есть';
        } else {
            echo 'нет';
        }
    } else {
        echo 'нет';
    }



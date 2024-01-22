<?php
//    Дана строка 'aa aa aa aa'. Определите позицию второго пробела.


    $str = 'aa aa aa aa';
    $firstSpacePosition = strpos($str, ' ');

    if ($firstSpacePosition !== false) {
        $secondSpacePosition = strpos($str, ' ', $firstSpacePosition + 1);

        if ($secondSpacePosition !== false) {
            echo $secondSpacePosition;
        } else {
            echo 'Второй пробел не найден';
        }
    } else {
        echo 'Первый пробел не найден';
    }



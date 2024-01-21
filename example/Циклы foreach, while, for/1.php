<?php
//    Циклы foreach, while, for Заполните массив 10-ю иксами с помощью цикла.


    $array = [];

    foreach (range(1, 10) as $index) {
        $array[] = 'x';
    }

    print_r($array);



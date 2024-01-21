<?php
//    Заполните массив числами от 10 до 1 с помощью цикла.


    $array = [];

    foreach (range(10, 1, -1) as $number) {
        $array[] = $number;
    }

    print_r($array);



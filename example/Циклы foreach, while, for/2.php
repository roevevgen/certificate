<?php
//    Заполните массив числами от 1 до 10 с помощью цикла.


    $array = [];

    foreach (range(1, 10) as $number) {
        $array[] = $number;
    }

    print_r($array);



<?php
//    Для решения задач данного блока вам понадобятся следующие функции: explode, implode. Дана строка 'html css php' .
//С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива


    $string = 'html css php';
    $array = explode(' ', $string);

    print_r($array);



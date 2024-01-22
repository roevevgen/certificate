<?php
//    Дана строка 'abc abc abc'. Определите позицию первой найденной буквы 'b', если начать поиск не с начала строки,
//    а с позиции 3.


    $str = 'abc abc abc';
    $position = strpos($str, 'b', 3);

    echo $position;



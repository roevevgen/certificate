<?php
//    Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.


    $str = 'abc abc abc';
    $position = strrpos($str, 'b');

    echo $position;



<?php
//    Дана строка 'ab-cd-ef' . С помощью функции strrchr выведите на экран строку '-ef'


    $str = 'ab-cd-ef';
    $result = strrchr($str, '-');

    echo "Результат: $result";



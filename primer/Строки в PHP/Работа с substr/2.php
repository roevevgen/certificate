<?php
//    Дана строка. Вырежите и выведите на экран последние 3 символа этой строки.


    $string = 'example string';
    $lastThreeCharacters = substr($string, -3);

    echo $lastThreeCharacters;



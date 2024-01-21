<?php
//    Дана строка 'LONDON' . Сделайте из нее строку 'London' .


    $str = 'LONDON';
    $result = lcfirst(strtolower($str));

    echo $result; // Выведет 'London'



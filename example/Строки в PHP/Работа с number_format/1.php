<?php
//    Для решения задач данного блока вам понадобятся следующие функции: number_format.
//Дана строка '12345678' . Сделайте из нее строку '12 345 678' .


    $number = '12345678';
    $formattedNumber = number_format($number, 0, '', ' ');

    echo $formattedNumber;



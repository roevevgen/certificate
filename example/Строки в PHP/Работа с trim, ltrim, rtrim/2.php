<?php
//    Дана строка '/php/' . Сделайте из нее строку 'php' , удалив концевые слеши


    $string = '/php/';
    $trimmedString = trim($string, '/');

    echo $trimmedString;



<?php
//    Для решения задач данного блока вам понадобятся следующие функции: str_replace. Дана строка '31.12.2013' .
//Замените все точки на дефисы.

    $dateString = '31.12.2013';
    $result = str_replace('.', ':', $dateString);

    echo $result;



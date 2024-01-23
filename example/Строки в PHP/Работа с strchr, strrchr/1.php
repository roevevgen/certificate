<?php
//    Для решения задач данного блока вам понадобятся следующие функции: strchr, strrchr. Дана строка 'ab-cd-ef' .
//С помощью функции strchr выведите на экран строку '-cd-ef'


    $str = 'ab-cd-ef';
    $result = strchr($str, '-');

    echo "Результат: $result";



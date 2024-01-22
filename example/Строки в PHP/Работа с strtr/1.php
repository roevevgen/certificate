<?php
//    Для решения задач данного блока вам понадобятся следующие функции: strtr. Дана строка $str. Замените в ней все
//    буквы 'a' на цифру 1, буквы 'b' – на 2, а буквы 'c' – на 3. Решите задачу двумя способами работы с функцией
//    strtr (массив замен и две строки замен).


    $str = 'abc';
    $replaceArray = ['a' => '1', 'b' => '2', 'c' => '3'];
    $result = strtr($str, $replaceArray);

    echo "$result <br>";

    $replaceFrom = 'abc';
    $replaceTo = '123';
    $result1 = strtr($str, $replaceFrom, $replaceTo);

    echo $result;



<?php
//    Работа с substr Для решения задач данного блока вам понадобятся следующие функции: substr Дана строка
//    'html css php' . Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.


    $string = 'html css php';

    $word1 = substr($string, 0, strpos($string, ' '));       // 'html'
    $word2 = substr($string, strpos($string, ' ') + 1, 3);   // 'css'
    $word3 = substr($string, strrpos($string, ' ') + 1);     // 'php'

    echo $word1 . "\n";
    echo $word2 . "\n";
    echo $word3 . "\n";



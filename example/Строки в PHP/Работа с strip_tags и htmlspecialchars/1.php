<?php
//    Для решения задач данного блока вам понадобятся следующие функции: htmlspecialchars, strip_tags. Дана строка
//    'html, <b>php</b>, js' . Удалите теги из этой строки.


    $string = 'html, <b>php</b>, js';
    $cleanString = strip_tags($string);

    echo $cleanString . "<br>";

    $encodedString = htmlspecialchars($string);

    echo $encodedString;



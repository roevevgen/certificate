<?php
//    Дана строка $str. Удалите все теги из этой строки, кроме тегов <b> и <i>.


    $str = '<p>This is <b>bold</b> and <i>italic</i>.</p>';
    $allowedTags = '<b><i>'; // Указываем разрешенные теги

    $cleanStr = strip_tags($str, $allowedTags);

    echo $cleanStr;



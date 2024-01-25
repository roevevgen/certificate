<?php
//    Считайте данные из файла 'test.txt' и выведите их на экран.


// Задаем имя файла
    $filename = 'test.txt';

// Считываем данные из файла
    $content = file_get_contents($filename);

// Выводим считанный текст на экран
    echo $content;



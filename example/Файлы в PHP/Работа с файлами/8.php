<?php
//    Проверьте существование файлов 'world.txt' и 'mir.txt'.


// Имя файлов для проверки
    $fileWorld = 'world.txt';
    $fileMir = 'mir.txt';

// Проверяем существование файлов
    if (file_exists($fileWorld)) {
        echo 'Файл "world.txt" существует.<br>';
    } else {
        echo 'Файл "world.txt" не существует.<br>';
    }

    if (file_exists($fileMir)) {
        echo 'Файл "mir.txt" существует.';
    } else {
        echo 'Файл "mir.txt" не существует.';
    }



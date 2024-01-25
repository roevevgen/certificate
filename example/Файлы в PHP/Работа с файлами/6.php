<?php
//    Определите размер файла 'world.txt'. Выведите его на экран. Выведите его в байтах, мегабайтах, гигабайтах


// Имя файла
    $filename = 'world.txt';

// Получаем размер файла в байтах
    $filesizeBytes = filesize($filename);

// Выводим размер файла в байтах
    echo 'Размер файла в байтах: ' . $filesizeBytes . ' байт<br>';

// Преобразуем размер в килобайты
    $filesizeKB = round($filesizeBytes / 1024, 2);
    echo 'Размер файла в килобайтах: ' . $filesizeKB . ' KB<br>';

// Преобразуем размер в мегабайты
    $filesizeMB = round($filesizeBytes / (1024 * 1024), 2);
    echo 'Размер файла в мегабайтах: ' . $filesizeMB . ' MB<br>';

// Преобразуем размер в гигабайты
    $filesizeGB = round($filesizeBytes / (1024 * 1024 * 1024), 2);
    echo 'Размер файла в гигабайтах: ' . $filesizeGB . ' GB';



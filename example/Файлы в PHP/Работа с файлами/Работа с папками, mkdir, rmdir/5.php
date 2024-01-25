<?php
//    На scandir, is_dir, is_file, PHP_EOL Выведите на экран название всех файлов и подпапок из папки 'test'.


    $folderPath = 'test';

// Получаем список файлов и подпапок в папке 'test'
    $items = scandir($folderPath);

// Перебираем полученные элементы
    foreach ($items as $item) {
        // Исключаем текущий и родительский каталоги
        if ($item == '.' || $item == '..') {
            continue;
        }

        // Формируем полный путь к элементу
        $fullPath = $folderPath . DIRECTORY_SEPARATOR . $item;

        // Проверяем тип элемента (файл или папка) и выводим на экран
        if (is_file($fullPath)) {
            echo 'Файл: ' . $item . PHP_EOL;
        } elseif (is_dir($fullPath)) {
            echo 'Папка: ' . $item . PHP_EOL;
        }
    }



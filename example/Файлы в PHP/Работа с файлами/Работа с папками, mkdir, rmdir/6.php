<?php
//    Выведите на экран название всех файлов, но не подпапок из папки 'test'.


    $folderPath = 'test';

// Получаем список файлов и подпапок в папке 'test'
    $items = scandir($folderPath);

// Переменная для отслеживания наличия файлов
    $filesFound = false;

// Перебираем полученные элементы
    foreach ($items as $item) {
        // Исключаем текущий и родительский каталоги
        if ($item == '.' || $item == '..') {
            continue;
        }

        // Формируем полный путь к элементу
        $fullPath = $folderPath . DIRECTORY_SEPARATOR . $item;

        // Проверяем, является ли элемент файлом, и выводим на экран
        if (is_file($fullPath)) {
            echo 'Файл: ' . $item . PHP_EOL;
            $filesFound = true;
        }

    }
// Выводим сообщение, если файлы не найдены
    if (!$filesFound) {
        echo 'Файлы не найдены в папке ' . $folderPath . PHP_EOL;
    }



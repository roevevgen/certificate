<?php
//    Дан массив со строками. Создайте в папке 'test' папки, названиями которых служат элементы этого массива.


// Ваш массив со строками
    $stringArray = ['folder1', 'folder2', 'folder3'];

// Папка, в которой нужно создать подпапки
    $baseFolder = 'test';

// Перебираем элементы массива и создаем папки
    foreach ($stringArray as $folderName) {
        $fullPath = $baseFolder . DIRECTORY_SEPARATOR . $folderName;

        // Проверяем существование папки перед созданием
        if (!is_dir($fullPath)) {
            mkdir($fullPath);
            echo 'Папка "' . $fullPath . '" успешно создана.<br>';
        } else {
            echo 'Папка "' . $fullPath . '" уже существует.<br>';
        }
    }



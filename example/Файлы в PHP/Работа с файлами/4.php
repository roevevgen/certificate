<?php
//    Сделайте папку 'folder'. 'test.txt' в 'mir.txt'.


// Имя новой папки
    $folderName = 'folder';

// Имя текущего файла
    $oldFilename = 'test.txt';

// Новое имя файла
    $newFilename = 'mir.txt';

// Создаем папку
    if (!file_exists($folderName) && mkdir($folderName)) {
        echo 'Папка успешно создана.<br>';

        // Переименовываем файл внутри созданной папки
        $newFilePath = $folderName . '/' . $newFilename;
        if (rename($oldFilename, $newFilePath)) {
            echo 'Файл успешно переименован.';
        } else {
            echo 'Ошибка при переименовании файла.';
        }
    } else {
        echo 'Ошибка при создании папки.';
    }



<?php
//    Переименуйте файл 'test.txt' в 'mir.txt'.


// Имя текущего файла
    $oldFilename = 'test.txt';

// Новое имя файла
    $newFilename = 'mir.txt';

// Переименовываем файл
    if (rename($oldFilename, $newFilename)) {
        echo 'Файл успешно переименован.';
    } else {
        echo 'Ошибка при переименовании файла.';
    }



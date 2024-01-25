<?php
//    Работа с папками, mkdir, rmdir Создайте папку 'test'.


// Имя папки для создания
    $folderName = 'test';

// Проверяем существование папки перед созданием
    if (!file_exists($folderName)) {
        // Создаем папку
        mkdir($folderName);
        echo 'Папка "' . $folderName . '" успешно создана.';
    } else {
        echo 'Папка "' . $folderName . '" уже существует.';
    }



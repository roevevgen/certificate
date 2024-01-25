<?php
//    Удалите папку 'www'.


// Имя папки, которую нужно удалить
    $folderName = 'www';

// Удаляем папку
    if (file_exists($folderName)) {
        rmdir($folderName);
        echo 'Папка "' . $folderName . '" успешно удалена.';
    } else {
        echo 'Папка "' . $folderName . '" не существует.';
    }



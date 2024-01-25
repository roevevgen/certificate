<?php
//    Переименуйте папку 'test' на 'www'.


// Имя текущей папки
    $oldFolderName = 'test';

// Имя новой папки
    $newFolderName = 'www';

// Переименовываем папку
    if (file_exists($oldFolderName)) {
        rename($oldFolderName, $newFolderName);
        echo 'Папка успешно переименована из "' . $oldFolderName . '" в "' . $newFolderName . '".';
    } else {
        echo 'Папка "' . $oldFolderName . '" не существует.';
    }



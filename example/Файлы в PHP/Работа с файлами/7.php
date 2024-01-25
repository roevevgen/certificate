<?php
//    Удалите файл 'world.txt'.


// Имя файла для удаления
    $filename = 'world.txt';

// Удаляем файл
    if (unlink($filename)) {
        echo 'Файл успешно удален.';
    } else {
        echo 'Ошибка при удалении файла.';
    }



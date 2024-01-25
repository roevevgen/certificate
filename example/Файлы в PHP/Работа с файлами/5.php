<?php
//    Создайте копию файла 'mir.txt' и назовите ее 'world.txt'.


// Имя текущего файла
    $originalFilename = 'mir.txt';

// Имя файла-копии
    $copyFilename = 'world.txt';

// Копируем файл
    if (copy($originalFilename, $copyFilename)) {
        echo 'Файл успешно скопирован.';
    } else {
        echo 'Ошибка при копировании файла.';
    }



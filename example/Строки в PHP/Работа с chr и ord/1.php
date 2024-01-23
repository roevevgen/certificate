<?php
//    Для решения задач данного блока вам понадобятся следующие функции: chr, ord. Узнайте код
//    символов 'a', 'b', 'c', пробела.


    $characters = ['a', 'b', 'c', ' '];

    foreach ($characters as $char) {
        echo "Код символа '$char': " . ord($char) . PHP_EOL . "<br>";
    }



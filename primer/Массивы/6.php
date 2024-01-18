<?php
//    Дан массив вида [1, ' , 2, ' , ' , 3] – то есть в нем есть пустые строки. Удалите все такие элементы из этого массива.

    $inputArray = [1, ' ', 2, ' ', ' ', 3];

// Используем array_filter для удаления элементов с пустыми строками
    $resultArray = array_filter($inputArray, function ($value) {
        return strlen($value) > 0;
    });

   var_dump($resultArray);

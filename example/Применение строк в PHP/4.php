<?php
//    Дан массив с числами. Выведите на экран все числа, в которых есть цифра 3.


    function containsDigitThree($number)
    {
        // Проверяем, содержится ли цифра 3 в числе
        return strpos(strval($number), '3') !== false;
    }

// Исходный массив с числами
    $numbers = [123, 456, 789, 321, 543];

// Выводим числа, в которых есть цифра 3
    foreach ($numbers as $number) {
        if (containsDigitThree($number)) {
            echo $number . PHP_EOL;
        }
    }



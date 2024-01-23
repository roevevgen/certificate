<?php
//    Дан массив с числами. Посчитайте суммарное количество цифр 3 в этих числах.


// Исходный массив с числами
    $numbers = [123, 456, 789, 321, 543];

// Переменная для хранения суммарного количества цифр 3
    $totalCount = 0;

// Проходим по каждому числу в массиве
    foreach ($numbers as $number) {
        // Преобразуем число в строку
        $numberStr = strval($number);

        // Считаем количество цифр 3 в числе и добавляем к суммарному количеству
        $totalCount += substr_count($numberStr, '3');
    }

// Выводим результат
    echo "Суммарное количество цифр 3: " . $totalCount . PHP_EOL;



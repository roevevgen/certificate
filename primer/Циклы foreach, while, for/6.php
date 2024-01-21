<?php
//    Дан массив с элементами 1, 2, 3, 4, 5. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в
//    переменную $result.


    $numbers = [1, 2, 3, 4, 5];
    $result = 0;

    foreach ($numbers as $number) {
        $result += $number;
    }

    echo "Сумма элементов массива: $result";



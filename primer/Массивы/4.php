<?php
//    Создайте массив вида [1, [2], [[3]], [[[4]]] ], вместо 4 может быть любое целое значение. К примеру, если 5 – тогда будет массив [1, [2], [[3]], [[[4]]], [[[[5]]]] ].


    function createNestedArray($value, $depth)
    {
        if ($depth === 0) {
            return $value;
        } else {
            return createNestedArray([$value], $depth - 1);
        }
    }

    $depth = 4; // Задайте желаемую глубину массива
    $value = 1; // Задайте начальное значение

    $resultArray = createNestedArray($value, $depth);

    print_r($resultArray);



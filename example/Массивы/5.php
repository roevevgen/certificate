<?php
//    Задача Хитрое слияние массивов*
// 1: Напишите функцию, которая будет сливать два массива таким образом: из, к примеру, [1, 2, 3] и ['a', 'b', 'c'] она сделает [1, 'a', 2, 'b', 3, 'c'].
// 2: Сделайте аналогичную функцию, которая параметрами будет принимать не два массива, а произвольное количество (пусть функция параметром принимает двухмерный массив, где его подмассивы – это то, что мы будем сливать).
    function cleverMergeArrays($array1, $array2) {
        $result = [];
        $count = max(count($array1), count($array2));

        for ($i = 0; $i < $count; $i++) {
            if (isset($array1[$i])) {
                $result[] = $array1[$i];
            }
            if (isset($array2[$i])) {
                $result[] = $array2[$i];
            }
        }

        return $result;
    }

    $array1 = [1, 2, 3];
    $array2 = ['a', 'b', 'c'];

    $result = cleverMergeArrays($array1, $array2);
    print_r($result);


    function cleverMergeMultiArrays($arrays) {
        $result = [];
        $maxLength = max(array_map('count', $arrays));

        for ($i = 0; $i < $maxLength; $i++) {
            foreach ($arrays as $array) {
                if (isset($array[$i])) {
                    $result[] = $array[$i];
                }
            }
        }

        return $result;
    }

    $array1 = [1, 2, 3];
    $array2 = ['a', 'b', 'c'];
    $array3 = ['x', 'y', 'z'];

    $result = cleverMergeMultiArrays([$array1, $array2, $array3]);
    print_r($result);

<?php
//    Дан многомерный массив $arr. Напишите функцию, которая принимает строки вида 'строка1.строка2.строка3' – буквы
//    разделенные точками, а возвращает элемент многомерного массива $arr['строка1']['строка2']['строка3']. Количество
//    точек в строке может быть любым, вложенность массива тоже любая, ключи массива не содержат точек.


    function getElementFromArray($arr, $keysString)
    {
        $keys = explode('.', $keysString);

        $currentArray = $arr;

        foreach ($keys as $key) {
            if (isset($currentArray[$key])) {
                $currentArray = $currentArray[$key];
            } else {
                // Если ключ не существует, возвращаем null или другое значение по умолчанию
                return null;
            }
        }

        return $currentArray;
    }

// Пример использования
    $arr = [
        'строка1' => [
            'строка2' => [
                'строка3' => 'Значение'
            ]
        ]
    ];

    $result = getElementFromArray($arr, 'строка1.строка2.строка3');
    echo $result; // Выведет: Значение



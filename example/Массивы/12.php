<?php
//    Создайте многомерный массив $arr. 1. $arr = [ 2. 'cms'=>['joomla', 'wordpress', 'drupal'],
//    3. 'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый'] 4. ]
//    С его помощью выведите на экран слова 'joomla', 'drupal', 'verde', 'rojo’.


// Создаем многомерный массив $arr
    $arr = [
        'cms' => ['joomla', 'wordpress', 'drupal'],
        'colors' => ['blue' => 'голубой', 'red' => 'rojo', 'green' => 'verde'],
    ];

// Выводим слова 'joomla', 'drupal', 'verde', 'rojo'
    echo $arr['cms'][0] . "\n"; // Выводит 'joomla'
    echo $arr['cms'][2] . "\n"; // Выводит 'drupal'
    echo $arr['colors']['green'] . "\n"; // Выводит 'verde'
    echo $arr['colors']['red'] . "\n"; // Выводит 'rojo'



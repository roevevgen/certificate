<?php
    //    Дан массив ['Привет, ', 'мир', '!']. Необходимо записать в первый элемент (то есть элемент с номером ноль) этого массива слово 'Пока, ' (то есть вместо слова 'Привет, ' будет 'Пока, ' ).

// Дан массив
    $array = array('Привет, ', 'мир', '!');
// Создаем массив с новым значением для первого элемента
    $replacement = array(0 => 'Пока, ');
// Заменяем значение в исходном массиве
    $array = array_replace($array, $replacement);
// Выводим результат
    print_r($array);


<?php
//    Переменная $num может принимать одно из значений: 1, 2, 3 или 4. Если она имеет значение '1', то в переменную
//    $result запишем 'зима', если имеет значение '2' – 'лето' и так далее. Решите задачу через switch-case.


    $num = 2; // Замените значение переменной $num на нужное

    switch ($num) {
        case 1:
            $result = 'зима';
            break;
        case 2:
            $result = 'лето';
            break;
        case 3:
            $result = 'осень';
            break;
        case 4:
            $result = 'весна';
            break;
        default:
            $result = 'Неверное значение $num';
    }

    echo $result;



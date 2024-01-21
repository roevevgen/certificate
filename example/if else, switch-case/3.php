<?php
//    В переменной $month лежит какое-то число из интервала от 1 до 12. Определите в какую пору года попадает этот месяц
//(зима, лето, весна, осень).


    $month = rand(1, 12); // Замените значение переменной $month на нужное

    if ($month >= 1 && $month <= 2 || $month == 12) {
        $season = 'зима';
    } elseif ($month >= 3 && $month <= 5) {
        $season = 'весна';
    } elseif ($month >= 6 && $month <= 8) {
        $season = 'лето';
    } elseif ($month >= 9 && $month <= 11) {
        $season = 'осень';
    } else {
        $season = 'Неверное значение $month';
    }

    echo "Месяц $month попадает в пору года: $season.";



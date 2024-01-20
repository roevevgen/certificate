<?php
//    В переменной $year хранится год. Определите, является ли он високосным (в таком году есть 29 февраля). Год будет
//    високосным в двух случаях: либо он делится на 4, но при этом не делится на 100, либо делится на 400. Так, годы 1700,
//    1800 и 1900 не являются високосными, так как они делятся на 100 и не делятся на 400. Годы 1600 и 2000 – високосные,
//    так как они делятся на 400.


    $year = 2024; // Замените значение переменной $year на нужное

    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
        $leapYear = true;
    } else {
        $leapYear = false;
    }

    if ($leapYear) {
        echo "$year - високосный год.";
    } else {
        echo "$year - не високосный год.";
    }



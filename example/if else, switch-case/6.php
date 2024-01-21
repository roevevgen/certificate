<?php
//    Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр. Если это так –
//    выведите 'да', в противном случае выведите


    $str = "123321"; // Замените значение переменной $str на вашу строку из 6 цифр

// Разделяем строку на две части
    $firstPart = substr($str, 0, 3);
    $secondPart = substr($str, 3, 3);

// Получаем суммы цифр в каждой части
    $sumFirstPart = array_sum(str_split($firstPart));
    $sumSecondPart = array_sum(str_split($secondPart));

// Сравниваем суммы и выводим результат
    if ($sumFirstPart == $sumSecondPart) {
        echo "да";
    } else {
        echo "нет";
    }



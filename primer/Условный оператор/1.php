<?php
//    Дано натуральное число 8. Если оно четное, то уменьшите его в 2 раза, иначе увеличьте в 3 раза.


// Заданное натуральное число
    $number = 10;

// Условный оператор
    if ($number % 2 == 0) {
        // Если число четное, уменьшаем в 2 раза
        $result = $number / 2;
    } else {
        // Иначе (если число нечетное), увеличиваем в 3 раза
        $result = $number * 3;
    }

// Вывод результата
    echo "Результат: $result";


<?php
//    Создайте ассоциативный массив дней недели. Ключами в нем должны служить номера дней от начала недели (понедельник – должен иметь ключ 1, вторник – 2 и т.д.). Выведите на экран текущийдень недели.


// Создаем ассоциативный массив дней недели
    $daysOfWeek = [
        1 => 'Понедельник',
        2 => 'Вторник',
        3 => 'Среда',
        4 => 'Четверг',
        5 => 'Пятница',
        6 => 'Суббота',
        7 => 'Воскресенье',
    ];

// Получаем текущий день недели (1-7)
    $currentDay = date('N');

// Выводим текущий день недели
    echo "Сегодня " . $daysOfWeek[$currentDay];



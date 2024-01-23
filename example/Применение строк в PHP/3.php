<?php
//    Дана строка следующего вида: 5 цифр, затем пробел, затем еще 5 цифр. Например, дана такая строка '12345 67890' .
//Сделайте из нее строку '54321 09876' .


    function reverseNumberGroups($input)
    {
        // Разбиваем строку на две группы по пробелу
        $groups = explode(' ', $input);

        // Переворачиваем каждую группу цифр
        $reversedGroups = array_map(function ($group) {
            return strrev($group);
        }, $groups);

        // Объединяем перевернутые группы с пробелом
        $result = implode(' ', $reversedGroups);

        return $result;
    }

// Пример использования
    $inputString = '12345 67890';
    $resultString = reverseNumberGroups($inputString);

    echo $resultString;



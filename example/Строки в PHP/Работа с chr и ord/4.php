<?php
//    Запишите в переменную $str случайную строку $len длиной, состоящую из маленьких букв латинского алфавита.
//Подсказка: воспользуйтесь циклом for или while.


    function generateRandomString($length)
    {
        $result = '';
        $lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz';
        $lettersCount = strlen($lowercaseLetters);

        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, $lettersCount - 1);
            $result .= $lowercaseLetters[$randomIndex];
        }

        return $result;
    }

    $len = 10; // Задайте желаемую длину строки
    $str = generateRandomString($len);

    echo "Случайная строка из $len маленьких букв: $str";



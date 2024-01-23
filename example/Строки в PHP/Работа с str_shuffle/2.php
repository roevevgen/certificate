<?php
//    Создайте строку из 6-ти случайных маленьких латинских букв так, чтобы буквы не повторялись. Нужно сделать так,
//    чтобы в нашей строке могла быть любая латинская буква, а не ограниченный набор.


    function generateRandomString($length)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $randomString = '';

        // Создаем массив уникальных символов
        $uniqueCharacters = array_unique(str_split($characters));

        // Перемешиваем массив
        shuffle($uniqueCharacters);

        // Выбираем первые $length символов
        $selectedCharacters = array_slice($uniqueCharacters, 0, $length);

        // Собираем строку из выбранных символов
        $randomString = implode('', $selectedCharacters);

        return $randomString;
    }

// Генерируем строку из 6 уникальных случайных маленьких латинских букв
    $randomString = generateRandomString(6);

    echo $randomString;



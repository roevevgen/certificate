<?php
//    Дана строка вида /aaa/222/we33/qqq/. Сделайте функцию, которая заменит энный блок в такой строке на заданный текст.
//Пример: funct('/aaa/222/we33/qqq/', 2, '!') выдаст '/aaa/222/!/qqq/ – заменили второй блок (нумерация с нуля).


    function replaceNthBlock($string, $n, $replacement)
    {
        // Разбиваем строку на блоки с помощью '/'
        $blocks = explode('/', $string);

        // Проверяем, существует ли N-ный блок
        if (isset($blocks[$n])) {
            // Заменяем N-ный блок
            $blocks[$n] = $replacement;
        } else {
            // Если N-ный блок не существует, ничего не делаем
            return $string;
        }

        // Собираем строку обратно, объединяя блоки с '/'
        $result = implode('/', $blocks);

        return $result;
    }

// Пример использования
    $inputString = '/aaa/222/we33/qqq/';
    $n = 2;
    $replacementText = '!';

    $result = replaceNthBlock($inputString, $n, $replacementText);
    echo $result; // Выведет '/aaa/222/!/qqq/'



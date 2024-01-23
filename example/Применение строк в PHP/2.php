<?php
//    Преобразуйте строку 'var_test_text' в 'varTestText' . Скрипт, конечно же,
//    должен работать с любыми аналогичными строками.


    function snakeToCamel($input)
    {
        $parts = explode('_', $input);
        $camelCase = $parts[0];

        for ($i = 1; $i < count($parts); $i++) {
            $camelCase .= ucfirst($parts[$i]);
        }

        return $camelCase;
    }

// Пример использования
    $inputString = 'var_test_text';
    $camelCaseString = snakeToCamel($inputString);

    echo $camelCaseString;



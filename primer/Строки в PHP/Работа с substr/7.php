<?php
//    Дана строка. Если в этой строке более 5-ти символов – вырежите из нее первые 5 символов, добавьте троеточие в конец
//    и выведите на экран. Если же в этой строке 5 и менее символов – просто выведите эту строку на экран.


    $string = 'example';

    if (strlen($string) > 5) {
        $result = substr($string, 0, 5) . '...';
        echo $result;
    } else {
        echo $string;
    }



<?php
//    Дан массив с элементами 'html', 'css', 'php' . С помощью функции implode создайте строку из этих элементов,
//    разделенных запятыми.


    $array = ['html', 'css', 'php'];
    $string = implode(', ', $array);

    echo $string;



<?php
//    В переменной $date лежит дата в формате '2016-12-31' . Преобразуйте эту дату в формат '31.12.2016' .


    $dateString = '2016-12-31';

// Создаем объект DateTime
    $dateObject = DateTime::createFromFormat('Y-m-d', $dateString);

// Преобразуем дату в новый формат
    $newDateString = $dateObject->format('d.m.Y');

    echo $newDateString;



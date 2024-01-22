<?php
//    Проверьте, является ли слово палиндромом (одинаково читается во всех направлениях, примеры таких слов: madam,
//    otto, kayak, nun, level).


    function isPalindrome($word)
    {
        $reversedWord = strrev($word);
        return $word == $reversedWord;
    }

    $wordToCheck = 'madam';
    if (isPalindrome($wordToCheck)) {
        echo $wordToCheck . ' - это палиндром.';
    } else {
        echo $wordToCheck . ' - это не палиндром.';
    }



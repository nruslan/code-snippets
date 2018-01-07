<?php

function shuffled_string()
{
    $digits = rand(100000000,999999999);
    $lowerCaseLetters = 'qwertasdfgzxcvbyuiophjknm'; // no lower case L
    $upperCaseLetters = 'QWERTASDFGZXCVBYUIOPHJKLNM';
    $specialCharacters = '!@$%';
    // united string
    $string = str_shuffle($digits.$lowerCaseLetters.$digits.$upperCaseLetters.$specialCharacters.$digits);

    return substr($string,0,9);
}

//echo shuffled_string();
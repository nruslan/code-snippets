<?php

/**
 * Merge strings with any type of punctuation or ampersand
 * @param $strings
 * @param bool $amp
 * @param string $punctuation
 * @return string
 */

function merge_strings($strings, $amp = false, $punctuation = ', ')
{
    $result = null;
    $i = 1;
    $length = -strlen($punctuation); // negative integer
    $myString = count($strings);

    foreach($strings as $string) {
        if($myString > 2 && $amp === true) {
            if($i < 2)
                $result .= $string. ' &amp; ';
            else
                $result .= $string.$punctuation;
            $i++;
        }
        elseif ($myString == 2 && $amp === true) {
            $result .= $string. ' &amp; ';
            $length = -7;
        }
        elseif ($myString > 2 && $amp === false)
            $result .= $string.$punctuation;
        elseif ($myString == 2 && $amp === false)
            $result .= $string.$punctuation;
        elseif ($myString < 2)
            $result .= $string.$punctuation;
        else
            $result .= $string.$punctuation;
    }

    // Return final string without last punctuation
    return substr($result, 0, $length);
}


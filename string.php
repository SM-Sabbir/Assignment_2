<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $originalString = $string;
    $vowelCount = countVowels($string);
    $reversedString = strrev($string);
    
    echo "Original String: $originalString, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}

function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split(strtolower($string)) as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
    return $count;
}

?>

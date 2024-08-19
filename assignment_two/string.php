<?php


$strings = ["Hello","World","PHP","Programming"];

foreach ($strings as $value) {
    $vowels = preg_match_all('/[aeiou]/i', $value, $matches);
    $reversed = strrev($value);
    echo "Original String: $value, Vowel Count: $vowels, Reversed String: $reversed\n";
}
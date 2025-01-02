<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Count vowels
    $vowelCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $vowelCount++;
        }
    }

    // Reverse string
    $reversedString = strrev($string);

    // Print output
    echo "Original String: " . $string . ", Vowel Count: " . $vowelCount . ", Reversed String: " . $reversedString . "<br>";
}

?>
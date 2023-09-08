<?php
// Concatenation
$string1 = "Hello, ";
$string2 = "PHP!";
$concatenatedString = $string1 . $string2;
echo "Concatenation: " . $concatenatedString . "<br>";

// String length
$length = strlen($concatenatedString);
echo "String Length: " . $length . "<br>";

// Substring
$substring = substr($concatenatedString, 0, 5);
echo "Substring: " . $substring . "<br>";

// Uppercase
$uppercaseString = strtoupper($concatenatedString);
echo "Uppercase: " . $uppercaseString . "<br>";

// Lowercase
$lowercaseString = strtolower($concatenatedString);
echo "Lowercase: " . $lowercaseString . "<br>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP String Functions</title>
</head>
<body>
<?php

// Function: addcslashes()
$input = "Hello, World!";
$escaped = addcslashes($input, 'W');
echo "<p>addcslashes() - Purpose: Quote string with slashes, Input: $input, Output: $escaped</p>";
echo "<hr>";

// Function: bin2hex()
$input = "Hello, World!";
$hex = bin2hex($input);
echo "<p>bin2hex() - Purpose: Convert binary data into hexadecimal, Input: $input, Output: $hex</p>";
echo "<hr>";

// Function: chr()
$ascii = 65;
$character = chr($ascii);
echo "<p>chr() - Purpose: Get a character from an ASCII value, Input: $ascii, Output: $character</p>";
echo "<hr>";

// Function: chunk_split()
$input = "Hello, World!";
$split = chunk_split($input, 2, '-');
echo "<p>chunk_split() - Purpose: Split a string into smaller chunks, Input: $input, Output: $split</p>";
echo "<hr>";

// Function: count_chars()
$input = "Hello, World!";
$charCount = count_chars($input, 1);
echo "<p>count_chars() - Purpose: Count character occurrences, Input: $input, Output: " . json_encode($charCount) . "</p>";
echo "<hr>";

// Function: crc32()
$input = "Hello, World!";
$crc32Value = crc32($input);
echo "<p>crc32() - Purpose: Calculate 32-bit CRC checksum, Input: $input, Output: $crc32Value</p>";
echo "<hr>";

// Function: explode()
$input = "Hello, World!";
$parts = explode(' ', $input);
echo "<p>explode() - Purpose: Split a string by a delimiter, Input: $input, Output: " . implode(', ', $parts) . "</p>";
echo "<hr>";

// Function: get_html_translation_table()
$table = get_html_translation_table(HTML_ENTITIES);
echo "<p>get_html_translation_table() - Purpose: Get HTML translation table</p>";
echo "<pre>";
print_r($table);
echo "</pre>";
echo "<hr>";

// Function: hex2bin()
$hex = "48656c6c6f2c20576f726c6421";
$binary = hex2bin($hex);
echo "<p>hex2bin() - Purpose: Convert hexadecimal data to binary, Input: $hex, Output: $binary</p>";
echo "<hr>";

// Function: html_entity_decode()
$input = "Hello &amp; World!";
$decoded = html_entity_decode($input);
echo "<p>html_entity_decode() - Purpose: Decode HTML entities, Input: $input, Output: $decoded</p>";
echo "<hr>";

// Function: htmlentities()
$input = "Hello, World!";
$encoded = htmlentities($input);
echo "<p>htmlentities() - Purpose: Convert characters to HTML entities, Input: $input, Output: $encoded</p>";
echo "<hr>";

// Function: htmlspecialchars_decode()
$input = "Hello &lt;em&gt;World&lt;/em&gt;!";
$decoded = htmlspecialchars_decode($input);
echo "<p>htmlspecialchars_decode() - Purpose: Decode special HTML characters, Input: $input, Output: $decoded</p>";
echo "<hr>";

// Function: htmlspecialchars()
$input = "Hello <em>World</em>!";
$encoded = htmlspecialchars($input);
echo "<p>htmlspecialchars() - Purpose: Convert special HTML characters to entities, Input: $input, Output: $encoded</p>";
echo "<hr>";

// Function: implode() / join()
$array = ["Hello", "World", "PHP"];
$joined = implode(", ", $array);
echo "<p>implode() / join() - Purpose: Join array elements into a string, Input: " . implode(", ", $array) . ", Output: $joined</p>";
echo "<hr>";

// Function: md5()
$input = "Hello, World!";
$hashed = md5($input);
echo "<p>md5() - Purpose: Calculate MD5 hash, Input: $input, Output: $hashed</p>";
echo "<hr>";

// Function: ord()
$character = 'A';
$asciiValue = ord($character);
echo "<p>ord() - Purpose: Get ASCII value of a character, Input: $character, Output: $asciiValue</p>";
echo "<hr>";

// Function: printf()
$number = 42;
printf("<p>printf() - Purpose: Output formatted string, Input: %d, Output: %d</p>", $number, $number);
echo "<hr>";

// Function: sha1()
$input = "Hello, World!";
$hashed = sha1($input);
echo "<p>sha1() - Purpose: Calculate SHA-1 hash, Input: $input, Output: $hashed</p>";
echo "<hr>";

// Function: str_getcsv()
$input = "Jaymi0,20";
$csvArray = str_getcsv($input);
echo "<p>str_getcsv() - Purpose: Parse CSV string into an array, Input: $input, Output: " . implode(", ", $csvArray) . "</p>";
echo "<hr>";

// Function: str_shuffle()
$input = "Hello, World!";
$shuffled = str_shuffle($input);
echo "<p>str_shuffle() - Purpose: Randomly shuffle characters in a string, Input: $input, Output: $shuffled</p>";
echo "<hr>";

// Function: str_split()
$input = "Hello, World!";
$splitArray = str_split($input);
echo "<p>str_split() - Purpose: Split a string into an array of characters, Input: $input, Output: " . implode(", ", $splitArray) . "</p>";
echo "<hr>";

// Function: str_word_count()
$input = "Hello, World!";
$wordCount = str_word_count($input);
echo "<p>str_word_count() - Purpose: Count words in a string, Input: $input, Output: $wordCount</p>";
echo "<hr>";

// Function: stripos()
$input = "Hello, World!";
$position = stripos($input, "world");
echo "<p>stripos() - Purpose: Find position of a substring (case-insensitive), Input: $input, Output: $position</p>";
echo "<hr>";

// Function: stristr()
$input = "Hello, World!";
$substring = "WORLD";
$found = stristr($input, $substring);
echo "<p>stristr() - Purpose: Find a substring (case-insensitive), Input: $input, Output: $found</p>";
echo "<hr>";

// Function: ucwords()
$input = "hello world";
$capitalized = ucwords($input);
echo "<p>ucwords() - Purpose: Uppercase the first character of each word, Input: $input, Output: $capitalized</p>";
echo "<hr>";

?>
</body>
</html>

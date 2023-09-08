<!-- Create a php script which creates a function having choice and string as
parameter and perform the following task on string based on choice. The
function should return the answer.
○ Reverse the string.
○ Count the length of the string
○ Display the first word of the string.
○ Display the last five words from the string.
○ Display characters from position 5 to 15 from the string -->

<?php
function stringManipulation($string, $choice) {
    switch ($choice) {
        case "reverse":
            return strrev($string);
        case "length":
            return strlen($string);
        case "first":
            return strtok($string, " ");
        case "last":
            $words = explode(" ", $string);
            $lastFive = array_slice($words, -5);
            return implode(" ", $lastFive);
        case "substring":
            return substr($string, 5, 10);
        default:
            return "Error: Invalid choice";
    }
}

echo stringManipulation("Hello World", "reverse") . "<br>";
echo stringManipulation("Hello World", "length") . "<br>";
echo stringManipulation("Hello World", "first") . "<br>";
echo stringManipulation("Hello World", "last") . "<br>";
echo stringManipulation("Hello World", "substring") . "<br>";

?>


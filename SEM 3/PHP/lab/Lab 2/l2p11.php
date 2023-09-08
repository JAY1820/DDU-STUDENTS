<?php
function isPalindrome($number) {
    $ans = $number;
    $reverse = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $reverse = $reverse * 10 + $digit;
        $number = (int)($number / 10);
    }

    return $ans === $reverse;
}

$num = 121;

if (isPalindrome($num)) {
    echo $num . " is a palindrome number.";
} else {
    echo $num . " is not a palindrome number.";
}
?>

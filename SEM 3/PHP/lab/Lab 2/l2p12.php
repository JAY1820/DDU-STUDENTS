<?php
function reverseNumber($number) {
    $reverse = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $reverse = $reverse * 10 + $digit;
        $number = (int)($number / 10);
    }

    return $reverse;
}

$num = 123;
$reversedNum = reverseNumber($num);

echo "Original Number: " . $num . "<br>";
echo "Reversed Number: " . $reversedNum . "<br>";
?>

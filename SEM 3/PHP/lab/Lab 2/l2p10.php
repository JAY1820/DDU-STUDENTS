<?php
$oddNumbers = [];
$num = 1;

while (count($oddNumbers) < 10) {
    if ($num % 2 !== 0) {
        $oddNumbers[] = $num;
    }
    $num++;
}

echo "First ten odd numbers: " . implode(", ", $oddNumbers) . "<br>";
?>

<!-- Create a php script which passes the array into function as a parameter. The
function then counts the total number of odd, even and prime numbers -->
<?php
function countOddEvenPrime($numbers) {
    $oddCount = 0;
    $evenCount = 0;
    $primeCount = 0;

    foreach ($numbers as $number) {
        if ($number % 2 == 0) {
            $evenCount++;
        } else {
            $oddCount++;
        }

        if ($number > 1 && isPrime($number)) {
            $primeCount++;
        }
    }

    return array(
        'odd' => $oddCount,
        'even' => $evenCount,
        'prime' => $primeCount
    );
}

function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    if ($num <= 3) {
        return true;
    }
    if ($num % 2 == 0 || $num % 3 == 0) {
        return false;
    }
    $i = 5;
    while ($i * $i <= $num) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }
    return true;
}

// Example usage
$numbersArray = array(2, 3, 5, 6, 7, 10, 11, 13, 17);

$result = countOddEvenPrime($numbersArray);

echo "Total odd numbers: " . $result['odd'] . "<br>";
echo "Total even numbers: " . $result['even'] . "<br>";
echo "Total prime numbers: " . $result['prime'] . "<br>";
?>

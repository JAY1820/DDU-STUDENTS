<!-- 
Create a PHP script to demonstrate variable length arguments. Pass integer and float
values to a functions and calculate
○ sum of all arguments
○ product of all arguments
○ count of integer and real number argument
 -->
 <?php

function variableLengthArguments() {
    $sum = 0;
    $product = 1;
    $integers = 0;
    $floats = 0;
    foreach (func_get_args() as $value) {
        $sum += $value;
        $product *= $value;
        if (is_int($value)) {
            $integers++;
        } else {
            $floats++;
        }
    }
    
    echo "Sum: $sum<br>";
    echo "Product: $product<br>";
    echo "Integers: $integers<br>";
    echo "Floats: $floats<br>";
}

// Example usage:
variableLengthArguments(1, 2, 3, 4.5, 5.5);
?>

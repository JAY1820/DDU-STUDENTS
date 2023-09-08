<!-- Create a php script which passes two values and the choice of operation as
parameters of a function . Depending on the choice function should perform the
arithmetic operation on values. -->

<?php

function arithmetic($value1, $value2, $operation) {
    switch ($operation) {
        case "add":
            return $value1 + $value2;
        case "subtract":
            return $value1 - $value2;
        case "multiply":
            return $value1 * $value2;
        case "divide":
            if ($value2 == 0) {
                return "Error: Cannot divide by zero";
            } else {
                return $value1 / $value2;
            }
        default:
            return "Error: Invalid operation";
    }
}

echo arithmetic(5, 3, "add"); 
echo arithmetic(5, 3, "subtract"); 
echo arithmetic(5, 3, "multiply"); 
echo arithmetic(5, 3, "divide");

?>

<?php
// Notice Error
$variable1 = 5;
echo $variable1;  // This will work fine
echo $variable2;  // This will generate a notice error because $variable2 is not defined
// Warning Error
$file = fopen("nonexistent_file.txt", "r");  // This will generate a warning error because the file does not exist
// Error
function divide($a, $b) {
    return $a / $b;
}
$result = divide(10, 0);  // This will generate a division by zero error
echo "This will not be displayed because of the error above.";
error_reporting(E_ALL & ~E_NOTICE);
    ini_set('display_errors', 1);
    $x = $undefined_variable;
?>

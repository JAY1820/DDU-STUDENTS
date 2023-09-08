<?php
// Integer to String
$intVar = 10;
$stringVar = (string) $intVar;
echo "Integer to String: " . $stringVar . "<br>";

$stringVar = "20";
$intVar = (int) $stringVar;
echo "String to Integer: " . $intVar . "<br>";

$intVar = 10;
$floatVar = (float) $intVar;
echo "Integer to Float: " . $floatVar . "<br>";

$floatVar = 3.14;
$intVar = (int) $floatVar;
echo "Float to Integer: " . $intVar . "<br>";
?>

<?php
// 4. Write a php script which demonstrates the function of array padding.?
$numbers = array(1,2,3,4,5);
print_r($numbers);
echo "<br>";
$numbers = array_pad($numbers, 7, 0);
print_r($numbers);
echo "<br>";
$numbers = array_pad($numbers, -7, 0);
print_r($numbers);  
echo "<br>";
?>
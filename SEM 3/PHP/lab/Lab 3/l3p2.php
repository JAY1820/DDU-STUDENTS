<?php
/*2. Write a php script which creates an array of even numbers starting from 50 to 200.
Calculate the average, sum, min and max from the numbers stored in the array.*/
$sum=0;
$avg=0;
$min=0;
$max=0;
$even=array();
for($i=50;$i<=200;$i++){
    if($i%2==0){
        $even[]=$i;
    }
}
?>
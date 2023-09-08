<?php
/*
6. Write a script which creates an array called marks , containing student name as key and
mark as value. (e.g “Pratik”=> 34 ,”reema”= 36) .
➔ Display the array according to marks in ascending order.
➔ Display the array according to the name in descending order
*/
$marks = array("Pratik"=> 34 ,"reema"=> 36,"Rahul"=> 35,"Raj"=> 37,"Riya"=> 38);
asort($marks);
foreach($marks as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}   
echo "<br>";
arsort($marks);
foreach($marks as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}   
echo "<br>";

?>
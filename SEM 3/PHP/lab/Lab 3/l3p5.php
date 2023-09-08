<?php
/*
5. Write a php script which checks if the array is present or not , if value is present then it
searches the value from the array and prints the index of search value .
*/
$numbers = array(1,2,3,4,5);    
if(in_array(3, $numbers))
{
    echo "Value found";
}
else
{
    echo "Value not found";
}   
echo "<br>";
echo array_search(3, $numbers);
echo "<br>";
echo array_search(6, $numbers);
echo "<br>";
?>
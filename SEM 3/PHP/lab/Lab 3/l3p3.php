<?php
/*
3. Write a php script which having multidimensional array for storing information like

Item Price Quantity
Item1 100 12
Item2 250 10
➔ Add 5 items information using associative array, Display the information in
tabular format
*/
$items = array(
    array("Item1",100,12),
    array("Item2",250,10),
    array("Item3",300,15),
    array("Item4",150,20),
    array("Item5",200,25)
);  
echo "<table border='1'>";
echo "<tr><th>Item</th><th>Price</th><th>Quantity</th></tr>";
for($i=0;$i<count($items);$i++){
    echo "<tr>";
    for($j=0;$j<count($items[$i]);$j++){
        echo "<td>".$items[$i][$j]."</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
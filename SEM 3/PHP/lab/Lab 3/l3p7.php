<!-- Write a php script which creates an array[3][2] matrix and displays the matrix -->
<?php
$matrix=array(array(1,2),array(3,4),array(5,6));
for($i=0;$i<3;$i++){
    for($j=0;$j<2;$j++){
        echo $matrix[$i][$j]." ";
    }
    echo "<br>";
}
?>

<?php
function checkAgeRange($age) {
    if ($age < 20 || $age > 60) {
        echo "Not a valid age";
    } elseif ($age >= 20 && $age <= 35) {
        echo "Age is in the range of 20 to 35";
    } elseif ($age >= 36 && $age <= 55) {
        echo "Age is in the range of 36 to 55";
    } else {
        echo "Age is more than 55";
    }
}

$age1 = 18; 


checkAgeRange($age1);

?>
<?php
if(isset($_COOKIE['fname']) && isset($_COOKIE['m1']) && isset($_COOKIE['m2']) && isset($_COOKIE['m3'])) 
{
    echo "Name is : ". $_COOKIE['fname']. "<br>";
    echo "1st sub mark is : ". $_COOKIE['m1']. "<br>"; 
    echo "2nd sub mark is : ". $_COOKIE['m2']. "<br>";
    echo "3rd sub mark is : ". $_COOKIE['m3']. "<br>";
}
else 
{
    echo "No cookies are set";
}
?>

<?php
if(isset($_COOKIE['uname']) && isset($_COOKIE['age']) && isset($_COOKIE['city'])) 
{
    echo "User name is : ". $_COOKIE['uname']. "<br>";
    echo "Age is : ". $_COOKIE['age']. "<br>"; 
    echo "City is : ". $_COOKIE['city']. "<br>";
}
else 
{
    echo "No cookies are set";
}
?>

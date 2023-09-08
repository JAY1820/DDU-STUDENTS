<?php
if(isset($_POST['sbt'])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $contact = $_POST['contact'];
    $branch = $_POST['branch'];

    echo "<h2>";
    echo "Name is $name <br>";
    echo "Password is: $pass <br>";
    echo "Contact is: $contact <br>";
    echo "Branch is: $branch <br>";
    echo "</h2>";
}
?>

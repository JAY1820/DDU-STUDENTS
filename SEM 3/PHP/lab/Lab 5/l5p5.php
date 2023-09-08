<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        input{
            width: 100%;
        }
    </style>
</head>
<body>
    <form method="POST" name ="frm" action="data.php">
        <table align="center">
            <tr>
                <th>Result</th>
            </tr>
            <tr>
                <td><input type="text" placeholder="Enter name" name="fname" required></td>
            </tr>
            <tr>
                <td><input type="number" placeholder="Enter 1st subject mark" name="m1" max="100" min="0" required></td>
            </tr>
            <tr>
                <td><input type="number" placeholder="Enter 2nd subject mark" name="m2" max="100" min="0" required></td>
            </tr>
            <tr>
                <td><input type="number" placeholder="Enter 3rd subject mark" name="m3" max="100" min="0" required></td>
            </tr>
            <tr>
                <td><input type="Submit" name="sbt" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['sbt']))
{
    $fname = $_POST['fname'];
    $m1 = $_POST['m1'];
    $m2 = $_POST['m2'];
    $m3 = $_POST['m3'];

    setcookie("fname", $fname, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("m1", $m1, time() + (86400 * 30), "/"); 
    setcookie("m2", $m2, time() + (86400 * 30), "/");
    setcookie("m3", $m3, time() + (86400 * 30), "/");

    header('Location: data.php'); // redirect to data.php
}
?>

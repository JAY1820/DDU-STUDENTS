<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Student result</title>
 <style> 
input{
 width: 100%;
 }
 </style>
 </head>
<body>
 <form method="POST" name ="frm" action="l5p4data.php">
 <table align="center">
 <tr>
 <th>Result</th>
 </tr>
 <tr>
 <td><input type="text" placeholder="Enter user name" name="uname" 
required></td>
 </tr>
 <tr>
 <td><input type="number" placeholder="Enter age" name="age" max="100" min="0" 
required></td>
 </tr>
 <tr>
 <td><input type="text" placeholder="Enter city" name = "city" required></td>
 </tr>
 <tr>
 <td><input type="Submit" name="sbt" value="Submit"></td>
 </tr>
 </table>
 </form>
</body> </html> 

<?php
if(isset($_POST['sbt']))
{
    $uname = $_POST['uname'];
    $age = $_POST['age'];
    $city = $_POST['city'];

    setcookie("uname", $uname, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("age", $age, time() + (86400 * 30), "/"); 
    setcookie("city", $city, time() + (86400 * 30), "/");

    header('Location: view.php'); // redirect to view.php
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up</h1>
    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 'empty') {
            echo '<p style="color:red;">Please fill in all fields</p>';
        } elseif ($_GET['error'] == 'user_exists') {
            echo '<p style="color:red;">Username already exists</p>';
        }
    }
    ?>
    <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>

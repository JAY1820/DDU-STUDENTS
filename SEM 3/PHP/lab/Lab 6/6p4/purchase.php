<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

unset($_SESSION['cart']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Purchase</title>
</head>
<body>
    <h1>Purchase</h1>
    <p>Welcome, <?php echo $_SESSION['username']; ?>! <a href="logout.php">Logout</a></p>
    <p>Thank you for your purchase!</p>
    <p><a href="product.php">Continue Shopping</a></p>
</body>
</html>

<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        header('Location: signup.php?error=empty');
        exit;
    }
    
    $users = file_get_contents('users.txt');
    
    if (strpos($users, $username) !== false) {
        header('Location: signup.php?error=user_exists');
        exit;
    }
    
    file_put_contents('users.txt', "$username,$password\n", FILE_APPEND);
    
    header('Location: login.php');
} else {
    header('Location: signup.php');
}
?>

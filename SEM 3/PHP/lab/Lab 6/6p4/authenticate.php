<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $users = file_get_contents('users.txt');
    $users = explode("\n", $users);
    
    foreach ($users as $user) {
        list($u, $p) = explode(',', $user);
        if ($u == $username && $p == $password) {
            $_SESSION['username'] = $username;
            header('Location: product.php');
            exit;
        }
    }
    
    header('Location: login.php?error=1');
} else {
    header('Location: login.php');
}
?>

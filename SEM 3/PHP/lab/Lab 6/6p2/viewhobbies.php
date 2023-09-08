<?php
session_start();
if (isset($_POST['sbt'])) {
    if (empty($_POST['fname']) || empty($_POST['pwd'])) {
        echo "Login required";
        exit();
    }
    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['pwd'] = md5($_POST['pwd']);
    if (isset($_POST['chk'])) {
        $_SESSION['chk'] = $_POST['chk'];
    } else {
        $_SESSION['chk'] = [];
    }
}
if (!isset($_SESSION['fname'])) {
    echo "Login required";
} else {
    echo "Hobbies: ";
    foreach ($_SESSION['chk'] as $hobby) {
        echo $hobby . " ";
    }
}
?>

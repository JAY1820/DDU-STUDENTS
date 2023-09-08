<?php
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "Error: $errstr<br>";
}
set_error_handler("customErrorHandler");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = $_POST['number'];

    if ($number < 0) {
        trigger_error("Negative numbers are not allowed.", E_USER_WARNING);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Negative Number Check</title>
</head>
<body>
    <h1>Negative Number Check</h1>
    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Check">
    </form>
</body>
</html>

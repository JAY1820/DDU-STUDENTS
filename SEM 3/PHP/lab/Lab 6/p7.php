<?php
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    switch ($errno) {
        case E_USER_WARNING:
            echo "User Warning: $errstr<br>";
            break;
        case E_USER_ERROR:
            echo "User Error: $errstr<br>";
            die();
        default:
            echo "Unknown error type: $errstr<br>";
            break;
    }
}

set_error_handler("customErrorHandler");

function checkParameters($param1, $param2) {
    if (!is_numeric($param1) || !is_numeric($param2)) {
        trigger_error("Fatal Error: Parameters must be numbers", E_USER_ERROR);
    }

    if ($param1 < $param2) {
        trigger_error("Warning: Parameter 1 is less than Parameter 2", E_USER_WARNING);
    }

    echo "Parameters are valid.";
}

checkParameters(5, 10);       // No errors or warnings
checkParameters("abc", 10);   // Fatal error
checkParameters(15, 8);       // Warning
?>

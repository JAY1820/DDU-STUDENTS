<?php
if(isset($_POST['write'])){
    $filename = $_POST['filename'];
    $write = $_POST['content']; // change 'string' to 'content'
    $fp = fopen($filename, "a");
    fwrite($fp, $write);
    echo "Data written successfully";
    fclose($fp);
}
if(isset($_POST['read'])){
    $filename = $_POST['filename'];
    $fp = fopen($filename, "r");
    echo fread($fp, filesize($filename));
    fclose($fp);
}
?>

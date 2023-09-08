<?php
$gVar1 = "hi";
$gVar2 = "hello";

function testScope() {
    global $gVar1;
    echo $gVar2 . "<br>";
}
testScope();
?>

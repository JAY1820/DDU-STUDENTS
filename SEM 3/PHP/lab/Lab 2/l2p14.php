<!-- 
    Create the php script which changes the background color of the div tag according to
variable value. ( hint <div style="background-color:yellow;">)
 -->

<?php
$color = "yellow"; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Background Color</title>
</head>
<body>
    <div style="background-color: <?php echo $color; ?>;">
        <h1>Background Color</h1>
    </div>
</body>
</html>

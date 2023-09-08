
<?php
  extract($_REQUEST);
  if(isset($sbt))
  {

    session_start();
    $_SESSION['fname']=$fname;
    $_SESSION['m1']=$m1;
    $_SESSION['m2']=$m2;
    $_SESSION['m3']=$m3;    
  }

echo("name is:".$_SESSION['fname']."<br>");
echo("marks 1 is:".$_SESSION['m1']."<br>");
echo("marks 2 is:".$_SESSION['m2']."<br>");
echo("marks 3 is:".$_SESSION['m3']."<br>");

?>
<?php
 extract($_REQUEST);
 if(isset($sbt))
 {
  $arr = explode(",", $no); // Changed ", " to ","
  echo("No is : <br>"); 
  $result = array_sum($arr);
  foreach($arr as $ele)
  {
   echo($ele . "<br>");
  } 
  echo("<br>Sum is : $result<br>");
 }
?>

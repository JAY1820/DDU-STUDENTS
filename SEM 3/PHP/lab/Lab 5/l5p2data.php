<?php
if(isset($_POST['add']))
{
  $no1=$_POST['no1'];
  $no2=$_POST['no2'];
  $ans1=$no1+$no2;
  echo "Addition is: ". $ans1;
}
if(isset($_POST['sub']))
{
  $no1=$_POST['no1'];
  $no2=$_POST['no2'];
  $ans1=$no1-$no2;
  echo "Subtraction is: ". $ans1;
}
if(isset($_POST['mul']))
{
  $no1=$_POST['no1'];
  $no2=$_POST['no2'];
  $ans1=$no1*$no2;
  echo "Multiplication is: ".$ans1;
}
if(isset($_POST['div'])){
  $no1=$_POST['no1'];
  $no2=$_POST['no2'];
  if($no2 != 0) {
    $ans1=$no1/$no2;
    echo "Division is: ".$ans1;
  } else {
    echo "Division by zero is not allowed.";
  }
}
?>

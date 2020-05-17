<?php

ini_set('display_startup_errors',1); 
ini_set('display_errors',1);
error_reporting(-1);

$connection = mysqli_connect("localhost","root","") or die (mysqli_error($connection));
$db = mysqli_select_db($connection,"app") or die (mysqli_error($connection));

if($connection){

  echo "connection successfull";
}
else{
  echo "connection failed";
}
?>



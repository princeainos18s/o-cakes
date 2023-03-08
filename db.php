<?php
$localhost= 'localhost';
$username= 'sa';
$password= 'sa@1234';
$database= 'o-cakes';
$con = mysqli_connect("$localhost","$username","$password","$database");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

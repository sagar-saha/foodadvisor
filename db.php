<?php
global $con;
$con = mysqli_connect("localhost","aynginaboys_sk","@sagark00l","aynginaboys_bik");
mysqli_query($con,'SET CHARACTER SET utf8');
mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'") ;
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?> 
<?php
  session_start();
  $servername = "cppdb.cmetaa25g7bh.us-east-1.rds.amazonaws.com"; //change this  accordingly
  $dBUsername = "root";
  $dBPassword = "12345678";
  $dBName = "hostel_management_system";
 // session_start();
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>




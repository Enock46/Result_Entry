<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "student";
  
  $conn = mysqli_connect($host, $username, $password, $dbname);

  if ($conn === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
?>
<?php

$host = 'localhost';
$pass = '';
$user = 'root';
$db = 'look_it_up';


$mysqli = mysqli_connect($host,$user,$pass,$db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
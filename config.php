<?php
session_start();
$host = "localhost"; 
$user = "root"; 
$password = "123456";
$db = "CSEFirst"; 

$con = mysqli_connect($host, $user, $password,$db);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

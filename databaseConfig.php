<?php

$servername = "localhost";
$username = "root";
$password = "Password1.";
$dbname = "shop_retail_site";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 else
 {
	echo "Connected successfully<br/><br/>";
 }
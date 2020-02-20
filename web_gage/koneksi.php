<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "pemesanan_gage";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
	die ("Connection Failed : ".mysqli_error());
}
//echo "Connection Successfully";
?>
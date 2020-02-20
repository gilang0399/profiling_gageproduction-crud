<?php 
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = "SELECT * from user where username='$username' and password='$password'";

if (mysqli_query($conn, $login)){
	//echo "Berhasil Masuk";
	header("location:menu.php");
	} else {
	echo mysqli_error($conn,$login);
	}

//if ($cek > 0 ) {
//	session_start();
//	$_SESSION['username']= $username;
//	$_SESSION['status']= "login";
//	header("location:adminpanel/indexadmin.php");
//} else {
//	header("location:index.php");
//}
?>
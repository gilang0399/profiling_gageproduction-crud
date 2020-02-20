<?php 
include "../koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = "SELECT * from data_admin where username='$username' and password='$password'";

if (mysqli_query($conn, $login)){
	echo "Berhasil Masuk";
	header("location:indexadmin.php");
	} else {
	echo "Gagal";
	}
?>
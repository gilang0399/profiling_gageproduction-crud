<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Validasi Register User</title>
	<link rel="icon" href="img/logo_gage.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="makalah">
<?php
require "koneksi.php";
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$sql = "INSERT INTO user (nama, username, password, alamat, email) values 
	('$nama','$username','$password','$alamat','$email')";
	if (mysqli_query($conn, $sql)){
	//echo "Data Berhasil Ditambahkan";
	} else {
	echo "Data Tidak Berhasil Ditambah";
	}
?>
<div align="center">
	<h1 align="center">Registrasi Berhasil</h1>
	<table border="3" width="500" style="background: white;">
		<tr>
			<td colspan="2" align="center">Hasil Register</td>
		</tr>
		<tr>
			<td>Nama User</td>
			<td><?php echo $nama?></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><?php echo $username?></td>
		</tr>
		<!--<tr>
			<td>Password</td>
			<td><?php echo $password?></td>
		</tr>-->
		<tr>
			<td>Alamat</td>
			<td><?php echo $alamat?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $email?></td>
		</tr>
		<tr>
			<td colspan="2">
				<a href="index.html" class="btn btn-primary">Home</a>
				<a href="register.php" class="btn btn-warning">Kembali</a>
			</td>
		</tr>
	</table>
</div>
</body>
</html>
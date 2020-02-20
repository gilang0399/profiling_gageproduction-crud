<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register User</title>
	<link rel="icon" href="img/logo_gage.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="makalah">
	<h1 align="center" style="color: red;">Register Untuk Login</h1>
	<div align="center">
		<form action="prosesregister.php" name="input" method="POST">
			<table class="" border="3" bgcolor="white" width="500">
				<tr>
					<td colspan="2" align="center">Masukkan Data Untuk Mendaftar</td>
				</tr>
				<tr>
					<td>Masukkan Nama</td>
					<td><input type="text" name="nama" size="30"></td>
				</tr>
				<tr>
					<td>Masukkan Username</td>
					<td><input type="text" name="username" size="30"></td>
				</tr>
				<tr>
					<td>Masukkan Password</td>
					<td><input type="password" name="password" size="30"></td>
				</tr>
				<tr>
					<td>Masukkan Alamat Lengkap</td>
					<td><textarea name="alamat" cols=""></textarea></td>
				</tr>
				<tr>
					<td>Masukkan Email</td>
					<td><input type="text" name="email" size="30"></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="" value="Submit" class="btn btn-primary">
						<input type="reset" name="" value="Hapus" class="btn btn-secondary">
						<a href="index.html" class="btn btn-danger">Kembali</a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
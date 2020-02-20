<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Pemesanan Design</title>
	<link rel="icon" href="../img/logo_gage.png" type="../image/png">
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body id="makalah">
	<nav id="main-navbar" class="navbar navbar-expand-md navbar-light bg-light fixed-top py-2 py-md-0">
	    	<div class="container">
	    		<a class="navbar-brand" href="../index.html">
		        	<span class="d-none" >GAGE Production</span>
		          	<img src="../img/logo png.png" class="small-logo d-none d-md-inline">
		          	<img src="../img/logo png.png" class="small-logo d-inline d-md-none">
	        	</a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
		        	<span class="navbar-toggler-icon"></span>
		        </button>
		    </div>
		</nav>
<br/>
<br/>
<br/>
	<h1 align="center" style="color: red;">Pemesanan GAGE Production Bagian Design</h1>
	<div align="center">
	<table border="3" bgcolor="white" width="500">
		<form action="prosesdesign.php" method="POST" id="">
			<thead>
				<td colspan="2" align="center"><strong>Form Pemesanan Design</strong></td>
			</thead>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" size="30"></td>
			</tr>
			<tr>
				<td>Nama Pemesan</td>
				<td><input type="text" name="nama" size="30"></td>
			</tr>
			<tr>
				<td>Tema</td>
				<td><input type="text" name="tema" size="30"></td>
			</tr>
			<tr>
				<td>Jenis Desain</td>
				<td>
					<select name="jenis">
						<option selected value="Logo">Logo
						<option value="Banner">Banner
						<option value="Poster">Poster
						<option value="Brosur">Brosur	
					</select>
				</td>
			</tr>
			<tr>
				<td>Kisaran Harga</td>
				<td>
					Logo : Rp.20000-Rp.100000<br/>
					Banner : Rp.50000-Rp.150000<br/>
					Poster : Rp.40000-Rp.100000<br/>
					Brosur : Rp.30000-Rp.100000<br/>
				</td>
			</tr>
			<tr>
				<td>Tanggal Memesan</td>
				<td><input type="date" name="Tanggal"></td>
			</tr>
			<tr>
				<td>Tanggal Selesai</td>
				<td><input type="date" name="durasi" size="30"></td>
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td><input type="text" name="no" size="30"></td>
			</tr>
			<tr>
				<td colspan="2">	
					<input type="submit" name="" class="btn btn-primary" value="Proses">
					<input type="reset" name="" class="btn btn-secondary" value="Hapus">
					<a href="../menu.php" class="btn btn-danger">Kembali</a>
				</td>
			</tr>
		</form>
	</table>
</body>
</html>
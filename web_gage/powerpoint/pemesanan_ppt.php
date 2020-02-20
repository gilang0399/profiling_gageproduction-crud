<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Pemesanan Powerpoint</title>
	<link rel="icon" href="../img/logo_gage.png" type="../image/png">
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body id="makalah">
<section>
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
</section>
<br/>
<br/>
<br/>

	<h1 align="center" style="color: red;">Pemesanan GAGE Production Bagian Powerpoint</h1>
	<div align="center">
		<table border="3" width="500" bgcolor="white">
			<form action="proses_ppt.php" name="input" id="input" method="POST">
				<tr>
					<td colspan="2" align="center">Form Pemesanan Pembuatan Powerpoint</td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" size="30"></td>
				</tr>
				<tr>
					<td>Nama Pemesan</td>
					<td><input type="text" name="nama" size="30"></td>
				</tr>
				<tr>
					<td>Judul Materi</td>
					<td>
						<input type="text" name="materi" size="30"><br/>
						<!--<input type="file" name="file"><br/>
						<input type="submit" name="upload" class="btn btn-primary" value="Upload">-->
					</td>
				</tr>
				<tr>
					<td>Editing</td>
					<td>
						<input type="radio" name="editing" value="Transisi = 1500/Slide">Transisi = 2000/Slide<br/>
						<input type="radio" name="editing" value="Animasi = 2000/Slide">Animasi = 1500/Slide<br/>
						<input type="radio" name="editing" value="Transisi dan Animasi = 2500/Slide">Transisi dan Animasi = 2500/Slide
					</td>
				</tr>
				<tr>
					<td>Tanggal Masuk</td>
					<td><input type="date" name="tanggal"></td>
				</tr>
				<tr>
					<td>Tanggal Selesai</td>
					<td><input type="date" name="durasi" size="30"></td>
				</tr>
				<tr>
					<td>Nomor HP/Kontak</td>
					<td><input type="text" name="no"></td>
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
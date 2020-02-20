<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Makalah</title>
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
	<h1 align="center" style="color: red;">Pemesanan GAGE Production Bagian Makalah</h1>
	<div align="center">
		<form id="input" name="input" action="proses_makalah.php" method="POST">
			<table class="" border="3" bgcolor="white">
				<tr>
					<thead>
					<td colspan="2" align="center">Form Pemesanan Pengetikan Makalah</td>
					</thead>
				</tr>
				<tr>
					<td>Masukkan Username Anda</td>
					<td><input type="text" name="user" size="25"></td>
				</tr>
				<tr>
					<td>Masukkan Nama Pemesan</td>
					<td><input type="text" name="nama" size="25"></td>
				</tr>
				<tr>
					<td>Masukkan Judul Makalah</td>
					<td>
						<input type="text" name="materi" size="40">
					<!--<input type="file" name="file">
						<input type="submit" name="upload" class="btn btn-primary" value="Upload">-->
					</td>
				</tr>
				<tr>
					<td>Jenis Kertas</td>
					<td>
						<input type="radio" name="kertas" value="A4 = 2000/Lembar">A4 = 2000/Lembar
						<input type="radio" name="kertas" value="F4 = 2500/Lembar">F4 = 2500/Lembar
					</td>
				</tr>
				<tr>
					<td>Tanggal Masuk</td>
					<td><input type="date" name="tanggal"></td>
				</tr>
				<tr>
					<td>Tanggal Selesai</td>
					<td><input type="date" name="durasi"></td>
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
			</table>
		</form>
	</div>
</body>
</html>
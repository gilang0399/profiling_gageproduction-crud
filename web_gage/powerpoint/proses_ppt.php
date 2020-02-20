<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hasil Pemesanan</title>
	<link rel="icon" href="../img/logo_gage.png" type="../image/png">
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body id="makalah">
	<section>
	<nav id="main-navbar" class="navbar navbar-expand-md navbar-light bg-light fixed-top py-2 py-md-0">
	    	<div class="container">
	    		<a class="navbar-brand" href="index.php">
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
<br/>
	<?php 
	require "../koneksi.php";
	$nama = $_POST['nama'];
	$username=$_POST['username'];
	$harga=0;
	$durasi=$_POST['durasi'];
	$status= "Belum Selesai";
	$materi =$_POST['materi'];
	$editing =$_POST['editing'];
	if ($editing == "Transisi = 1500/Slide"){
		$harga_patokan = "Rp. 1500/Slide";
	} else if ($editing == "Animasi = 2000/Slide"){
		$harga_patokan = "Rp. 2000/Slide";
	} else {
		$harga_patokan = "Rp. 2500/Slide";
	}
	//$file =$_POST['file'];
	$tanggal =$_POST['tanggal'];
	$no =$_POST['no'];

	$sql = "INSERT INTO powerpoint (username, nama,materi, editing, tanggal_masuk, durasi, nomor_hp, status, harga)
		values 
	('$username','$nama','$materi','$editing','$tanggal','$durasi','$no','$status','$harga')";
	if (mysqli_query($conn, $sql)){
	echo "Data Berhasil Ditambahkan";
	} else {
	echo "Data Tidak Berhasil Ditambah";
	}
	?>
	<div align="center">
	<h1 align="center" style="color : red;">Hasil Pemesanan Powerpoint</h1>
	<table border="3" width="500" align="center" bgcolor="white">
		<tr>
			<td colspan="2" align="center"><strong>Hasil Pemesanan</strong></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><?php echo $username ?></td>
		</tr>
		<tr>
			<td>Nama Pemesan</td>
			<td><?php echo $nama ?></td>
		</tr>
		<tr>
			<td>Materi</td>
			<td><?php echo $materi ?></td>
		</tr>
		<tr>
			<td>Editing</td>
			<td><?php echo $editing ?></td>
		</tr>
		<tr>
			<td>Harga Kisaran</td>
			<td><?php echo $harga_patokan ?></td>
		</tr>
		<tr>
			<td>Tanggal Pesan</td>
			<td><?php echo $tanggal ?></td>
		</tr>
		<tr>
			<td>Durasi</td>
			<td><?php echo $durasi ?></td>
		</tr>
		<tr>
			<td>No HP</td>
			<td><?php echo $no ?></td>
		</tr>
		<tr>
			<td>Status Penyelesaian</td>
			<td><?php echo $status ?></td>
		</tr>
		<tr>
		<td colspan="2" align="center"><a href="pemesanan_ppt.php" class="btn btn-danger">Kembali</a></td>
		</tr>
	</table>
</body>
</html>
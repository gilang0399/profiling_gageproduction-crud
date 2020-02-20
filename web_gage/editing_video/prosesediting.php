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

$nama=$_POST['nama'];
$bahan=$_POST['bahan'];
$username=$_POST['user'];
$pilihan=$_POST['pilihan'];
$status = "Belum Selesai";
$tanggal=$_POST['tanggal'];
$durasi=$_POST['durasi'];
$harga=0;
$no=$_POST['no'];
if ($pilihan == "Standart"){
	$harga_patokan = "Rp.50000-100000";
} else {
	$harga_patokan = "Rp.100000-150000";
}

$sql = "INSERT INTO editing_video (username, nama, bahan, pilihan_edit, nomor_hp, tanggal_masuk, durasi, status, harga)
		values 
	('$username','$nama','$bahan','$pilihan','$no','$tanggal','$durasi','$status','$harga')";
	if (mysqli_query($conn, $sql)){
	echo "Data Berhasil Ditambahkan";
	} else {
	echo "Data Tidak Berhasil Ditambah";
	}
?>
<div align="center">
	<h1 align="center" style="color : red;">Hasil Pemesanan Editing Video</h1>
	<table border="3" bgcolor="white" width="500">
		<tr>
			<td>Username</td>
			<td><?php echo $username ?></td>
		</tr>
		<tr>
			<td>Nama Pemesan</td>
			<td><?php echo $nama ?></td>
		</tr>
		<tr>
			<td>Bahan</td>
			<td><?php echo $bahan ?></td>
		</tr>
		<tr>
			<td>Pilihan Editing</td>
			<td><?php echo $pilihan ?></td>
		</tr>
		<tr>
			<td>Kisaran Harga</td>
			<td><?php echo $harga_patokan ?></td>
		</tr>
		<tr>
			<td>Tanggal Masuk</td>
			<td><?php echo $tanggal ?></td>
		</tr>
		<tr>
			<td>Durasi Penyelesaian</td>
			<td><?php echo $durasi ?></td>
		</tr>
		<tr>
			<td>Status Penyelesaiian</td>
			<td><?php echo $status ?></td>
		</tr>
		<tr>
		<td colspan="2" align="center"><a href="pemesananediting.html" class="btn btn-danger">Kembali</a></td>
		</tr>
	</table>
</body>
</html>
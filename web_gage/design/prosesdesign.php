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
$tema=$_POST['tema'];
$no=$_POST['no'];
$tanggal=$_POST['Tanggal'];
$jenis=$_POST['jenis'];
$harga=0;
$username=$_POST['username'];
$durasi=$_POST['durasi'];
$status="Belum Selesai";
if ($jenis == "Logo"){
	$harga_patokan = "Rp.20000-Rp.100000";
} else if ($jenis == "Banner"){
	$harga_patokan = "Rp.50000-Rp.150000";
} else if ($jenis == "Poster"){
	$harga_patokan = "Rp.40000-Rp.100000";
} else {
	$harga_patokan = "Rp.30000-Rp.100000";
}

$sql = "INSERT INTO desain (username, nama,jenis_pesanan, tema, tanggal_masuk, nomor_hp, durasi, status, harga)
		values 
	('$username','$nama','$jenis','$tema','$tanggal','$no','$durasi','$status','$harga')";
	if (mysqli_query($conn, $sql)){
	echo "Data Berhasil Ditambahkan";
	} else {
	echo mysqli_error($conn);
	}
?>
<table border="3" bgcolor="white" width="500" align="center">
	<tr>
		<td colspan="2" align="center"><STRONG>Hasil Pemesanan Desain</STRONG></td>
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
		<td>Tema Pemesanan</td>
		<td><?php echo $tema ?></td>
	</tr>
	<tr>
		<td>Jenis Pemesanan</td>
		<td><?php echo $jenis ?></td>
	</tr>
	<tr>
		<td>Patokan Harga</td>
		<td><?php echo $harga_patokan ?></td>
	</tr>
	<tr>
		<td>Tanggal Pesan</td>
		<td><?php echo $tanggal ?></td>
	</tr>
	<tr>
		<td>Waktu Penyelesaian</td>
		<td><?php echo $durasi ?></td>
	</tr>
	<tr>
		<td>Status Penyelesaian</td>
		<td><?php echo $status ?></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><a href="pemesanan_design.php" class="btn btn-danger">Kembali</a></td>
	</tr>
</table>
</body>
</html>
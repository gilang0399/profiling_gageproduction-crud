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
<br/>
<?php 
require "../koneksi.php";
//$id = $_POST['id'];
$nama = $_POST['nama'];
$username=$_POST['user'];
$materi = $_POST['materi'];
$kertas = $_POST['kertas'];
$tanggal = $_POST['tanggal'];
//$file = $_POST['file'];
$no = $_POST['no'];
$durasi=$_POST['durasi'];
$status= "Belum Selesai";
if ($kertas == "A4 = 2000/Lembar"){
	$harga_patokan = "Rp. 2000 Per Lembar";
} else {
	$harga_patokan = "Rp. 2500 Per Lembar";
}
$harga=0;

$sql = "INSERT INTO makalah (nama, username, materi, jenis_kertas, tanggal_masuk, nomor_hp, durasi, status, harga)
		values 
	('$nama','$username','$materi','$kertas','$tanggal','$no','$durasi','$status','$harga')";
	if (mysqli_query($conn, $sql)){
	//echo "Data Berhasil Ditambahkan";
	} else {
	//echo "Data Tidak Berhasil Ditambah";
	}
?>
<div align="center">
	<h1 align="center" style="color : red;">Pesanan Berhasil</h1>
	<table border="3" width="400" bgcolor="white">
		<tr>
			<td colspan="2" align="center">Hasil Pemesanan Makalah</td>
		</tr>
		<tr>
			<td>Username Pemesan</td>
			<td><?php echo $username ?></td>
		</tr>
		<tr>
			<td>Nama Pemesan</td>
			<td><?php echo $nama ?></td>
		</tr>
		<tr>
			<td>Judul Materi</td>
			<td><?php echo $materi ?></td>
		</tr>
		<tr>
			<td>Jenis Kertas</td>
			<td><?php echo $kertas ?></td>
		</tr>
		<tr>
			<td>Nomor HP/Kontak</td>
			<td><?php echo $no ?></td>
		</tr>
		<tr>
			<td>Harga Kertas</td>
			<td><?php echo $harga_patokan ?></td>
		</tr>
		<tr>
			<td>Tanggal Masuk</td>
			<td><?php echo $tanggal ?></td>
		</tr>
		<tr>
			<td>Status Penyelesaian</td>
			<td><?php echo $status ?></td>
		</tr>
		<tr>
			<td>Harga Total</td>
			<td><?php echo $harga?></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><a href="pemesanan_makalah.php" class="btn btn-danger">Kembali</a></td>
		</tr>
	</table>
</div>
</body>
</html>
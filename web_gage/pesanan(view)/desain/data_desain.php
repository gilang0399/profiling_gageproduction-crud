<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pemesan Desain</title>
    <link rel="icon" href="../../img/logo_gage.png" type="../../image/png">
	<link rel="stylesheet" type="text/css" href="../../fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body id="makalah">
<?php require "../../koneksi.php"; 
    $query = mysqli_query($conn, "SELECT * FROM desain ORDER BY id_desain DESC"); 
    ?>
<h1 align="center" style="color: red;">Data Pemesanan Desain</h1>
    <div align="center">
        <table border="3" align="center" bgcolor="white">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Jenis Pesanan</th>
                <th>Tema</th>
                <th>Tanggal Masuk</th>
                <th>Nomor HP/Telepon</th>
                <th>Tanggal Selesai</th>
                <th>Status</th>
                <th>Harga Total</th>
            </tr>
            <?php if(mysqli_num_rows($query)>0){ ?>
		    <?php 
			$id_desain = "1";
			while ($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $id_desain ?></td>
                <td><?php echo $data["username"]; ?></td>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["jenis_pesanan"]; ?></td>
                <td><?php echo $data["tema"]; ?></td>
                <td><?php echo $data["tanggal_masuk"]; ?></td>
                <td><?php echo $data["nomor_hp"]; ?></td>
                <td><?php echo $data["durasi"]; ?></td>
                <td><?php echo $data["status"]; ?></td>
                <td><?php echo $data["harga"]; ?></td>
                <td>
                    <?php echo "<a href='edit.php?id=".$data['id_desain']."'>Edit</a>";?>
				    <?php echo "<a href='delete.php?id=".$data['id_desain']."'>Delete</a>";?>
			    </td>
            </tr>
            <?php $id_desain++; }?>
		    <?php } ?>
        </table>
    </div>
    <div align="center">
        <a href="../../adminpanel/indexadmin.php" class="btn btn-primary">Home</a>
    </div>
</body>
</html>
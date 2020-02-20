<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pemesan Powerpoint</title>
    <link rel="icon" href="../../img/logo_gage.png" type="../../image/png">
	<link rel="stylesheet" type="text/css" href="../../fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body id="makalah">
<?php require "../../koneksi.php"; 
    $query = mysqli_query($conn, "SELECT * FROM powerpoint ORDER BY id_ppt DESC"); 
    ?>
<h1 align="center" style="color: red;">Data Pemesanan Powerpoint</h1>
    <div align="center">
        <table border="3" align="center" bgcolor="white">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Materi</th>
                <th>Pilihan Editing</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Selesai</th>
                <th>Nomor HP/Telepon</th>
                <th>Status</th>
                <th>Harga Total</th>
            </tr>
            <?php if(mysqli_num_rows($query)>0){ ?>
		    <?php 
			$id_ppt = "1";
			while ($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $id_ppt ?></td>
                <td><?php echo $data["username"]; ?></td>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["materi"]; ?></td>
                <td><?php echo $data["editing"]; ?></td>
                <td><?php echo $data["tanggal_masuk"]; ?></td>
                <td><?php echo $data["durasi"]; ?></td>
                <td><?php echo $data["nomor_hp"]; ?></td>
                <td><?php echo $data["status"]; ?></td>
                <td><?php echo $data["harga"]; ?></td>
                <td>
                    <?php echo "<a href='edit.php?id=".$data['id_ppt']."'>Edit</a>";?>
				    <?php echo "<a href='delete.php?id=".$data['id_ppt']."'>Delete</a>";?>
			    </td>
            </tr>
            <?php $id_ppt++; }?>
		    <?php } ?>
        </table>
    </div>
    <div align="center">
        <a href="../../adminpanel/indexadmin.php" class="btn btn-primary">Home</a>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../../img/logo_gage.png" type="../../image/png">
    <title>Data Pemesan Makalah</title>
    <link rel="stylesheet" type="text/css" href="../../fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body id="makalah">
    <?php require "../../koneksi.php"; 
    $query = mysqli_query($conn, "SELECT * FROM makalah ORDER BY no DESC"); 
    ?>
<h1 align="center" style="color: red;">Data Pemesanan Makalah</h1>
    <div align="center">
        <table border="3" align="center" width="auto" bgcolor="white">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Materi</th>
                <th>Jenis Kertas</th>
                <th>Tanggal Masuk</th>
                <th>Nomor HP/Telepon</th>
                <th>Tanggal Selesai</th>
                <th>Status</th>
                <th>Harga Total</th>
            </tr>
            <?php if(mysqli_num_rows($query)>0){ ?>
		    <?php 
			$no = "1";
			while ($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $data["username"]; ?></td>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["materi"]; ?></td>
                <td><?php echo $data["jenis_kertas"]; ?></td>
                <td><?php echo $data["tanggal_masuk"]; ?></td>
                <td><?php echo $data["nomor_hp"]; ?></td>
                <td><?php echo $data["durasi"]; ?></td>
                <td><?php echo $data["status"]; ?></td>
                <td><?php echo $data["harga"]; ?></td>
                <td>
                    <?php echo "<a href='edit_makalah.php?id=".$data['no']."'>Edit</a>";?>
				    <?php echo "<a href='delete_makalah.php?id=".$data['no']."'>Delete</a>";?>
			    </td>
            </tr>
            <?php $no++; }?>
		    <?php } ?>
        </table>
    </div>
    <div align="center">
        <a href="../../adminpanel/indexadmin.php" class="btn btn-primary">Home</a>
    </div>
</body>
</html>
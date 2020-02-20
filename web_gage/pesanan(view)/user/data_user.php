<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../../img/logo_gage.png" type="../../image/png">
    <title>Data User Pemesan</title>
    <link rel="stylesheet" type="text/css" href="../../fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body id="makalah">
    <?php require "../../koneksi.php"; 
    $query = mysqli_query($conn, "SELECT * FROM user ORDER BY id DESC"); 
    ?>
<h1 align="center" style="color: red;">Data Pengguna</h1>
    <div align="center">
        <table border="3" align="center" width="600" bgcolor="white">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Alamat</th>
                <th>Email</th>
            </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
		<?php 
			$id = "1";
			while ($data = mysqli_fetch_array($query)){
        ?>
            <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["username"]; ?></td>
                <td><?php echo $data["password"]; ?></td>
                <td><?php echo $data["alamat"]; ?></td>
                <td><?php echo $data["email"]; ?></td>
                <td>
                    <?php echo "<a href='edit.php?id=".$data['id']."'>Edit</a>";?>
				    <?php echo "<a href='delete.php?id=".$data['id']."'>Delete</a>";?>
			    </td>
            </tr>
            <?php $id++; }?>
		    <?php } ?>
        </table>
    </div>
    <div align="center">
                <a href="../../adminpanel/indexadmin.php" class="btn btn-primary">Home</a>
    </div>
</body>
</html>
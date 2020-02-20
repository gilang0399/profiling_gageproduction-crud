<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Data Pemesanan</title>
    <link rel="stylesheet" type="text/css" href="../../fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="icon" href="../../img/logo_gage.png" type="../../image/png">
</head>
<body id=makalah>
    <form action="" method="POST" class="container col-md-5">
        <div class="form-group">
              <label for="my-input" style="color : red;"><strong>Status</strong></label>
              <input id="my-input" class="form-control" type="text" name="status">
        </div>
        <div class="form-group">
              <label for="my-input" style="color : red;">Harga Total</label>
              <input id="my-input" class="form-control" type="text" name="harga">
        </div>
        <button type="submit" name="input" class="btn btn-primary">Simpan</button>
    </form>

    <?php
        if (isset($_POST['input'])){
        $status=$_POST['status'];
        $harga=$_POST['harga'];
        require "../../koneksi.php";
        $sql = "UPDATE powerpoint SET status='$status', harga='$harga' WHERE id_ppt='$_GET[id]'";
        if (mysqli_query($conn, $sql)){
            echo "Ubah Berhasil";
            header("location:data_powerpoint.php");
            } else {
            echo mysqli_error($conn);
            }
        echo "<div class='alert alert-info'>Data Berhasil Diubah</div>";
        echo "<meta http-equiv='refresh' content='1;url=data_powerpoint.php'>";
    }
    ?>
</body>
</html>
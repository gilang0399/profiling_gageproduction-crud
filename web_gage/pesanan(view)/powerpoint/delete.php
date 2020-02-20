<?php

require "../../koneksi.php";
$sql = "DELETE FROM powerpoint where id_ppt='$_GET[id]'";
if (mysqli_query($conn, $sql)){
    echo "Hapus berhasil";
    header("location:data_powerpoint.php");
	} else {
	echo mysqli_error($conn);
    }
    
?>
<?php

require "../../koneksi.php";
$sql = "DELETE FROM desain where id_desain='$_GET[id]'";
if (mysqli_query($conn, $sql)){
    echo "Hapus berhasil";
    header("location:data_desain.php");
	} else {
	echo mysqli_error($conn);
    }
    
?>
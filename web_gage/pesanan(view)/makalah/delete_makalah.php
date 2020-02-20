<?php

require "../../koneksi.php";
$sql = "DELETE FROM makalah where no='$_GET[id]'";
if (mysqli_query($conn, $sql)){
    echo "Hapus berhasil";
    header("location:data_makalah.php");
	} else {
	echo mysqli_error($conn);
    }
    
?>
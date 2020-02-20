<?php

require "../../koneksi.php";
$sql = "DELETE FROM user where id='$_GET[id]'";
if (mysqli_query($conn, $sql)){
    echo "Hapus berhasil";
    header("location:data_user.php");
	} else {
	echo mysqli_error($conn);
    }
    
?>
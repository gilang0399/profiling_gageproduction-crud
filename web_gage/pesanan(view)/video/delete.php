<?php

require "../../koneksi.php";
$sql = "DELETE FROM editing_video where id_editing='$_GET[id]'";
if (mysqli_query($conn, $sql)){
    echo "Hapus berhasil";
    header("location:data_editing_video.php");
	} else {
	echo mysqli_error($conn);
    }
    
?>
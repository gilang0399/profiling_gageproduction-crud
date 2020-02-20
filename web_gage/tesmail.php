<?php
    //ini_set( 'display_errors', 1 );   
    //error_reporting( E_ALL );    
    //$from = "gilanga935@gmail.com";    
    //$to = "gilang0399@gmail.com";    
    //$subject = "Orderan PHP";    
    //$message = "Ada Pesanan";   
    //$headers = "From:" . $from;    
    //mail($to,$subject,$message, $headers);    
    //echo "Pesan email sudah terkirim.";

//$nama = $_POST['nama'];
$to = "gilang0399@gmail.com";
$subject = "Pesanan";
$messages = "Ada Pesanan";
    
$headers .= 'From: <gilanga935@gmail.com>' . "rn"; //bagian ini diganti sesuai dengan email dari pengirim
@mail($to, $subject, $messages, $headers.php);
if(@mail) 
{
    echo "pengiriman berhasil";
}
else 
{
    echo "pengiriman gagal";
}
?>
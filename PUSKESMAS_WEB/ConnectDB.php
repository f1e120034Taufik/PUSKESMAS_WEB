<?php 
$conn =  mysqli_connect($localhost, $root, $root, $db_puskesmas);

if (mysqli_connect_errno());
{
    echo "Koneksi ke server gagal !!!";
    exit();
}
 ?>

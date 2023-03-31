<?php
require '../config.php';
$sql=mysqli_query($conn,"update pengaduan set status='proses' where id_pengaduan='$_GET[id]'");
if ($sql)
{
    header('location:petugas.php?url=verivikasi_pengaduan');
}
?>
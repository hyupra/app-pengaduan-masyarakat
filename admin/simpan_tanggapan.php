<?php
require '../config.php';
$id_pengaduan=$_POST['id_pengaduan'];
$tgl_tanggapan=$_POST['tgl_tanggapan'];
$tanggapan=$_POST['tanggapan'];
$id_petugas=$_POST['id_petugas'];
$st="selesai";

$sql=mysqli_query($conn,"insert into tanggapan (id_pengaduan, tgl_tanggapan, tanggapan, id_petugas) values('$id_pengaduan', '$tgl_tanggapan', '$tanggapan', '$id_petugas')");

$update=mysqli_query($conn,"update pengaduan set status='$st' where id_pengaduan='$id_pengaduan'");

if($sql)
{
    ?>
    <script>
        alert("Laporan Sudah Ditanggapi");
        window.location="admin.php";
    </script>
    <?php
}else{

}
?>
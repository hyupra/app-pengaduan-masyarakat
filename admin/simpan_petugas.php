<?php
require '../config.php';
$nama=$_POST['nama_petugas'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];
$level=$_POST['level'];

$sql=mysqli_query($conn,"insert into petugas (nama_petugas,username,password,telp,level) values('$nama', '$user', '$pass', '$telp', '$level')");


if($sql)
{
    ?>
    <script>
        alert("Data Berhasil Disimpan");
        window.location="admin.php?url=lihat_petugas";
    </script>
    <?php
}else{

}
?>
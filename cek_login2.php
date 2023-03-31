<?php
require 'config.php';
session_start();
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=mysqli_query($conn,"select * from petugas where username='$user' and password='$pass'");
$cek=mysqli_num_rows($sql);

if ($cek>0)
{
    $data=mysqli_fetch_array($sql);
    if ($data['level']=="admin")
    {
    $_SESSION['id_petugas']=$data['id_petugas'];
    $_SESSION['user']=$user;
    $_SESSION['nama']=$data['nama_petugas'];
    $_SESSION['level']=$data['level'];
    header('location:admin/admin.php');
    }
    else if ($data['level']=="petugas")
    {
        $_SESSION['id_petugas']=$data['id_petugas'];
        $_SESSION['user']=$user;
        $_SESSION['nama']=$data['nama_petugas'];
        $_SESSION['level']=$data['level'];
        header('location:petugas/petugas.php');
    }
}
else
{
    ?>
    <script type="text/javascript">
        alert ("Maaf Username atau Password Tidak Ditemukan");
        window.location="index2.php";
    </script>
    <?php
}
?>
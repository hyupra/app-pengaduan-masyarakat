<?php
require 'config.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=mysqli_query($conn, "SELECT*FROM masyarakat WHERE username='$user' and password='$pass' ");
$cek=mysqli_num_rows($sql);

	if ($cek>0) {
		$data=mysqli_fetch_array($sql);
		session_start();
		$_SESSION['nama']=$user;
		$_SESSION['nik']=$data['nik'];
		header('location:masyarakat.php');
	}
	else{
		?>
		<script type="text/javascript">
			alert('username dan password tidak ditemukan!');
			window.location="index.php";
		</script>
		<?php
	}
?>
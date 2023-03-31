<?php
require 'config.php';
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];

$sql=mysqli_query($conn, "INSERT INTO masyarakat VALUES('$nik','$nama','$user','$pass','$telp')");
if ($sql) {
	?>
	<script type="text/javascript">
		alert('Data Berhasil Disimpan, Silahkan Login!');
		window.location="index.php";
	</script>
<?php
}
?>
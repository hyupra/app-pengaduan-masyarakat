<?php
require 'config.php';
	$tgl=$_POST['tgl_pengaduan'];
	$nik=$_POST['nik'];
	$isi=$_POST['isi_laporan'];
	$ft=$_FILES['foto']['name'];
	$file=$_FILES['foto']['tmp_name'];
	$st='proses';

	$sql=mysqli_query($conn, "INSERT INTO pengaduan (tgl_pengaduan,nik,isi_laporan,foto,status) VALUES ('$tgl','$nik','$isi','$ft','$st')"); 

	move_uploaded_file($file, "foto/".$ft);

if ($sql) {
	?>
	<script type="text/javascript">
		alert('Data Berhasil Disimpan, Terimakasih sudah menulis laporan!');
		window.location="masyarakat.php"
	</script>
	<?php

}

?>
<?php 
session_start();

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ngadu|admin-cetak laporan</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div class="card shadow">
      <div class="form-group cols-sm-6" style="padding-left: 20px;">
        
      </div>

      <div class="card-body">
        <h3 class="m-0 font-weight-bold text-secondary" align="center">PEMERINTAH KABUPATEN TULANG BAWANG</h3>
        <h3 class="m-0 font-weight-bold text-secondary" align="center">DESA BUMI DIPASENA AGUNG KEC.RAWAJITU TIMUR</h3>
        <h3 class="m-0 font-weight-bold text-secondary" align="center">Jl. Reformasi Desa Bumi Dipasena Agung Kode Pos 34955</h3>
        <br><br><hr>
        <h4 class="m-0 font-weight-bold text-secondary" align="center">Laporan Masyarakat</h4>
        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
        <br><br>
        <div class="container">
                <table class="table table-bordered" id="dataTable" width="100%" >
                  <thead>
                    <tr>
                      <th>tgl_pengaduan</th>
                      <th>Nik</th>
                      <th>isi_laporan</th>
                      
                    </tr>
                  </thead>
                  <?php
                  require '../config.php';
                  $sql=mysqli_query($conn,"SELECT*FROM pengaduan");
                  while($data=mysqli_fetch_array($sql)){

                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $data['tgl_pengaduan']; ?></td>
                      <td><?php echo $data['nik']; ?></td>
                      <td><?php echo $data['isi_laporan']; ?></td>
                      

                      
                    </tr>
                  </tbody>
                  <?php } ?>
                </table>

        
        <!-- //end panggil data -->
        </form>
        <br><br>
        <h6 class="m-0 font-weight-bold text-primary" align="right">Metro Timur, <?php echo date('d m Y'); ?></h6><br>
        <h6 class="m-0 font-weight-bold text-primary" align="right" style="padding-bottom: 40px;">Petugas</h6>
        <h6 class="m-0 font-weight-bold text-primary" align="right"><?php echo $_SESSION['nama']; ?></h6>
      </div>
    </div>


<script type="text/javascript">
  window.print();
</script>
<!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>

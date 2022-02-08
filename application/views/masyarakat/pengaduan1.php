<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<div class="container-fluid">
  <body id="page-top">
    <div></div>
    <div class="card shadow">
      <div class="card-header">
        Tulis Pengaduan 
      </div>
      <div class="card-body">
        <form action="" method="pengaduan_detail.php" class="form_horizontal" enctype="multipart/form-data">
          <div class="form-group cols-sm-6">
            <label>Tanggal Pengaduam</label>
            <input type="text" name="tgl_pengaduan" value="<?= date('d/m/y'); ?>"class="form-control" readonly>
          </div>
          <div class="form-group cols-sm-6">
            <label>Tulis Laporan</label>
            <textarea class="form-control" name="isi_laporan" rows="7"></textarea>
          </div>
          <div class="form-group cols-sm-6">
            <label>Unggah foto</label>
            <input type="file" name="foto" class="form-control" accept=".jng,.jpeg, .png"><font color="red">*tipe yang bisa di upload adalah Jpg,jpeg,Png</font>
          </div>
          <div class="form-group col-sm-6"> 
            <button type="submit" name="" class="btn btn-primary">Kirim</button>
            <nutton type="reset" name="" class="btn btn-danger">Kosongkan</button>
            </div>
          </form>
        </div>



        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

      </body>

      </html>

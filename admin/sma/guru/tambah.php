<?php 
session_start();
if(empty($_SESSION['username'])) {
    header("location:../../index.php");
    exit;
}

//koneksi ke data base
require 'functions.php';
//cek apakah tombol submit sudah di tekan
if (isset($_POST["submit"])) {
    
    //cek apakah data berhasil di tambahkan
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan');
                document.location.href='index.php';

        </script>
        ";
    }else{
        echo "<script>
                alert('data gagal ditambahkan');
        </script>";
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Guru SD IT</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>
<body>
    <?php 
    include 'menu.php';
     ?>
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Data Guru</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="" method="post" enctype="multipart/form-data">
                                       <div class="form-group">
                                            <label for="nama">Nama Guru</label>
                                            <input class="form-control" type="text" name="nama" id="nama" required >
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" required >
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir" required >
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">Jenis Kelamin</label>
                                            <input class="form-control" type="text" name="gender" id="gender" required >
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input class="form-control" type="text" name="alamat" id="alamat" required >
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan">Pendidikan Terakhir</label>
                                            <input class="form-control" type="text" name="pendidikan" id="pendidikan" required >
                                        </div>
                                        <div class="form-group">
                                            <label for="mata_pelajaran">Mata Pelajaran</label>
                                            <input class="form-control" type="text" name="mata_pelajaran" id="mata_pelajaran" required >
                                        </div>
                                        <div class="form-group">
                                            <label for="jenjang">Tempat Mengajar</label>
                                            <input class="form-control" type="text" name="jenjang" id="jenjang" required >
                                        </div>
                                        
                                        <br>
                                        <a class="btn btn-warning" href="index.php">batal</a>
                                        <button class="btn btn-primary" type="submit" name="submit">tambah</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
</body>
</html>
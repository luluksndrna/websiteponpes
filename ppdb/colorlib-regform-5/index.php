<?php
 require 'daftar.php';
 if (isset($_POST["NIK"]) && isset($_POST["nama"]) && isset($_POST["tempat_lahit"]) && isset($_POST["tanggal_lahir"])  && isset($_POST["gender"]) 
 && isset($_POST["alamat"])  && isset($_POST["no_telepon"]) && isset($_POST["jenjang"])) {
    if(tambah($_POST)> 0) {
        echo " <script>
                alert('data berhasil ditambahkan');
                document.location.href='index.php';

        </script>
        ";

    } else {
        echo "<script>
                alert('data gagal ditambahkan');
        </script>";

    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Form Pendaftaran Siswa </title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Form Pendaftaran Siswa</h2>
                </div>
                <div class="card-body">                          
                        
                        <div class="form-row">
                            <div class="name">NIK</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nik">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">NAMA</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nama">
                                </div>
                            </div>
                        </div>
                        <form method="POST">
                            <div class="form-row m-b-55">
                        <div class="name">Tempat, Tanggal Lahir</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name">
                                            <label class="label--desc">Tempat Lahir</label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="date" name="tanggal_lahir">
                                            <label class="label--desc">Tanggal Lahir</label>
                                        </div>
                                    </div>
                                </div>
                            </div></div>


                            <div class="form-row">
                                <div class="name">Jenis Kelamin</div>
                                <div class="value">
                                    <div class="input-group">
                                        <label class="radio-container m-r-45">Laki-laki
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Perempuan
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                      

                        <div class="form-row">
                            <div class="name">Alamat</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="alamat" name="alamat">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Nomor Telepon</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="no">
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-row">
                            <div class="name">Jenjang Sekolah</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                            <option disabled="disabled" selected="selected"></option>
                                            <option>SD IT</option>
                                            <option>SMP IT</option>
                                            <option>SMA IT</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                            <button class="btn btn--radius-2 btn--red" type="submit">DAFTAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
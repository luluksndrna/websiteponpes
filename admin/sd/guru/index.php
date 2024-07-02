<?php 
session_start();
if(empty($_SESSION['username'])) {
	header("location:../../index.php");
    exit;
}

require 'functions.php';
$guru=tampil("SELECT * FROM guru");

if (isset($_POST["cari"])) {
	$guru=cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Guru SD IT Darrussyahadah</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>


</head>
<body>
	<?php 
	include 'menu.php';
	 ?>
	 <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../../index_admin.php">Darrussyahadah NW</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../../../login/form_login.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        	
	<div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                	<h3>Data Guru</h3>
                	<a class="btn btn-outline btn-primary" href="tambah.php">tambah data</a><br><br>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
						<div class="panel-body">
							<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
								<tr>
                                            <th>NO</th>
								            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Pendidikan Terakhir</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Tempat Mengajar</th>
                                            <th>tindakan</th>
									      
								</tr>
								</thead>
								<tbody>
								<?php 
								$no=0;
								foreach ($guru as $g) {
								
								$no++;
								?>	
								<tr>

									<td><?php echo $no; ?></td>
                                    <td><?php echo $g["nama"]; ?></td>
									<td><?php echo $g["tempat_lahir"]; ?></td>
                                    <td><?php echo $g["tanggal_lahir"]; ?></td>
                                    <td><?php echo $g["gender"]; ?></td>
                                    <td><?php echo $g["alamat"]; ?></td>
                                    <td><?php echo $g["pendidikan"]; ?></td>
                                    <td><?php echo $g["mata_pelajaran"]; ?></td>
                                    <td><?php echo $g["jenjang"]; ?></td>
									<td>
										<a href="edit.php?id=<?php echo $g["id"]; ?>">edit</a> | 
										<a href="hapus.php?id=<?php echo $g["id"]; ?>" onclick="return confirm('apakah anda yakin ingin menghapus ini')">hapus</a>
									</td>
								</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
			 			</div>
					</div>
				</div>	
			</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
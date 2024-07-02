<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/index.html">Darrussyahadah NW</a>
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
                    <li><a class="dropdown-item" href="/login/form_login.html">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Yayasan</div>
                         
                            <a class="nav-link" href="#">
                                    <div class="sb-nav-link-icon"><i class="fas fa-school"></i></div>Profile</a>

                                <a class="nav-link" href="#">
                                    <div class="sb-nav-link-icon"><i class="fas fa-sitemap"></i></div>Struktur </a>

                        <div class="sb-sidenav-menu-heading">Siswa</div>
                                <a class="nav-link" href="sd/siswa/index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div> SD IT</a>

                                <a class="nav-link " href="smp/siswa/index.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div> SMP IT</a>

                                <a class="nav-link collapsed" href="sma/siswa/index.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div> SMA</a>

                         <div class="sb-sidenav-menu-heading">Guru</div>
                                    <a class="nav-link collapsed" href="sd/guru/index.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div> SD IT</a>
                                    <a class="nav-link collapsed" href="smp/guru/index.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div> SMP IT</a>
                                        
                                    <a class="nav-link collapsed" href="sma/guru/index.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div> SMA IT</a>

                        <div class="sb-sidenav-menu-heading">Pendaftaran</div>
                                     <a class="nav-link" href="sd/daftar/index.php">
                                            <div class="sb-nav-link-icon"><i class="fas fa-id-card"></i></div>SD IT</a>
                                    <a class="nav-link" href="smp/daftar/index.php">
                                            <div class="sb-nav-link-icon"><i class="fas fa-id-card"></i></div> SMP IT</a>
                                    <a class="nav-link" href="sma/daftar/index.php">
                                            <div class="sb-nav-link-icon"><i class="fas fa-id-card"></i></div>SMA IT</a>
                                                
                            <div class="sb-sidenav-menu-heading">Umum</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-fingerprint"></i></div> Admin</a>
                            <a class="nav-link" href="pesan/index.php">
                                <div class="sb-nav-link-icon"><i class=" far fa-envelope-open"></i></div> Pesan</a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-images"></i></div> Galeri </a>
                        </div>
                    </div>


                    <div class="sb-sidenav-footer">
                                <div class="small">Logged in as:</div>
                                Admin
                            </div>
                        </nav>
                    </div>
        
                    
                    <div id="layoutSidenav_content">
                        <main>
                            <div class="container-fluid px-4">
                               <h1 class="mt-4">Dashboard</h1>
                                <ol class="breadcrumb mb-4">
                                    <li class="breadcrumb-item active">Halaman Admin Pondok Pesantren Darrussyahadah NW Masbagik</li>
                                </ol>                                 
                            </div>
                        </div>
                    </div>
                </main>
                </div>
            </div>
      
            </div>
        </div>
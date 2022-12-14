<?php
    error_reporting(0);
    session_start();
    if($_SESSION['login'] == false){
    echo"<script>window.location.href='../login-form-14/userlogin.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>USER</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="logout.php">Logout</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">

                        <div class="col-lg-12">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-dark">Selamat Datang <?= $_SESSION['nama'] ?>!</h6>
                                </div>
                                <div class="card-body">
                                    Konfirmasi Pemesanan Anda: <p class="m-0 font-weight text-primary"><?= $_SESSION['konfirmasi']?></p>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12">

                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">

                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3 collapsed" data-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Detail Pemesanan</h6>
                                </a>

                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="collapseCardExample">
                                    <div class="card-body">
                                        <table class="table table-bordered" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nama Pemesan:</th>
                                                    <th scope="col">E-Mail:</th>
                                                    <th scope="col">Nama Kamar:</th>
                                                    <th scope="col">Entry Date:</th>
                                                    <th scope="col">Out Date:</th>
                                                    <th scope="col">Jumlah Orang</th>
                                                    <th scope="col">No. Rekening</th>
                                                    <th scope="col">Status:</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?= $_SESSION['nama'] ?></td>
                                                    <td><?= $_SESSION['email']?></td>
                                                    <td><?= $_SESSION['room']?></td>
                                                    <td><?= $_SESSION['masuk']?></td>
                                                    <td><?= $_SESSION['keluar']?></td>
                                                    <td><?= $_SESSION['jumlah']?></td>
                                                    <td><?= $_SESSION['rek']?></td>
                                                    <td><?= $_SESSION['konfirmasi'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="#" class="btn btn-success btn-icon-split" onclick="window.print();">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">PRINT</span>
                                    </a>
                                    </a>                                    
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
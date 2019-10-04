<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>School</title>

        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url('bootstrap/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="<?php echo base_url('bootstrap/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('bootstrap/css/pers.css'); ?>" rel="stylesheet">
        <script src="<?php echo base_url('bootstrap/vendor/jquery/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url('bootstrap/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

        <style>
            .bg-teste {
                /*background-color: #4e73df;
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(10%, #4e73df), to(#224abe));
                background-image: linear-gradient(180deg,#000000 10%,#f51313 100%);
                background-size: cover;*/
            }
            .btn-primary {
                /*color: #fff;
                background-color: #ca0f0f;
                border-color: #4e73df;*/
            }
        </style>

    </head>
    <!-- Modal grande -->
    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-address-book"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Scholl</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Painel de controle</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">

                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Opções:</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Opções:</h6>
                            <a class="collapse-item" href="<?php echo base_url('cad-esc'); ?>">Escolas</a>
                            <a class="collapse-item" href="#">Profesores</a>
                            <a class="collapse-item" href="#">Alunos</a>
                            <a class="collapse-item" href="#">Disciplinas</a>
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

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                       
                        

                    </nav>
                    <!-- End of Topbar -->
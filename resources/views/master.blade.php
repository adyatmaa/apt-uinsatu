<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">
</head>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="btn btn-danger mx-3" href="{{ route('logout') }}">Logout</a>
            {{-- <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div> --}}
        </li>

    </ul>
</nav>

<!-- Main Sidebar Container -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <!-- <img src="dist/img/uinma.png" class="img-circle elevation-2" alt="User Image"> -->
            </div>
            <div class="info">
                <a class="d-block">Admin</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <!-- <i class="nav-icon far fa-calendar-alt"></i> -->
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Input
                            <i class="right fas fa-angle-left"></i>
                            <!-- <span class="badge badge-info right">4</span> -->
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pageInputProdi') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Input Data Prodi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pageInputMahasiswa') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Input Data Mahasiswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pageInputTendik') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Input Data Tenaga Didik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pageInputDosen') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Input Data Dosen</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Master Data<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pageDataJenjang') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Jenjang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pageDataFakultas') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Fakultas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pageDataProdi') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Prodi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pageDataPendAkhir') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pendidikan Terakhir</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pageDataJbAkaDsn') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Jabatan Akademik Dosen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pageDataTendik') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Tenaga Didik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pageDataDosen') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Dosen</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Data Mahasiswa
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('pageDataCalonMhs') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Calon Mahasiswa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('pageDataMhsAktif') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mahasiswa Aktif</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('pageDataMhsAsing') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mahasiswa Asing</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('pageDataMhsLulus') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mahasiswa Lulus</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('pageDataMhsTgsAkhir') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mahasiswa Tugas Akhir</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

@yield('content')

<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('assets/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('assets/dist/js/pages/dashboard.js') }}"></script>

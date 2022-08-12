<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
    <title>@yield('title') </title>
    <link rel="shortcut icon" href="{{asset('logo.png')}}" />
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Glory&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </link>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('admin/js/select.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('guest/assets/bootstrap/css/bootstrap.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admin/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('admin/images/losgo.png')}}" />

    <style>
    .mdi-file-import {
        font-size: 20px;
    }

    .text-footer {
        margin-top: -50px;
        padding: 20px;
        text-align: center;
        color: white;
        font-weight: 600;
    }

    .text-footer p {
        font-size: 12px;
    }

    @media (min-width: 992px) {
        .sidebar-icon-only .text-footer {
            display: none;
        }
    }
    </style>

    @yield('custom-css')

</head>

<body>

    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <div>
                    <!-- {{asset('')}} -->
                    <a class="navbar-brand brand-logo" href="">
                        <img src="{{asset('admin/images/logo.png')}}" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="">
                        <img src="{{asset('admin/images/logo.png')}}" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top">
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                        <h1 class="welcome-text">Selamat Datang, <span
                                class="text-black fw-bold text-capitalize">{{auth()->user()->name}}</span></h1>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <!-- <li class="nav-item">
                        <form class="search-form" action="#">
                            <i class="icon-search"></i>
                            <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                        </form>
                    </li> -->
                    <li class="nav-item dropdown d-lg-block user-dropdown">
                        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img-xs rounded-circle" src="{{asset('admin/images/logo.png')}}"
                                alt="Profile image"> </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <img class="img-md rounded-circle" src="{{asset('admin/images/logo.png')}}"
                                    alt="Profile image" width="40px" height="40px">
                                <p class="mb-1 mt-3 font-weight-semibold text-capitalize fw-bold text-light">
                                    {{auth()->user()->name}}</p>
                                <p class="text-light mb-0">{{auth()->user()->email}}</p>
                            </div>
                            <a class="dropdown-item text-light" href="{{route('logout')}}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="dropdown-item-icon mdi mdi-power text-light me-2"
                                    style="margin-left:10px;"></i>Sign Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-bem border me-3"></div>Default
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category text-center">Master Data</li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="collapse" href="#data-user" aria-expanded="false"
                            aria-controls="data-user">
                            <i class="menu-icon mdi mdi-floor-plan"></i>
                            <span class="menu-title">Data Users</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="data-user">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('users')}}">User</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#halaman-profil" aria-expanded="false"
                            aria-controls="halaman-profil">
                            <i class="menu-icon mdi mdi-card-text-outline"></i>
                            <span class="menu-title">Halaman Profil</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="halaman-profil">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{route('kabinet')}}">
                                        Kabinet
                                    </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#halaman-kementerian" aria-expanded="false"
                            aria-controls="halaman-kementerian">
                            <i class="menu-icon mdi mdi-chart-line"></i>
                            <span class="menu-title">Halaman Kementerian</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="halaman-kementerian">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('fakultas')}}">Fakultas</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{route('kategori.kementerian')}}">Kategori
                                        Kementerian</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('jabatan')}}">Jabatan</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{route('kementerian')}}">Kementerian</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#halaman-ormawa" aria-expanded="false"
                            aria-controls="halaman-ormawa">
                            <i class="menu-icon mdi mdi-table"></i>
                            <span class="menu-title">Halaman Ormawa</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="halaman-ormawa">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('kategori.ormawa')}}">
                                        Kategori Ormawa
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('ormawa')}}">
                                        List Ormawa
                                    </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#halaman-aspirasi" aria-expanded="false"
                            aria-controls="halaman-aspirasi">
                            <i class="menu-icon mdi mdi-layers-outline"></i>
                            <span class="menu-title">Halaman Aspirasi</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="halaman-aspirasi">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('aspirasi')}}">Aspirasi</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#halaman-berita" aria-expanded="false"
                            aria-controls="halaman-berita">
                            <i class="menu-icon mdi mdi-account-circle-outline"></i>
                            <span class="menu-title">Halaman Berita</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="halaman-berita">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('berita')}}"> Berita </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item nav-category">Background Halaman</li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('halaman')}}">
                            <i class="menu-icon mdi mdi-file-document"></i>
                            <span class="menu-title">Halaman</span>
                        </a>
                    </li>
                </ul>
                <div class="text-footer">
                    <p>Kementerian Informasi dan Komunikasi by <a
                            href="{{url('https://www.instagram.com/hmif_unnur/')}}" target="_blank"
                            style="text-decoration:none; color:#FBD444;"> HMIF Nurtanio</a></p>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                @yield('content')
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <!-- plugins:js -->
    <script src="{{asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('admin/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('admin/vendors/progressbar.js/progressbar.min.js')}}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('admin/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin/js/template.js')}}"></script>
    <script src="{{asset('admin/js/settings.js')}}"></script>
    <script src="{{asset('admin/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('admin/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/dashboard.js')}}"></script>
    <script src="{{asset('admin/js/Chart.roundedBarCharts.js')}}"></script>
    <!-- End custom js for this page-->

    @yield('script')
</body>

</html>
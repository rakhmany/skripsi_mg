<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>MiniGold | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Skote Premium Multipurpose Admin & Dashboard Template documentation of HTML & Laravel" name="description" />
    <meta content="Themesdesign" name="author" />
    <meta name="keywords" content="Skote admin documentation, Skote Laravel documentation, Skote HTML documentation">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Preloader CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/preloader.min.css') }}">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-topbar="dark" class="pace-done" data-spy="scroll" data-target=".right-side-nav" data-offset="175">


    <div class="pace pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner">
            </div>
        </div>
        <div class="pace-activity">
        </div>
    </div>
    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.svg" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-sm.svg" alt="" height="22">
                                <span class="badge badge-soft-success ml-2">Dason</span>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect d-lg-none"
                        id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium">Paul K.</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                            <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                        </div>
                    </div>

                    {{-- <div class="d-inline-block">
                        <h5 class="header-item m-0"><span class="badge badge-danger">v1.0.0</span></h5>
                    </div> --}}

                </div>
            </div>
            
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Docs</li>

                        <li>
                            <a href="index.html" class="waves-effect">
                                <i class="mdi mdi-text-box-outline"></i>
                                <span>Introduction</span>
                            </a>
                        </li>

                        <li>
                            <a href="setup.html" class=" waves-effect">
                                <i class="mdi mdi-cog-outline"></i>
                                <span>Setup</span>
                            </a>
                        </li>


                        <li class="menu-title">Layouts</li>

                        <li>
                            <a href="vertical.html" class=" waves-effect">
                                <i class="mdi mdi-flip-horizontal"></i>
                                <span>Vertical</span>
                            </a>
                        </li>

                        <li>
                            <a href="horizontal.html" class=" waves-effect">
                                <i class="mdi mdi-flip-vertical"></i>
                                <span>Horizontal</span>
                            </a>
                        </li>

                        <li class="menu-title">Themes</li>

                        <li>
                            <a href="dark.html" class=" waves-effect">
                                <i class="mdi mdi-weather-night"></i>
                                <span>Dark Version</span>
                            </a>
                        </li>

                        <li>
                            <a href="rtl.html" class=" waves-effect">
                                <i class="mdi mdi-web"></i>
                                <span>RTL Version</span>
                            </a>
                        </li>

                        <li class="menu-title">Other</li>

                        <li>
                            <a href="changelog.html" class=" waves-effect">
                                <i class="mdi mdi-format-list-bulleted"></i>
                                <span>Changelog</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                         <div class="col-lg-12">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="d-xl-flex">

                                             <div class="w-100">
                                             <div class="p-lg-1">

                                                  @yield('content')

                                             </div> <!-- end padding-->
                                             </div>

                                             <!-- Start right-side-nav -->
                                             <div class="d-none d-xl-block">
                                             <div class="right-side-nav">
                                                  <ul class="nav nav-pills flex-column">
                                                       <li class="nav-item">
                                                            <a href="#intro" class="nav-link">Introduction</a>
                                                       </li>
                                                       <li class="nav-item">
                                                            <a href="#structure" class="nav-link">Folder & Files
                                                                 Structure</a>
                                                       </li>
                                                  </ul>
                                             </div>
                                             </div>
                                        </div>
                                   </div>
                                   <!--end card body-->
                              </div> <!-- end card-->
                         </div>
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Universitas Muhammadiyah Tangerang.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="" target="_blank" class="text-muted">Yudaz A Rakhman</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.') }}js"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    
    <!-- PACE JS -->
    <script src="{{ asset('assets/libs/pace-js/pace.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>MiniGold | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Skote Premium Multipurpose Admin & Dashboard Template documentation of HTML & Laravel" name="description" />
    <meta content="Themesdesign" name="author" />
    <meta name="keywords" content="Skote admin documentation, Skote Laravel documentation, Skote HTML documentation">

    @yield('css')

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/mini-gold.png') }}">
    <!-- Preloader CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/preloader.min.css') }}">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />


</head>

<body data-layout="horizontal" data-topbar="dark">

     <!-- Begin page -->
     <div id="layout-wrapper">

          <header id="page-topbar">
               <div class="navbar-header">
                    <div class="d-flex">
                         <!-- LOGO -->
                         <div class="navbar-brand-box">
                         <a href="javascript: void(0);" class="logo logo-light">
                              <span class="logo-sm">
                                   <img src="{{ asset('assets/images/logo-sm.svg') }}" alt="" height="22">
                              </span>
                              <span class="logo-lg">
                                   <img src="{{ asset('assets/images/logo-navbar.png') }}" alt="" height="70">
                                   {{-- <span class="badge badge-soft-success ml-2">Dason</span> --}}
                              </span>
                         </a>
                         </div>

                         <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect d-lg-none" id="vertical-menu-btn">
                         <i class="mdi mdi-menu"></i>
                         </button>
                    </div>
                    <div class="container-fluid align-content-between">
                         <div class="col align-self-center">
                         <h3 class="text-light mb-0">#SemuaBisaPunyaEmas</h3>
                         {{-- MiniGold --}}
                         </div>
                    </div>
               </div>
          </header>

          <!-- ============================================================== -->
          <!-- Start right Content here -->
          <!-- ============================================================== -->
          <div class="main-content">
               <div class="page-content">
                    <div class="container-fluid">

                         <!-- start page title -->
                         <div class="row">
                              <div class="col-12">
                                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                      @yield('title')
                          
                                      <div class="page-title-right">
                                          <ol class="breadcrumb m-0">
                                              @yield('breadcrumb')
                                          </ol>
                                      </div>
                                  </div>
                              </div>
                         </div>
                         <!-- end page title -->

                         <div class="row">
                              <div class="col-xl-12 col-md-12">
                                  <!-- card -->
                                  <div class="card card-h-100">
                                      <!-- card body -->
                                      <div class="card-body">
                                          @yield('content')
                                      </div><!-- end card body -->
                                  </div><!-- end card -->
                              </div><!-- end col -->
                         </div>
                    </div>
               </div>
          </div>
    
     </div>
    


    <!-- VENDOR JAVASCRIPT -->
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
    {{-- <script src="{{ assets('assets/libs/apexcharts/apexcharts.min.js') }}"></script> --}}

     <!-- Plugins js-->
     {{-- <script src="{{ assets('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script> --}}
     {{-- <script src="{{ assets('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script> --}}

     <!-- dashboard init -->
     {{-- <script src="{{ assets('assets/js/pages/dashboard.init.js') }}"></script> --}}

</body>


</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Aplikasi Pengelolaan Data Member">
    <meta name="author" content="Indra Styawantoro">

    <!-- Title -->
    <title>Aplikasi Pengelolaan Data Member</title>

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.css" integrity="sha256-RXPAyxHVyMLxb0TYCM2OW5R4GWkcDe02jdYgyZp41OU=" crossorigin="anonymous">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    {{-- <div id="navbar_top" class="row navbar shadow bg-white">
        <div class="col-2 text-center">
          <b>LOGO</b> 
        </div>
        <div class="col-7">
          <b>#SemuaBisaPunyaEmas</b> 
        </div>
        <div class="col-3">
          <label for="" class="d-flex gap-3 ">
              <img src="/img/FotoYudaz.jpg" alt="mdo" width="40" height="40" class="rounded-circle">
                <span class="pt-1">
                  <strong>{ Nama Customer }</strong>
                  <small class="d-block">Customer</small>
                </span>
                <a href="#" class="d-block link-dark text-decoration-none text-center p-3" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="/img/down-arrow-solid-24.png" alt="" width="15" height="15" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow ">
                  <li><a class="dropdown-item " href="#">Settings</a></li>
                  <li><a class="dropdown-item " href="#">Profile</a></li>
                  <li><hr class="dropdown-divider "></li>
                  <li><a class="dropdown-item " href="#">Sign out</a></li>
                </ul>
          </label>
        </div>
    </div> --}}

    <!-- Navbar Menu -->
    <section class="navbar-menu d-none d-md-block shadow-sm fixed-top bg-light p-3">
        <nav class="">
            asd <br>
            asd <br>
            asdasd <br>
        </nav>
    </section>
    <!-- Navbar Menu -->

    
    <!-- Sidebar Menu -->
    <section class="sidebar-menu d-none d-md-block shadow-sm">
        <!-- Brand -->
        <div class="brand text-center mb-5">
            <!-- Logo -->
            <!-- <img src="assets/img/pustaka-koding.svg" alt="Logo"> -->
            <img src="assets/img/mini-gold.png" alt="Logo">
            <!-- Title -->
            <h3 class="mt-4 mb-3"> MiniGold Member </h3>
        </div>


        <div class="menus">
            <!-- panggil file Sidebar untuk menampilkan menu sidebar -->
            @yield('sidebar_new')
        </div>
    </section>

    <!-- Main Content -->
    <main class="content-wrapper d-block">
        <div class="container">

            <!-- panggil file Content untuk menampilkan halaman konten -->
            @yield('content')

        </div>
    </main>

    <!-- Mobile Menu -->
    <section class="mobile-menu d-block d-md-none">
        <div class="row bottom-navigation">
            <div class="col-12 col-lg-12">
                <div class="card-menu shadow-lg">
                    <div class="row justify-content-center">

                        <!-- panggil file "mobile_menu.php" untuk menampilkan menu mobile -->
                        @yield('mobile_menu')

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js" integrity="sha256-AkQap91tDcS4YyQaZY2VV34UhSCxu2bDEIgXXXuf5Hg=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/l10n/id.js" integrity="sha256-cvHCpHmt9EqKfsBeDHOujIlR5wZ8Wy3s90da1L3sGkc=" crossorigin="anonymous"></script>

    <!-- Custom Scripts -->
    <script src="assets/js/flatpickr.js"></script>
    <script src="assets/js/form-validation.js"></script>

    <script>
        (function ($) {

            // scroll functions
            $(window).scroll(function(e) {

                // add/remove class to navbar when scrolling to hide/show
                $('.navbar')[$(window).scrollTop() >= 150 ? 'addClass' : 'removeClass']('navbar-hide');

            });

        })(jQuery);   
    </script>
</body>

</html>
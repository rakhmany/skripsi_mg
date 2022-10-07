<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Skripsi </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    {{-- Icon Font --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link href="/fontawesome/css/all.css" rel="stylesheet"> --}}

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/bfce163c7d.js" crossorigin="anonymous"></script>


    <!-- Css -->
    {{-- <link rel="stylesheet" href="css/sidebar.css"> --}}
    {{-- <link rel="stylesheet" href="/css/nav.css"> --}}
    <link rel="stylesheet" href="/css/navigation.css">
    <link rel="stylesheet" href="/css/tes.css">



    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    {{-- <link href="css/style.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> --}}
    
    <style>
      *{
        font-family: 'Poppins', sans-serif;
      }
    </style>

  </head>
  <body>

    <div class="wrap">
        <div class="menu">
          <div class="badan">			
                <div class="sidebar">
                  sidebar
                    <ul>
                      <li><a href="#">Tutorial HTML dasar</a></li>
                      <li><a href="#">Tutorial CSS dasar</a></li>
                      <li><a href="#">Tutorial PHP dasar</a></li>
                      <li><a href="#">Tutorial JQuery dasar</a></li>				
                    </ul>
                </div>
                <div class="content">
                  content
                </div>
          </div>
          <div class="clear"></div>
          <div class="footer text-center">
            footer
          </div>
        </div>
    </div>

    <div class="wrapper">

      <!-- Navbar -->
      <header class="p-3 shadow">
        <div class="nav-header">
          <div class="container-fluid d-grid gap-3 ">
            <div class="row">
              <div class="col-sm-2 mt-3 text-center">
                  <h4>LOGO</h1>
              </div>
        
              <div class="col-sm-7 mt-3">
                <h6 class="" style="font-weight: bold;">#SemuaBisaPunyaEmas</h6>
              </div>
        {{--       
              <img src="/img/FotoYudaz.jpg" alt="mdo" width="40" height="40" class="rounded-circle"> --}}
              <div class="col-sm-2">
                  <label for="" class="d-flex gap-3 ">
                    <img src="/img/FotoYudaz.jpg" alt="mdo" width="40" height="40" class="rounded-circle">
                      <span class="pt-1">
                        <strong>{ Nama Customer }</strong>
                        <small class="d-block">Customer</small>
                      </span>
                  </label>
              </div>
        
              <div class="col-sm-1 list mt-3">
                  <a href="#" class="d-block link-dark text-decoration-none text-center dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    {{-- <img src="/img/down-arrow-solid-24.png" alt="" width="15" height="15" class="rounded-circle"> --}}
                  </a>
                  <ul class="dropdown-menu text-small shadow ">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="badan">
          <!-- Sidebar -->
          <div id="sidebar" class="sidebar shadow">
            <div class="d-flex flex-column flex-shrink-0 p-3">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link active " aria-current="page">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                          </svg>
                          Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                          Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                          Orders
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                          Products
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                          Customers
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="content">
          <nav class="navbar-expand-lg">
              <div class="container-fluid">
                  ASD
                  {{-- @yield('content') --}}
{{-- 
                  <button type="button" id="sidebarCollapse" class="btn btn-info">
                      <i class="fas fa-align-left"></i>
                      <span>Toggle Sidebar</span>
                  </button> --}}
      
              </div>
          </nav>
        </div>


      </div>
      
  
      
  </div>
  
  
  {{-- @include('partials.navbar') --}}
  {{-- @include('partials.sidebar') --}}
  {{-- @include('partials.nav') --}}
  
  {{-- <div class="container mt-4">
    @yield('content')
  </div> --}}


  <script src="/js/script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  </body>
</html>
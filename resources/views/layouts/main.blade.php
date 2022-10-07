<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Skripsi </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Datatables -->
    
    
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    {{-- Icon Font --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="/fontawesome/css/all.css" rel="stylesheet">

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/bfce163c7d.js" crossorigin="anonymous"></script>


    <!-- Css -->
    <link rel="stylesheet" href="/css/style.css">
    {{-- <link rel="stylesheet" href="css/sidebar.css"> --}}
    {{-- <link rel="stylesheet" href="/css/nav.css"> --}}
    <link rel="stylesheet" href="/css/navigation.css">
    {{-- <link rel="stylesheet" href="/css/tes.css"> --}}



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

    <header class="w-100 d-grid shadow text-dark">
        @include('partials.nav-admin')
    </header>

    <main class="border">
        <div class="row">
            <div class="col-2 p-3 shadow" >
                @include('partials.sidebar')
            </div>
            <div class="col-10">
              @yield('content')
            </div>
        </div>
    </main>
  

    {{-- <footer class="container-fluid bg-primary text-white">
        <div class="row">
            <div class="col-12 py-4">
                &copy; 2021 Tutorial Bootstrap
            </div>
        </div>
    </footer> --}}

  
  {{-- @include('partials.navbar') --}}
  {{-- @include('partials.sidebar') --}}
  {{-- @include('partials.nav') --}}
  
  {{-- <div class="container mt-4">
    @yield('content')
  </div> --}}
  

  <script src="/js/script.js"></script>
  <script src="fontawesome/attribution.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  </body>
</html>
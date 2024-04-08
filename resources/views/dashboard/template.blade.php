<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Admin Dashboard</title>

    <!-- Open Sans Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Material Icons -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet"
    />

    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}" />
  </head>
  <body>
    <div class="grid-container">
      @include('dashboard.header')
      @include('dashboard.sidebar')
      @yield('content')

    </div>

    <!-- Scripts -->
    <!-- Custom JS -->
    <script src="{{asset('assets/js/scripts.js')}}"></script>
  </body>
</html>

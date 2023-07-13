<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
  <link rel="icon" href="/img/favicon.png" type="image/x-icon">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/adminlte.min.css') }}">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
  @yield('css')
  @routes('admin')
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    @include('admin.template.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-bg elevation-5">
      <!-- Brand Logo -->
      <a href="/admin" class="brand-link mt-2 ">
        <img src="/img/icon-brand.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-2" style="opacity: .8">
        <span class="brand-text text-light">Laundri</span>
      </a>

      <!-- Sidebar -->
      @include('admin.template.sidebar')
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      @yield('main-content')
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      Copyright &copy; 2023 {{ config('app.name') }} All rights reserved.
    </footer>


  </div>

  <!-- Logout Modal -->
  <x-admin.modals.logout-modal />

  @yield('modals')



  <!-- jQuery -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

  <!-- AdminLTE App -->
  <script src="{{ asset('vendor/adminlte/js/adminlte.min.js') }}"></script>
  <script src="{{ asset('js/myscript.js') }}"></script>

  <!-- Bootstrap 4 -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->

  @yield('scripts')

  @stack('js')

</body>

</html>
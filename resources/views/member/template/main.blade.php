<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Member </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/adminlte.min.css') }}">
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

  @yield('css')
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    @include('member.template.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-bg elevation-5">
      <!-- Brand Logo -->
      <a href="" class="brand-link mt-2">
        <h4 class="brand-text text-center text-light">{{ config('app.name') }}</h4>
      </a>

      <!-- Sidebar -->
      @include('member.template.sidebar')
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
      Copyright &copy; 2022 {{ config('app.name') }} All rights reserved.
    </footer>


  </div>

  <x-member.modals.logout-modal />


  <!-- jQuery -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('vendor/adminlte/js/adminlte.min.js') }}"></script>
  <script src="{{ asset('js/myscript.js') }}"></script>

  @yield('scripts')

  @push('js')

</body>

</html>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars text-dark"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="{{ route('member.points.index') }}">
          <i class="mr-2 fas fa-star"></i>Tukar Poin
        </a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <img class="img-circle img-fit mr-1" width="25" height="25" src="/img/profile/default.jpg" alt="Foto Profil">
          {{ $user->name }}
        </a>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">

          <a href="#" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>
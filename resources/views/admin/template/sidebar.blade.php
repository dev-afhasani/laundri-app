<div class="sidebar">

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="{{ route('admin.index') }}" class="nav-link {{ request()->routeIs('admin.index') ? 'active' : '' }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link {{ request()->routeIs('admin.transactions.create') ? 'active' : '' }}">
          <i class="nav-icon fas fa-file-invoice"></i>
          <p>Input Transaksi</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link {{ request()->routeIs('admin.transactions.index') ? 'active' : '' }}">
          <i class="nav-icon fas fa-history"></i>
          <p>Riwayat Transaksi</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link {{ request()->routeIs('admin.price-lists.index') ? 'active' : '' }}">
          <i class="nav-icon fas fa-list"></i>
          <p>Daftar Harga</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link {{ request()->routeIs('admin.members*') ? 'active' : '' }}">
          <i class="nav-icon fas fa-users"></i>
          <p>Daftar Member</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link {{ request()->routeIs('admin.vouchers.index') ? 'active' : '' }}">
          <i class="nav-icon fas fa-star"></i>
          <p>Voucher</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link {{ request()->routeIs('admin.complaint-suggestions.index') ? 'active' : '' }}">
          <i class="nav-icon fas fa-sticky-note"></i>
          <p>Saran / Komplain</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link {{ request()->routeIs('admin.reports.index') ? 'active' : '' }}">
          <i class="nav-icon fas fa-file-alt"></i>
          <p>Laporan Keuangan</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link {{ request()->routeIs('profile.index') ? 'active' : '' }}">
          <i class="nav-icon fas fa-user-edit"></i>
          <p>Edit Profil</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link" data-toggle="modal" data-target="#logoutModal">
          <i class="nav-icon fas fa-sign-out-alt"></i>
          <p>Logout</p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
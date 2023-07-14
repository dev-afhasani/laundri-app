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
        <a href="{{ route('admin.transactions.create') }}" class="nav-link {{ request()->routeIs('admin.transactions.create') ? 'active' : '' }}">
          <i class="nav-icon fas fa-file-invoice"></i>
          <p>Input Transaksi</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.transactions.index') }}" class="nav-link {{ request()->routeIs('admin.transactions.index') ? 'active' : '' }}">
          <i class="nav-icon fas fa-history"></i>
          <p>Riwayat Transaksi</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.price-lists.index') }}" class="nav-link {{ request()->routeIs('admin.price-lists.index') ? 'active' : '' }}">
          <i class="nav-icon fas fa-list"></i>
          <p>Daftar Harga</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.members.index') }}" class="nav-link {{ request()->routeIs('admin.members*') ? 'active' : '' }}">
          <i class="nav-icon fas fa-users"></i>
          <p>Daftar Pelanggan</p>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a href="" class="nav-link {{ request()->routeIs('admin.vouchers.index') ? 'active' : '' }}">
          <i class="nav-icon fas fa-star"></i>
          <p>Voucher</p>
        </a>
      </li> -->
      <li class="nav-item menu-open">
        <a href="" class="nav-link ">
          <i class="nav-icon fas fa-file-alt"></i>
          <p>Laporan Keuangan
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.financials.index') }}" class="ml-4 nav-link {{ request()->routeIs('admin.financials.index') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.financials.category') }}" class="ml-4 nav-link {{ request()->routeIs('admin.financials.category') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Kategori</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.financials.finance') }}" class="ml-4 nav-link {{ request()->routeIs('admin.financials.finance') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Keuangan</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link" data-toggle="modal" data-target="#logoutModal">
          <i class="nav-icon fas fa-sign-out-alt"></i>
          <p>Logout</p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('dashboard/assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dashboard/assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <li class="nav-item">
          <a href="/dashapp" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/pegawai" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Data Pegawais
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fas fa-archive"></i>
            <p>
              Data Barang
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/barangmasuk" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Barang Masuk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/barangrusak" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Barang Rusak</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/barangkeluar" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Barang Keluar</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-black">
  <!-- Control sidebar content goes here -->
</aside>
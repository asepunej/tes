use Illuminate\Support\Facades\Auth;

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../index3.html" class="brand-link">
    <img src="{{asset('templates/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SIMITRA</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('templates/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"> {{ Auth::user()->name; }}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

        </li>
        <li class="nav-item">
          <a href="/paket" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
            <p> Paket Aktif</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Referensi
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">6</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/tahun" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tahun</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/pengguna" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pengguna</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/unitkerja" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Unit Kerja</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/barang" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/kategori" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kategori</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="perusahaan" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Perusahaan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="mitra" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Mitra</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="layout/collapsed-sidebar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Collapsed Sidebar</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="logout" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Logout
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
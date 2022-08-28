<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ url('public') }}/dist/img/logo-icon.png" alt="AdminLTE Logo" class="brand-image mt-0" style="opacity: .8">
    <span class="brand-text font-weight-bold">MOLLA ADMIN</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ url('public') }}/dist/img/jiro.jpg" class="brand-image img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          @if(Auth::check())
          {{request()->user()->nama}}
          @else
          Silahkan Login
          @endif
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href=" {{ url('beranda') }}  " class="nav-link {{request()->is('beranda') ? 'active' : ''}} ">
            <i class="nav-icon fas fa-home"></i>
            <p>
              BERANDA
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href=" {{ url('admin/produk') }}  " class="nav-link {{request()->is('admin/produk') ? 'active' : ''}} ">
            <i class="nav-icon fas fa-shopping-cart"></i>
            <p>
              PRODUK
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href=" {{ url('kategori') }}  " class="nav-link {{request()->is('kategori') ? 'active' : ''}} ">
            <i class="nav-icon fas fa-list"></i>
            <p>
              KATEGORI
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href=" {{ url('admin/user') }}  " class="nav-link {{request()->is('admin/user') ? 'active' : ''}} ">
            <i class="nav-icon fas fa-user"></i>
            <p>
              USER
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Master Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href=" {{ url('pelanggan') }} " class="nav-link {{request()->is('pelanggan') ? 'active' : ''}} ">
                <i class="far fa-circle nav-icon"></i>
                <p>Pelanggan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href=" {{ url('supplier') }}  " class="nav-link {{request()->is('supplier') ? 'active' : ''}} ">
                <i class="far fa-circle nav-icon"></i>
                <p>Supplier</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /sidebar -->
</aside>
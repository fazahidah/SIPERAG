  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=site_url("dashboard")?>" class="brand-link">
      <img src="<?=base_url("assets/logo.png")?>"
           alt="AdminLTE Logo"
           class="brand-image elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">DODOLAN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <span style="color:white">User Akses: <?=$_SESSION['role']?></span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php if($_SESSION['role'] == "OWNER" || $_SESSION['role'] == "MANAGER"): ?>
          <li class="nav-item">
            <a href="<?=site_url('dashboard')?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <?php endif ?>
          <li class="nav-item">
            <a href="<?=site_url('kasir')?>" class="nav-link">
              <i class="nav-icon fas fa-cash-register"></i>
              <p>
                Kasir
              </p>
            </a>
          </li>
          <?php if($_SESSION['role'] == "OWNER" || $_SESSION['role'] == "MANAGER"): ?>
          <li class="nav-item">
            <a href="<?=site_url("pengeluaran")?>" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Pengeluaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=site_url("transaksi/riwayat")?>" class="nav-link">
              <i class="nav-icon fas fa-receipt"></i>
              <p>
                Riwayat Transaksi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=site_url("transaksi/laporan")?>" class="nav-link">
              <i class="nav-icon fas fa-clipboard-check"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Produk
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url("produk")?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url("produk/kategori")?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Kategori</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manajemen Cabang
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url("cabang")?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Cabang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url("cabang/tambah_cabang")?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Cabang</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manajemen Karyawan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url("Karyawan")?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Karyawan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url("Karyawan/tambah_karyawan")?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Karyawan</p>
                </a>
              </li>
            </ul>
          </li>
          <?php endif ?>
          <li class="nav-item">
            <a href="<?=site_url("Auth/logout")?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Keluar
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

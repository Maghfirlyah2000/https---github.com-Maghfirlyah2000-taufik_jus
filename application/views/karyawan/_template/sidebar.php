<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-cocktail text-white"></i>
        </div>
        <div class="sidebar-brand-text text-white mx-3">KARYAWAN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">



    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="dash_karyawan.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('karyawan/grafik_transaksi') ?>">
            <i class="fas fa-chart-line"></i>
            <span>Grafik Transaksi</span></a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('karyawan/data_menu') ?>">
            <i class="fas fa-clipboard"></i>
            <span>Data Menu</span></a>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-shopping-cart fa-fw"></i>
            <span>Penjualan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo site_url('karyawan/transaksi') ?>">Transaksi</a>
                <a class="collapse-item" href="<?php echo site_url('karyawan/histori_penjualan') ?>">Histori Penjualan</a>
            </div>
        </div>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('karyawan/db_habis') ?>">
            <i class="fas fa-tasks"></i>
            <span>Data Barang Habis</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-users"></i>
            <span>Pelanggan</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo site_url('karyawan/dk_pelanggan') ?>">Daftar Kartu Pelanggan</a>
                <a class="collapse-item" href="<?php echo site_url('karyawan/data_pelanggan') ?>">Data Pelanggan</a>
            </div>
        </div>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('karyawan/casbon') ?>">
            <i class="fas fa-money-check-alt"></i>
            <span>Kasbon</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->
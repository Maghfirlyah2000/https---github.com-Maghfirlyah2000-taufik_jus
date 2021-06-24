<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-cocktail text-white"></i>
        </div>
        <div class="sidebar-brand-text text-white mx-3">PEMILIK</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="dash_pemilik.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('pemilik/grafik_transaksi') ?>">
            <i class="fas fa-chart-line"></i>
            <span>Grafik Transaksi</span></a>
    </li>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('pemilik/data_menu') ?>">
            <i class="fas fa-clipboard"></i>
            <span>Data Menu</span></a>
    </li>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('pemilik/data_pegawai') ?>">
            <i class="fas fa-users-cog"></i>
            <span>Data Pegawai</span></a>
    </li>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('pemilik/data_pembeli') ?>">
            <i class="fas fa-user-secret"></i>
            <span>Data Pembeli</span></a>
    </li>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('pemilik/kasbon') ?>">
            <i class="fas fa-money-check-alt"></i>
            <span>Data Kasbon Karyawan</span></a>
    </li>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('pemilik/laporan') ?>">
            <i class="fas fa-file-alt"></i>
            <span>Laporan Penjualan</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->
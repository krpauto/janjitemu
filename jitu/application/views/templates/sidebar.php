<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-light fa-globe"></i>
        </div>
        <div class="sidebar-brand-text mx-3">JiTU</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Dashboard
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Charts -->
    <?php if ($user['role_id'] == 2) { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('administrator/berkas'); ?>">
                <i class="fas fa-fw fa-table"></i>
                <span>Berkas Pemohon</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
    <?php } ?>

    <!-- Nav Item - Charts -->
    <?php if ($user['role_id'] == 1 || $user['role_id'] == 2) { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('petugas'); ?>">
                <i class="fas fa-fw fa-table"></i>
                <span>Petugas Ukur</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
    <?php } ?>

    <?php if ($user['role_id'] == 1) { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('administrator/berkas'); ?>">
                <i class="fas fa-fw fa-table"></i>
                <span>Berkas Pemohon</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
    <?php } ?>



    <?php if ($user['role_id'] == 2 || $user['role_id'] == 1 ) { ?>
        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('administrator/laporan'); ?>">
                <i class="fas fa-fw fa-table"></i>
                <span>Laporan Hasil Ukur</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
    <?php } ?>


        <!-- Nav Item - Charts -->
        <?php if ($user['role_id'] == 3 ) { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('petugas/laporan'); ?>">
                <i class="fas fa-fw fa-table"></i>
                <span>Input Laporan Ukur</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
    <?php } ?>

            <!-- Nav Item - Charts -->
            <?php if ($user['role_id'] == 3 ) { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('administrator/laporan'); ?>">
                <i class="fas fa-fw fa-table"></i>
                <span>Laporan Ukur</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
    <?php } ?>

    <!-- Nav Item - Charts -->
    <?php if ( $user['role_id'] == 1 || $user['role_id'] == 3 || $user['role_id'] == 2 ) { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('petugas/surat_tugas'); ?>">
                <i class="fas fa-fw fa-table"></i>
                <span>Surat Tugas</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
    <?php } ?>




    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
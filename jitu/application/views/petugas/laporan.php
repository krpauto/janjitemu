<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Laporan
                        </h4>
                    </div>
                    <?php if ($user['role_id'] == 3) { ?>
                        <div class="col-auto">
                            <a href="<?= base_url('petugas/input_laporan') ?>" class="btn btn-sm btn-primary btn-icon-split">
                                <span class="icon">
                                    <i class="fa fa-plus"></i>
                                </span>
                                <span class="text">
                                    Input Laporan
                                </span>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        
    </div>
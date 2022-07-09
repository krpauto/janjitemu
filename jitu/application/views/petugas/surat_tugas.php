<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php if ($user['role_id'] == 1) { ?>
        <?= $this->session->flashdata('pesan'); ?>
    <?php } ?>

    <!-- DataTales Example -->
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Data Surat Tugas
                        </h4>
                    </div>
                    <?php if ($user['role_id'] == 1) { ?>
                        <div class="col-auto">
                            <a href="<?= base_url('admin/tambah_surat') ?>" class="btn btn-sm btn-primary btn-icon-split">
                                <span class="icon">
                                    <i class="fa fa-plus"></i>
                                </span>
                                <span class="text">
                                    Tambah Surat Tugas
                                </span>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Surat</th>
                                <th>Tanggal Surat</th>
                                <th>Nomor Berkas</th>
                                <th>NIP</th>
                                <th>Tugas</th>
                                <th>Beban Biaya</th>

                            </tr>
                        </thead>
                        <?php $no = 1;
                        foreach ($surat_tugas as $st) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $no++ ?></td>

                                    <td><?= $st->no_surat ?></td>
                                    <td><?= $st->tgl_surat ?></td>
                                    <td><?= $st->no_berkas ?></td>
                                    <td><?= $st->nip ?></td>
                                    <td><?= $st->tugas ?></td>
                                    <td><?= $st->beban_biaya ?></td>


                                </tr>
                                </tr>
                            </tbody>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
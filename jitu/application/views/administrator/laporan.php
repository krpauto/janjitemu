<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php if ($user['role_id'] == 2) { ?>
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
                            Laporan
                        </h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nomor Surat</th>
                                <th>NIP Petugas</th>
                                <th>Nomor Berkas</th>
                                <th>Volume Awal</th>
                                <th>Volume Akhir</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <?php $no = 1;
                        foreach ($laporan as $lprn) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $no++ ?></td>

                                    <td><?= $lprn->tgl_pengerjaan ?></td>
                                    <td><?= $lprn->no_surat ?></td>
                                    <td><?= $lprn->nip_petugas ?></td>
                                    <td><?= $lprn->no_berkas ?></td>
                                    <td><?= $lprn->volume_awal ?></td>
                                    <td><?= $lprn->volume_akhir ?></td>
                                    <?php if ($user['role_id'] == 2 && $lprn->status == 1) { ?>
                                        <td>
                                            <a>Selesai</a>


                                        </td>
                                    <?php } ?>
                                    <?php if ($user['role_id'] == 2 && $lprn->status == 2) { ?>
                                        <td>
                                            <a> Belum Selesai</a>


                                        </td>
                                    <?php } ?>
                                    <?php if ($user['role_id'] == 3 && $lprn->status == 2) { ?>
                                        <td>
                                            <a href="<?= base_url('petugas/edit_laporan/' . $lprn->id_pengukuran) ?>" class="btn btn-warning btn-sm">Belum Selesai</a>

                                        </td>
                                    <?php } ?>

                                    <?php if ($user['role_id'] == 3 && $lprn->status == 1) { ?>
                                        <td>
                                            <a>Selesai</a>


                                        </td>
                                    <?php } ?>
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
<!-- End of Main Content -->
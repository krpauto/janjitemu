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
                            Berkas Pemohon
                        </h4>
                    </div>
                    <?php if ($user['role_id'] == 2) { ?>
                        <div class="col-auto">
                            <a href="<?= base_url('administrator/tambah') ?>" class="btn btn-sm btn-primary btn-icon-split">
                                <span class="icon">
                                    <i class="fa fa-plus"></i>
                                </span>
                                <span class="text">
                                    Tambah Berkas
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
                                <th>Nomor Berkas</th>
                                <th>Nama Pemohon</th>
                                <th>Volume Ukur</th>
                                <th>Alamat Pemohon</th>
                                <th>Kelurahan</th>
                                <th>Kecamatan</th>
                                <th>Kota</th>
                                <th>Provinsi</th>
                                <th>No.Hp</th>
                                <th>Tanggal</th>
                                <?php if ($user['role_id'] == 2) { ?>
                                    <th>Aksi</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <?php $no = 1;
                        foreach ($berkas as $brks) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $no++ ?></td>

                                    <td><?= $brks->no_berkas ?></td>
                                    <td><?= $brks->nama_pemohon ?></td>
                                    <td><?= $brks->volume ?></td>
                                    <td><?= $brks->alamat ?></td>
                                    <td><?= $brks->kelurahan ?></td>
                                    <td><?= $brks->kecamatan ?></td>
                                    <td><?= $brks->kota ?></td>
                                    <td><?= $brks->provinsi ?></td>
                                    <td><?= $brks->no_telp ?></td>
                                    <td><?= $brks->tgl_terima ?></td>

                                    <?php if ($user['role_id'] == 2) { ?>
                                        <td>
                                        <a href="<?= base_url('administrator/edit_data') ?>/<?= $brks->id_berkas ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url('administrator/delete/' . $brks->id_berkas) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus?)"><i class="fas fa-trash"></i></a>

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

<!-- Modal Edit -->
<?php foreach ($berkas as $brks) { ?>
    <div class="modal fade" id="edit<?= $brks->id_berkas ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Petugas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="card shadow-sm border-bottom-primary">
                                    <div class="card-header bg-white py-3">
                                        <div class="row">
                                            <div class="col">
                                                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                                    Form Edit Petugas
                                                </h4>
                                            </div>
                                            <div class="col-auto">
                                                <a href="<?= base_url('administrator/berkas') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                                                    <span class="icon">
                                                        <i class="fa fa-arrow-left"></i>
                                                    </span>
                                                    <span class="text">
                                                        Kembali
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?= base_url('administrator/edit/' . $brks->id_berkas) ?>" method="post" accept-charset="utf-8">
                                            <input type="hidden" name="csrf_test_name" value="08ced5701a77ad2ac7b91526fe941495" />
                                            <div class="row form-group">
                                                <label class="col-md-3 text-md-right" for="no_berkas">Nomor Berkas</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-file"></i></span>
                                                        </div>
                                                        <input value="" name="no_berkas" id="no_berkas" type="text" class="form-control" value="<?= $brks->no_berkas ?>">
                                                        <?= form_error('no_berkas', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label class="col-md-3 text-md-right" for="nama_berkas">Nama Berkas</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="far fa-file"></i></span>
                                                        </div>
                                                        <input value="" name="nama_berkas" id="nama_berkas" type="text" class="form-control" value="<?= $brks->nama_berkas ?>">
                                                        <?= form_error('nama_berkas', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label class="col-md-3 text-md-right" for="nama_pemohon">Nama Pemohon</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                                                        </div>
                                                        <input value="" name="nama_pemohon" id="nama_pemohon" type="text" class="form-control" value="<?= $brks->nama_pemohon ?>">
                                                        <?= form_error('nama_pemohon', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label class="col-md-3 text-md-right" for="no_telp">Nomor Whatsapp</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-phone"></i></span>
                                                        </div>
                                                        <input value="" name="no_telp" id="no_telp" type="text" class="form-control" value="<?= $brks->no_telp ?>">
                                                        <?= form_error('no_telp', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row form-group">
                                                    <div class="col">
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
            </div>
        </div>
    </div>
    </div>
<?php } ?>
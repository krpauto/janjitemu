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
                            Data Petugas
                        </h4>
                    </div>
                    <?php if ($user['role_id'] == 1) { ?>
                        <div class="col-auto">
                            <a href="<?= base_url('petugas/tambah') ?>" class="btn btn-sm btn-primary btn-icon-split">
                                <span class="icon">
                                    <i class="fa fa-plus"></i>
                                </span>
                                <span class="text">
                                    Tambah Petugas
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
                                <th>Nama Petugas</th>
                                <th>NIP</th>
                                <th>Jabatan</th>
                                <th>No Telepon</th>
                                <th>Alamat</th>
                                <th>Nomor Berkas Pemohon</th>

                                <?php if ($user['role_id'] == 1) { ?>
                                    <th>Aksi</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <?php $no = 1;
                        foreach ($petugas as $ptg) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $ptg->nama_petugas ?></td>
                                    <td><?= $ptg->nip_petugas ?></td>
                                    <td><?= $ptg->jabatan ?></td>
                                    <td><?= $ptg->no_telp ?></td>
                                    <td><?= $ptg->alamat  ?></td>
                                    <td><?= $ptg->id_berkas  ?></td>
                                    <?php if ($user['role_id'] == 1) { ?>
                                        <td>

                                            <div style="position:relative; margin-right:1px;">

                                                <a href="<?= base_url('petugas/edit_data') ?>/<?= $ptg->id_petugas ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <a href="<?= base_url('petugas/delete/' . $ptg->id_petugas) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus?)"><i class="fas fa-trash"></i></a>
                                                <a href="http://wajitu.janjitemu.web.id/app/login" class="btn btn-success btn-sm">WHATSAPP</a>

                                            </div>
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
<?php foreach ($petugas as $ptg) { ?>
    <div class="modal fade" id="edit<?= $ptg->id_petugas ?>" tabindex="-9" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <div class="card-header bg-white ">
                                        <div class="row">
                                            <div class="col">
                                                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                                    Form Edit Petugas
                                                </h4>
                                            </div>
                                            <div class="col-auto">
                                                <a href="<?= base_url('petugas') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                                        <form action="<?= base_url('petugas/edit/' . $ptg->id_petugas) ?>" method="post" accept-charset="utf-8">
                                            <input type="hidden" name="csrf_test_name" value="08ced5701a77ad2ac7b91526fe941495" />
                                            <div class="row form-group">
                                                <label class="col-md-3 text-md-right" for="nama_petugas">Nama</label>
                                                <div class="col">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                                                        </div>
                                                        <input name="nama_petugas" id="nama_petugas" type="text" class="form-control" value="<?= $ptg->nama_petugas ?>">
                                                        <?= form_error('nama_petugas', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-md-3 text-md-right" for="nip_petugas">NIP</label>
                                                <div class="col">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                                                        </div>
                                                        <input name="nip_petugas" id="nip_petugas" type="text" class="form-control" value="<?= $ptg->nip_petugas ?>">
                                                        <?= form_error('nip_petugas', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                </div>


                                                <div class="row form-group">
                                                    <label class="col-md-3 text-md-right" for="no_hp">No. Telp</label>
                                                    <div class="col-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-phone"></i></span>
                                                            </div>
                                                            <input name="no_telp" id="no_telp" type="text" class="form-control" value="<?= $ptg->no_telp ?>">
                                                            <?= form_error('no_telp', '<div class="text-small text-danger">', '</div>') ?>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row form-group">
                                                    <label class="col-md-3 text-md-right" for="alamat">Alamat</label>
                                                    <div class="col">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                                                            </div>
                                                            <textarea name="alamat" id="alamat" class="form-control" rows="2" value="<?= $ptg->alamat ?>"></textarea>
                                                            <?= form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <label class="col-md-3  text-md-right" for="jabatan">Jabatan</label>
                                                    <div class="col">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                                                            </div>
                                                            <input name="jabatan" id="jabatan" type="text" class="form-control" value="<?= $ptg->jabatan ?>">
                                                            <?= form_error('jabatan', '<div class="text-small text-danger">', '</div>') ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <label class="col-md-3  text-md-right" for="id_berkas">No Berkas</label>
                                                    <div class="col">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-phone"></i></span>
                                                            </div>
                                                            <input name="id_berkas" id="id_berkas" type="text" class="form-control" value="<?= $ptg->id_berkas ?>">
                                                            <?= form_error('id_berkas', '<div class="text-small text-danger">', '</div>') ?>
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
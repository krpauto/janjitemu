<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php if ($user['role_id'] == 3) { ?>
        <?= $this->session->flashdata('pesan'); ?>
    <?php } ?>

    <!-- DataTales Example -->
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>


    </div>
    <!-- End of Main Content -->

    <!-- Modal Edit -->
    <?php foreach ($petugas as $ptg) { ?>
        <div class="modal fade" id="edit<?= $ptg->id_petugas ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <label class="col-md-3 text-md-right" for="nama_petugas">Nama Petugas</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                                                            </div>
                                                            <input value="" name="nama_petugas" id="nama_petugas" type="text" class="form-control" value="<?= $ptg->nama_petugas ?>">
                                                            <?= form_error('nama_petugas', '<div class="text-small text-danger">', '</div>') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-md-3 text-md-right" for="no_hp">Nomor Telepon</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-phone"></i></span>
                                                            </div>
                                                            <input value="" name="no_telp" id="no_telp" type="text" class="form-control" value="<?= $ptg->no_telp ?>">
                                                            <?= form_error('no_telp', '<div class="text-small text-danger">', '</div>') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-md-3 text-md-right" for="bertugas">Alamat</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                                                            </div>
                                                            <textarea name="tugas" id="tugas" class="form-control" rows="4" value="<?= $ptg->tugas ?>"></textarea>
                                                            <?= form_error('tugas', '<div class="text-small text-danger">', '</div>') ?>
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
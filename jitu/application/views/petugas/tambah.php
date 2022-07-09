<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Petugas Ukur</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-bottom-primary">
                <div class="card-header bg-white py-3">
                    <div class="row">
                        <div class="col">
                            <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                Form Tambah Petugas
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
                    <form action="<?= base_url('petugas/tambah_aksi') ?>" method="post" accept-charset="utf-8">
                        <input type="hidden" name="csrf_test_name" value="08ced5701a77ad2ac7b91526fe941495" />
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="nama_petugas">Nama Petugas</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                                    </div>
                                    <input value="" name="nama_petugas" id="nama_petugas" type="text" class="form-control" placeholder="Nama Petugas">
                                    <?= form_error('nama_petugas', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="no_telp">Nomor Telepon</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-phone"></i></span>
                                    </div>
                                    <input value="" name="no_telp" id="no_telp" type="text" class="form-control" placeholder="Nomor Telepon">
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
                                    <textarea name="alamat" id="alamat" class="form-control" rows="4" placeholder="Alamat"></textarea>
                                    <?= form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>


                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="id_berkas">Nomor Berkas Pemohon</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-address-card"></i></span>
                                    </div>
                                    <input value="" name="id_berkas" id="id_berkas" type="textarea" class="form-control" placeholder="Nomor Berkas Pemohon">
                                    <?= form_error('id_berkas', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="nip_petugas">NIP Petugas</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                                    </div>
                                    <textarea name="nip_petugas" id="nip_petugas" class="form-control" placeholder="NIP Petugas"></textarea>
                                    <?= form_error('nip_petugas', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="jabatan">Jabatan</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                                    </div>
                                    <input value="" name="jabatan" id="jabatan" type="text" class="form-control" placeholder="jabatan">
                                    <?= form_error('jabatan', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-md-9 offset-md-3">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
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
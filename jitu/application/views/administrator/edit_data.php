<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Berkas Pemohon</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-bottom-primary">
                <div class="card-header bg-white py-3">
                    <div class="row">
                        <div class="col">
                            <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                Form Edit Berkas
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
                    <form action="<?= base_url('administrator/tambah_aksi') ?>" method="post" accept-charset="utf-8">
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="tgl_terima">Tanggal</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-calendar"></i></span>
                                    </div>
                                    <input value="<?= date('d-m-Y'); ?>" name="tgl_terima" id="tgl_terima" type="text" class="form-control" placeholder="kota" readonly>
                                    <?= form_error('tgl_terima', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="csrf_test_name" value="08ced5701a77ad2ac7b91526fe941495" />
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="no_berkas">Nomor Berkas</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                                    </div>
                                    <input value="<?= $berkas->no_berkas ?>" name="no_berkas" id="no_berkas" type="text" class="form-control" placeholder="Nomor">
                                    <?= form_error('no_berkas', '<div class="text-small text-danger">', '</div>') ?>
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
                                    <input value="<?= $berkas->nama_pemohon ?>" name="nama_pemohon" id="nama_pemohon" type="text" class="form-control" placeholder="Nama Pemohon">
                                    <?= form_error('nama_pemohon', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>


                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="volume">Volume</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                                    </div>
                                    <input value="<?= $berkas->volume ?>" name="volume" id="volume" type="text" class="form-control" placeholder="Nama Pemohon">
                                    <?= form_error('volume', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="alamat">Alamat</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-map-marker-alt"></i></span>
                                    </div>
                                    <input value="<?= $berkas->alamat ?>" name="alamat" id="alamat" type="text" class="form-control" placeholder="Alamat Pemohon">
                                    <?= form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="kelurahan">Kelurahan</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-map-marker-alt"></i></span>
                                    </div>
                                    <input value="<?= $berkas->kelurahan ?>" name="kelurahan" id="kelurahan" type="text" class="form-control" placeholder="Kelurahan">
                                    <?= form_error('kelurahan', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="kecamatan">Kecamatan</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-map-marker-alt"></i></span>
                                    </div>
                                    <input value="<?= $berkas->kecamatan ?>" name="kecamatan" id="kecamatan" type="text" class="form-control" placeholder="Kecamatan">
                                    <?= form_error('kecamatan', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="kota">Kota</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-map-marker-alt"></i></span>
                                    </div>
                                    <input value="Batam" name="kota" id="kota" type="text" class="form-control" placeholder="kota" readonly>
                                    <?= form_error('kota', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="provinsi">Provinsi</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-map-marker-alt"></i></span>
                                    </div>
                                    <input value="Kepulauan Riau" name="provinsi" id="provinsi" type="text" class="form-control" placeholder="provinsi" readonly>
                                    <?= form_error('provinsi', '<div class="text-small text-danger">', '</div>') ?>
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
                                    <input value="<?= $berkas->no_telp ?>" name="no_telp" id="no_telp" type="text" class="form-control" placeholder="Nomor Whatsapp">
                                    <?= form_error('no_telp', '<div class="text-small text-danger">', '</div>') ?>
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
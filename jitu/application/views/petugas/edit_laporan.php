<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Laporan Ukur</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-bottom-primary">
                <div class="card-header bg-white py-3">
                    <div class="row">
                        <div class="col">
                            <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                Form Edit Laporan
                            </h4>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('administrator/laporan') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                    <form action="<?= base_url('petugas/tambah_laporan') ?>" method="post" accept-charset="utf-8">
                        <input type="hidden" name="csrf_test_name" value="08ced5701a77ad2ac7b91526fe941495" />
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="tgl_pengerjaan">Tanggal</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-calendar"></i></span>
                                    </div>
                                    <input value="<?= date('d-m-Y'); ?>" name="tgl_pengerjaan" id="tgl_pengerjaan" type="text" class="form-control" placeholder="Nama Petugas">
                                    <?= form_error('tgl_pengerjaan', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="no_surat">Nomor Surat</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-regular fa-envelope"></i></span>
                                    </div>
                                    <input name="no_surat" id="no_surat" type="text" class="form-control" placeholder="Nomor Surat" value="">
                                    <?= form_error('no_surat', '<div class="text-small text-danger">', '</div>') ?>
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
                                    <input value="" name="nip_petugas" id="nip_petugas" type="text" class="form-control" placeholder="NIP Petugas">
                                    <?= form_error('nip_petugas', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="no_berkas">Nomor Berkas</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-fw fa-address-card"></i></span>
                                    </div>
                                    <input value="" name="no_berkas" id="no_berkas" type="textarea" class="form-control" placeholder="Nomor Berkas">
                                    <?= form_error('no_berkas', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="volume_awal">Volume Awal</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-fw fa-location-crosshairs"></i></span>
                                    </div>
                                    <input value="" name="volume_awal" id="volume_awal" type="textarea" class="form-control" placeholder="Volume Awal">
                                    <?= form_error('volume_awal', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="volume_akhir">Volume Akhir</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-fw fa-location-crosshairs"></i></span>
                                    </div>
                                    <input value="" name="volume_akhir" id="volume_akhir" type="textarea" class="form-control" placeholder="Volume Akhir">
                                    <?= form_error('volume_akhir', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="status">Status Pengerjaan</label>
                            <div class="col-md-9">
                                <div class="form-check">
                                    <label><input class="form-check-input" name="status" id="1" type="radio" value="1">Selesai</label>
                                    <?= form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-check">
                                    <label><input class="form-check-input" name="status" id="2" type="radio" value="2">Belum Selesai</label>
                                    <?= form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>

                        </div>
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="gambar"></label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="file" name="userfile" id="gambar" class="form-control" size="20" placeholder="Volume Akhir">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="laporan">Laporan</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-fw fa-nfc-directional"></i></span>
                                    </div>
                                    <textarea name="laporan" id="laporan" class="form-control" rows="4" placeholder="Laporan"></textarea>
                                    <?= form_error('laporan', '<div class="text-small text-danger">', '</div>') ?>
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
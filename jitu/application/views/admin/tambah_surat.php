<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Surat Tugas</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-bottom-primary">
                <div class="card-header bg-white py-3">
                    <div class="row">
                        <div class="col">
                            <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                Form Tambah Surat Tugas
                            </h4>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('petugas/surat_tugas') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                    <form action="<?= base_url('admin/tambah_aksi') ?>" method="post" accept-charset="utf-8">
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="tgl_surat">Tanggal</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-calendar"></i></span>
                                    </div>
                                    <input value="<?= date('d-m-Y'); ?>" name="tgl_surat" id="tgl_surat" type="text" class="form-control" placeholder="kota" readonly>
                                    <?= form_error('tgl_surat', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="no_surat">Nomor Surat</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-fw fa-envelope"></i></span>
                                    </div>
                                    <input value="" name="no_surat" id="no_surat" type="text" class="form-control" placeholder="Nomor Surat">
                                    <?= form_error('no_surat', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="csrf_test_name" value="08ced5701a77ad2ac7b91526fe941495" />
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="no_berkas">Nomor Berkas</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <select name="no_berkas" class="form-control">
                                        <option value="">--Pilih--</option>
                                        <span class="form-control-chosen" id="basic-addon1"><i class="fa fa-fw fa-file"></i></span>

                                        <?php foreach ($berkas as $brks) : ?>
                                            <option value="<?php echo $brks->id_berkas ?>"><?php echo $brks->no_berkas ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="nip">NIP</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <select name="nip" class="form-control">
                                        <option value="">--Pilih--</option>
                                        <span class="form-control-chosen" id="basic-addon1"><i class="fa fa-fw fa-file"></i></span>

                                        <?php foreach ($petugas_ukur as $ptg) : ?>
                                            <option value="<?php echo $ptg->nip_petugas ?>"><?php echo $ptg->nip_petugas ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="tugas">Tugas</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                                    </div>
                                    <input value="" name="tugas" id="tugas" type="text" class="form-control" placeholder="Tugas">
                                    <?= form_error('tugas', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-md-3 text-md-right" for="beban_biaya">Beban Biaya</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-map-marker-alt"></i></span>
                                    </div>
                                    <input value="" name="beban_biaya" id="beban_biaya" type="text" class="form-control" placeholder="Beban Biaya">
                                    <?= form_error('beban_biaya', '<div class="text-small text-danger">', '</div>') ?>
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
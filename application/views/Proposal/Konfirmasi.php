<div class="col-12 grid-margin stretch-card">
    <div class="container">
        <div class="card mb-5">
            <!-- Header -->
            <div class="card-header">
                ID :
                <strong><?= $Proposal->id_proposal; ?></strong>
                <span class="float-right">
                    <!-- Jika ada tanggungan -->
                    <?php if ($Proposal->tanggungan == "Pending") { ?>
                        <a class="btn btn-warning btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-spinner"></i>
                            </span>
                            <span class="text"><strong>Tanggungan</strong></span>
                        </a>
                    <?php } else { ?>
                        <!-- Apabila status N/A maka muncul tombol Konfirmasi -->
                        <?php if ($Proposal->status == "N/A") { ?>
                            <a class="btn btn-primary" data-toggle="modal" data-target="#konfirmasiModal">
                                <strong>Konfirmasi</strong>
                            </a>
                            <!-- Apabila status 1 maka muncul tombol Diterima -->
                        <?php } elseif ($Proposal->status == "1") { ?>
                            <a class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text"><strong>Diterima</strong></span>
                            </a>
                            <!-- Apabila status 0 muncul tombol Ditolak -->
                        <?php } else { ?>
                            <a class="btn btn-danger btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-times"></i>
                                </span>
                                <span class="text"><strong>Ditolak</strong></span>
                            </a>
                        <?php } ?>
                        <!-- END -->
                    <?php } ?>
                </span>
            </div>
            <!-- Body -->
            <div class=" card-body">
                <!-- Tanggal Upload -->
                <div class="text-right">
                    <div>
                        <strong>Tanggal Upload </strong>
                    </div>
                    <div><?= $Proposal->record_tgl; ?></div>
                </div>
                <!-- Title -->
                <div class="text-center grid-margin mb-4 mt-2">
                    <h3><strong>Detail Proposal</strong></h3>
                </div>
                <!-- form -->
                <form action="<?= base_url('Jurnal/tanggungan_up') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Pengaju Proposal</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" disabled value="<?= $Proposal->nama; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Agenda</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" disabled value="<?= $Proposal->agenda; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tanggal Agenda</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" disabled value="<?= $Proposal->tgl_agenda; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Berita Acara</label>
                        <div class="col-sm-9">
                            <textarea type="text" rows="6" class="form-control" disabled><?= $Proposal->berita_acara; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Lampiran Dokumen</label>
                        <div class="col-sm-9 mt-2">
                            <a href="<?= base_url('Proposal/download/' . $Proposal->dok_proposal); ?>">
                                <?= $Proposal->dok_proposal ?>
                            </a>
                        </div>
                    </div>
                    <!-- Jika Proposal ditolak maka akan muncul catatan -->
                    <?php if ($Proposal->status == "0") { ?>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Catatan</label>
                            <div class="col-sm-9">
                                <textarea type="text" rows="6" class="form-control" disabled><?= $Proposal->catatan; ?></textarea>
                            </div>
                        </div>
                    <?php } elseif ($Proposal->tanggungan == "Pending") { ?>
                        <?php if ($this->session->userdata('jabatan') == "Divisi Umum") { ?>
                            <input type="hidden" value="<?= $Proposal->id_proposal ?>" name="id_proposal" />
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Dokumen Pertanggung Jawaban</label>
                                <div class="col-sm-6">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="tanggungan" name="tanggungan">
                                        <label class="custom-file-label" for="dok-proposal">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <span class="float-right mt-5 mb-2">
                                <button class="btn btn-success" type="submit">
                                    Submit
                                </button>
                            </span>
                        <?php } ?>
                    <?php 
                }elseif ($Proposal->tanggungan != "Pending" && $Proposal->tanggungan != NULL&& $Proposal->tanggungan != "Done")
                {?>
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Lampiran Tanggungan</label>
                        <div class="col-sm-9 mt-2">
                            <a href="<?= base_url('Proposal/download_tanggungan/' . $Proposal->tanggungan); ?>">
                                <?= $Proposal->tanggungan ?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- End catatan -->
                </form>
                <a type="button" href="<?php if ($this->session->userdata('jabatan') == "Direksi") {
                    echo base_url('Proposal/persetujuan');
                }else {
                    echo base_url('Proposal');
                }?>" class="btn btn-outline-secondary mt-5 mb-4">
                    Kembali
                </a>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
</div>
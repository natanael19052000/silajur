<div class="col-12 grid-margin stretch-card">
    <div class="container">
        <div class="card mb-5">
            <!-- Header -->
            <div class="card-header">
                ID :
                <strong><?= $Proposal->id_proposal; ?></strong>
                <span class="float-right">
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
                <form class="forms-sample">
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
                    <?php } ?>
                    <!-- End catatan -->
                </form>
                <a type="button" href="<?= base_url('Proposal/persetujuan') ?>" class="btn btn-outline-secondary mt-5 mb-4">
                    Kembali
                </a>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
</div>
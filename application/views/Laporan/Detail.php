<div class="col-12 grid-margin stretch-card">
    <div class="container">
        <div class="card mb-5">
            <!-- Header -->
            <div class="card-header">
                ID :
                <strong><?= $Jurnal->id_proposal; ?></strong>
            </div>
            <!-- Body -->
            <div class=" card-body">
                <!-- Title -->
                <div class="text-center grid-margin mb-4 mt-2">
                    <h3><strong>Laporan</strong></h3>
                </div>
                <!-- form -->
                <form class="forms-sample">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Pengaju Jurnal</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" disabled value="<?= $Jurnal->nama; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jurnal</label>
                        <div class="col-sm-9 mt-2">
                            <a href="<?= base_url('Jurnal/download/' . $Jurnal->dok_jurnal); ?>">
                                <?= $Jurnal->dok_jurnal ?>
                            </a>
                        </div>
                    </div>
                    <!-- Jika Proposal ditolak maka akan muncul catatan -->
                    <?php
                    if ($Jurnal->status_jurnal == "0") {
                    ?>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Catatan</label>
                            <div class="col-sm-9">
                                <textarea type="text" rows="6" class="form-control" disabled><?= $Jurnal->catatan_jurnal; ?></textarea>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- End catatan -->

                    <div class="text-center grid-margin mb-4 mt-5">
                        <h3><strong>Proposal</strong></h3>
                    </div>

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
                </form>
                <a type="button" href="<?= base_url('Laporan') ?>" class="btn btn-outline-secondary mt-5 mb-4">
                    Kembali
                </a>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
</div>
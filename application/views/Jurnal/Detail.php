<div class="col-12 grid-margin stretch-card">
    <div class="container">
        <div class="card mb-5">
            <!-- Header -->
            <div class="card-header">
                ID :
                <strong><?= $Proposal->id_proposal; ?></strong>
                <span class="float-right">
                    <!-- Apabila status N/A maka muncul tombol Konfirmasi -->
                    <?php if ($Proposal->tanggungan == NULL) { ?>
                        <a class="btn btn-warning" data-toggle="modal" data-target="#tanggunganModal">
                            <strong>Ajukan Tanggungan</strong>
                        </a>
                        <!-- Apabila status 1 maka muncul tombol Diterima -->
                    <?php } elseif ($Proposal->tanggungan == "Pending") { ?>
                        <a class="btn btn-info btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-spinner"></i>
                            </span>
                            <span class="text"><strong>Pending</strong></span>
                        </a>
                        <!-- Apabila status 0 muncul tombol Ditolak -->
                    <?php } else { ?>
                        <a class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text"><strong>Done</strong></span>
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
                <?php echo form_open_multipart('Jurnal/do_upload'); ?>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Agenda</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" readonly name="agenda" value="<?= $Proposal->agenda; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Agenda</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" readonly value="<?= $Proposal->tgl_agenda; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Berita Acara</label>
                    <div class="col-sm-9">
                        <textarea type="text" rows="6" class="form-control" readonly><?= $Proposal->berita_acara; ?></textarea>
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
                <?php
                // PERTANGGUNG JAWABAN
                // Jika DOK_JURNAL KOSONG
                if ($Jurnal->dok_jurnal == NULL) { ?>
                    <?php
                    // Jika SUDAH DI UPLOAD
                    if ($Proposal->tanggungan != "Pending" && $Proposal->tanggungan != NULL && $Proposal->tanggungan != "Done") {
                        // KELUAR link DOWNLOAD
                    ?>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Lampiran Tanggungan</label>
                            <div class="col-sm-9 mt-2">
                                <a href="<?= base_url('Proposal/download_tanggungan/' . $Proposal->tanggungan); ?>">
                                    <?= $Proposal->tanggungan ?>
                                </a>
                            </div>
                        </div>
                    <?php } else {
                    // Jika BELUM di UPLOAD maka KELUAR tombol UPLOAD 
                    ?>
                    <input type="hidden" value="<?= $Proposal->id_proposal; ?>" name="id_proposal">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Upload Jurnal</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="dok_jurnal" name="dok_jurnal">
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
                <?php } else {
                    // Jika DOK_JURNAL TERISI
                ?>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jurnal</label>
                        <div class="col-sm-9 mt-2">
                            <a href="<?= base_url('Jurnal/download/' . $Jurnal->dok_jurnal); ?>">
                                <?= $Jurnal->dok_jurnal ?>
                            </a>
                        </div>
                    </div>
                <?php }
                // END ELSE
                ?>
                </form>
                <a type="button" href="<?= base_url('Jurnal') ?>" class="btn btn-outline-secondary mt-5 mb-4">
                    Kembali
                </a>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
</div>
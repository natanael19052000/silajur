<div class="col-12 grid-margin stretch-card">
    <div class="container">
        <div class="card mb-5">
            <!-- Header -->
            <div class="card-header">
                ID :
                <strong><?= $Proposal->id_proposal; ?></strong>
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
                <?php if ($Jurnal->dok_jurnal != null) { ?>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jurnal</label>
                        <div class="col-sm-9 mt-2">
                            <a href="<?= base_url('Jurnal/download/' . $Jurnal->dok_jurnal); ?>">
                                <?= $Jurnal->dok_jurnal ?>
                            </a>
                        </div>
                    </div>
                <?php } else { ?>
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
                </form>
                <a type="button" href="<?= base_url('Jurnal') ?>" class="btn btn-outline-secondary mt-5 mb-4">
                    Kembali
                </a>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
</div>
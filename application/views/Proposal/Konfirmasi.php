<div class="col-12 grid-margin stretch-card">
    <div class="container">
        <div class="card mb-5">
            <div class="card-header">
                ID :
                <strong><?= $Proposal->id_proposal; ?></strong>
                <span class="float-right">
                    <strong>Status:</strong> Pending
                </span>
            </div>
            <div class="card-body">
                <div class="text-right">
                    <div>
                        <strong>Tanggal Upload </strong>
                    </div>
                    <div><?= $Proposal->record_tgl; ?></div>
                </div>
                <div class="text-center grid-margin mb-4 mt-2">
                    <h3>Detail Proposal</h3>
                </div>
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
                        <div class="col-sm-9">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" readonly value="<?= $Proposal->dok_proposal ?>">
                                <span class="input-group-append">
                                    <a class="file-upload-browse btn btn-info" href="<?= base_url('Proposal/download/' . $Proposal->dok_proposal); ?>" type="button">
                                        Downlaod
                                    </a>
                                </span>
                            </div>
                        </div>
                </form>
            </div>
            <a type="button" href="<?= base_url('Proposal/persetujuan') ?>" class="btn btn-secondary mt-5 mb-4">
                Kembali
            </a>
        </div>
        <div class="card-footer"></div>
    </div>

</div>

</div>
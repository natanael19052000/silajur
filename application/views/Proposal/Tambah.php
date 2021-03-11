<div class="col-12 grid-margin stretch-card">
    <div class="card mb-5">
        <div class="card-body">
            <h4 class="card-title">Form Pengajuan Proposal</h4>
            <p class="card-description"> Isikan data berikut untuk mengajukan Proposal </p>
            <?php echo form_open_multipart('Proposal/do_upload'); ?>
            <input type="hidden" name="nip" value="<?php echo $this->session->userdata("nip"); ?>" />
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Agenda</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="agenda" placeholder="Masukkan nama Agenda">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tanggal Agenda</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" name="tgl_agenda" placeholder="Pilih Tanggal Agenda">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Berita Acara</label>
                <div class="col-sm-9">
                    <textarea type="text" rows="6" name="berita_acara" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Dokumen Proposal</label>
                <div class="col-sm-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="dok_proposal" name="dok_proposal">
                        <label class="custom-file-label" for="dok-proposal">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Dokumen Pendukung</label>
                <div class="col-sm-9">
                    <a class="btn btn-info" data-toggle="modal" data-target="#nominatifModal">
                        <strong>Konfirmasi</strong>
                    </a>
                </div>
            </div>
            <button class="btn btn-success mr-2 mt-lg-4" value="upload">Submit</button>
            <button class="btn btn-outline-secondary ml-1 mt-lg-4">Cancel</button>
            </form>
        </div>
    </div>
</div>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form Pengajuan Jurnal</h4>
            <p class="card-description"> Isikan data berikut untuk mengajukan Jurnal </p>
            <form class="forms-sample" action="<?php echo base_url('Jurnal/add') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="nip" value="<?php echo $this->session->userdata("nip"); ?>" />
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Agenda</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="agenda" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Agenda</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="tgl_agenda" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Berita Acara</label>
                    <div class="col-sm-9">
                        <textarea type="text" rows="6" name="berita_acara" class="form-control"
                        readonly ></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Dokumen Pendukung</label>
                    <div class="col-sm-9">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
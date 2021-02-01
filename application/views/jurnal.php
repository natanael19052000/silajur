<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form Pengajuan Jurnal</h4>
            <p class="card-description"> Isikan data berikut untuk mengajukan jurnal </p>
            <form class="forms-sample">
                <div class="form-group">
                    <label for="exampleInputName1">Kegiatan</label>
                    <input type="text" class="form-control" name="kegiatan" placeholder="Nama/Judul Kegiatan" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Tanggal Kegiatan</label>
                    <input type="email" class="form-control" name="tgl_kegiatan"
                        placeholder="Tanggal Kegiatan Berlangsung" disabled>
                </div>
                <div class="form-group">
                    <label>File Proposal</label>
                    <input type="file" name="file_proposal" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled
                            placeholder="Upload File Proposal">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-info" type="button">Download</button>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label>File Jurnal</label>
                    <input type="file" name="file_proposal" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled
                            placeholder="Upload File Jurnal">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Pilih File</button>
                        </span>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
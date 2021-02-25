<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Silahkan Klik tombol Logout untuk Konfirmasi Keluar</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('Login/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Konfirmasi Modal-->
<div class="modal fade" id="konfirmasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfimasi</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    Silahkan Klik tombol <strong>SETUJU</strong> apabila menyetujui Proposal
                    & <strong>TOLAK</strong> Apabila tidak menyetujui
                </div>
                <span class="float-right mt-3 mb-2">
                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#konfirmasiModal">
                        <strong>
                            SETUJU
                        </strong>
                    </a>
                </span>
                <span class="float-left mt-3 mb-2">
                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#tolakModal">
                        <strong>
                            TOLAK!!
                        </strong>
                    </a>
                </span>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Tolak Modal-->
<div class="modal fade" id="tolakModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Catatan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
            Jika ada catatan silahkan isi data berikut
                <form action="Proposal/tolak">
                    <div class="form-group">
                        <label class="col-form-label">Catatan :</label>
                        
                            <textarea type="text" rows="4" name="catatan" class="form-control"></textarea>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('Login/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>
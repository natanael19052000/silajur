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
                <button class="btn btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="<?= base_url('Login/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------------------------------------------------------------------------------>
<!-- Tanggungan -->
<div class="modal fade" id="tanggunganModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfimasi</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda Ingin Meminta data Tanggung Jawab?
                <form action="<?= base_url('Jurnal/tanggungan') ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $Proposal->id_proposal ?>" name="id_proposal" />
                    <input type="hidden" value="Pending" name="tanggungan" />
                    <div class="form-group">
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="submit"><strong>Benar</strong></button>
                <button class="btn btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!------------------------------------------------------------------------------------------------------------------------->
<!-- PROPOSAL -->
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
                <form action="<?= base_url('Proposal/diterima') ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $Proposal->id_proposal ?>" name="id_proposal" />
                    <input type="hidden" value="<?= $Proposal->dok_proposal ?>" name="dok_proposal" />
                    <input type="hidden" value="1" name="status" />
                    <span class="float-right mt-3 mb-2">
                        <button class="btn btn-success" type="submit">
                            <strong>
                                SETUJU
                            </strong>
                        </button>
                    </span>
                </form>
                <span class="float-left mt-3 mb-2">
                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#tolakModal" data-dismiss="modal">
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
                <form action="<?= base_url('Proposal/catatan') ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $Proposal->id_proposal ?>" name="id_proposal" />
                    <input type="hidden" value="0" name="status" />
                    <div class="form-group">
                        <label class="col-form-label">Catatan :</label>
                        <textarea type="text" rows="4" name="catatan" class="form-control"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success">submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------>
<!-- JURNAL -->
<!-- Konfirmasi Modal-->
<div class="modal fade" id="konfirmasiJurnalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form action="<?= base_url('Jurnal/diterima') ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $Proposal->id_proposal ?>" name="id_proposal" />
                    <input type="hidden" value="1" name="status" />
                    <span class="float-right mt-3 mb-2">
                        <button class="btn btn-success" type="submit">
                            <strong>
                                SETUJU
                            </strong>
                        </button>
                    </span>
                </form>
                <span class="float-left mt-3 mb-2">
                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#tolakJurnalModal" data-dismiss="modal">
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
<div class="modal fade" id="tolakJurnalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form action="<?= base_url('Jurnal/catatan') ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $Proposal->id_proposal ?>" name="id_proposal" />
                    <input type="hidden" value="0" name="status" />
                    <div class="form-group">
                        <label class="col-form-label">Catatan :</label>
                        <textarea type="text" rows="4" name="catatan" class="form-control"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success">submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
<!-- Modal Tambah Nominatif -->
<div class="modal fade" id="nominatifModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Daftar Nominatif</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
            Isikan Data Berikut
            Pemberian entertaiment dan sejenisnya
            <form>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nomor</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="Nomor" placeholder="Masukkan Nomor">
                </div>
              </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Tanggal</label>
              <div class="col-sm-7">
                  <input type="date" class="form-control" name="tgl" placeholder="Pilih Tanggal">
                </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tempat</label>
                    <div class="col-sm-7">
                        <textarea type="text" rows="2" name="tmpt" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-7">
                        <textarea type="text" rows="5" name="almt" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jenis</label>
                    <div class="col-sm-7">
                        <textarea type="text" rows="5" name="jenis" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jumlah</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="jumlah" placeholder="Masukkan Jumlah">
                    </div>
                  </div>
                  Relasi Usaha yang diberikan entertaiment dan sejenisnya
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nama</label>
                      <div class="col-sm-7">
                          <textarea type="text" rows="1" name="nm_usaha" class="form-control"></textarea>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Posisi</label>
                      <div class="col-sm-7">
                          <textarea type="text" rows="1" name="posisi" class="form-control"></textarea>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nama Perusahaan</label>
                      <div class="col-sm-7">
                          <textarea type="text" rows="1" name="nm_perusahaan" class="form-control"></textarea>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Jenis Usaha</label>
                      <div class="col-sm-7">
                          <textarea type="text" rows="2" name="jn_usaha" class="form-control"></textarea>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Keterangan</label>
                      <div class="col-sm-7">
                          <textarea type="text" rows="5" name="ket" class="form-control"></textarea>
                      </div>
                  </div>
            <div class="modal-footer">
                <button class="btn btn-success">submit</button>
            </div>
            </form>
            </div>
            </div>
            </div>

</div>

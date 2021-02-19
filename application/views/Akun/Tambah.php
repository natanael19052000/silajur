<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form class="forms-sample" action="<?php echo base_url('Proposal/add') ?>" method="post"
                enctype="multipart/form-data">
                <div class="form-group">
                    <label>NIP</label>
                    <input type="text" class="form-control" name="nip" placeholder="Masukkan Nomor Induk Pegawai">
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="name" class="form-control" name="nama" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <select class="form-control" name="jabatan">
                        <option value="Direksi">Direksi</option>
                        <option value="Divisi Umum">Divisi Umum</option>
                        <option value="Divisi Keuangan">Divisi Keuangan</option>
                        <option value="Divisi IT">Divisi IT</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form class="forms-sample" action="<?php echo base_url('akun/update') ?>" method="post"
                enctype="multipart/form-data">
                <div class="form-group">
                    <label>NIP</label>
                    <input type="text" class="form-control" name="nip" readonly value="<?php echo $akun->nip ?>" />
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="name" class="form-control" name="nama" value="<?php echo $akun->nama ?>">
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <select name="jabatan" class="form-control">
                    <!-- SELECT JABATAN -->
                        <?php 
                        if ($akun->jabatan == "Direksi"){
                            echo "<option value='Direksi' selected  > Direksi </option>";
                            echo "<option value='Divisi Umum'       > Divisi Umum </option>";
                            echo "<option value='Divisi Keuangan'   > Divisi Keuangan </option>";
                            echo "<option value='Divisi IT'         > Divisi IT </option>";

                        }elseif ($akun->jabatan == 'Divisi Umum') {
                            echo "<option value='Direksi'               > Direksi </option>";
                            echo "<option value='Divisi Umum' selected  > Divisi Umum </option>";
                            echo "<option value='Divisi Keuangan'       > Divisi Keuangan </option>";
                            echo "<option value='Divisi IT'             > Divisi IT </option>";

                        }elseif ($akun->jabatan == 'Divisi Keuangan') {
                            echo "<option value='Direksi'                   > Direksi </option>";
                            echo "<option value='Divisi Umum'               > Divisi Umum </option>";
                            echo "<option value='Divisi Keuangan' selected  > Divisi Keuangan </option>";
                            echo "<option value='Divisi IT'                 > Divisi IT </option>";

                        }else{
                            echo "<option value='Direksi'               > Direksi </option>";
                            echo "<option value='Divisi Umum'           > Divisi Umum </option>";
                            echo "<option value='Divisi Keuangan'       > Divisi Keuangan </option>";
                            echo "<option value='Divisi IT' selected    > Divisi IT </option>";
                        }?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $akun->email ?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-success mr-2">Simpan</button>
                <button class="btn btn-light" type="reset">Reset</button>
            </form>
        </div>
    </div>
</div>
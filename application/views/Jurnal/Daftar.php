<div class="col-lg-12 grid-margin stretch-card">
    <div class="card mb-5">
        <div class="card-body">
            <h4 class="card-title">Daftar Proposal</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-hover data">
                    <thead>
                        <tr>
                            <th class="font-weight-bold"            > ID Proposal   </th>
                            <th class="font-weight-bold"            > Agenda        </th>
                            <th class="font-weight-bold text-center"> Tanggal Agenda</th>
                            <th class="font-weight-bold text-center"> Aksi          </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Menampilkan Data JURNAL
                        foreach ($Proposal as $Proposal) {
                            ?>
                            <tr>
                                <td><?= $Proposal->id_proposal ?></td>
                                <td><?= $Proposal->agenda ?></td>
                                <td align="center"><?= $Proposal->tgl_agenda ?></td>
                                <td align="center">
                                    <?php
                                    // Jika BELUM UPLOAD JURNAL maka keluar TOMBOL UPLOAD
                                    if ($Proposal->dok_jurnal == NULL) {
                                    ?>
                                        <a href="<?= base_url('Jurnal/detail/' . $Proposal->id_proposal); ?>" class="btn btn-primary btn-circle btn-sm">
                                            <i class="fas fa-upload"></i>
                                        </a>
                                    <?php
                                        // jika SUDAH ADA file JURNAL keluar TOMBOL CHECK
                                    } else { ?>
                                        <a href="<?= base_url('Jurnal/detail/' . $Proposal->id_proposal); ?>" class="btn btn-success btn-circle btn-sm">
                                            <i class="fas fa-check"></i>
                                        </a>
                                    <?php }
                                    // END ELSE
                                    ?>
                                </td>
                            </tr>
                        <?php }
                        // END IF 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
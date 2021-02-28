<div class="col-lg-12 grid-margin stretch-card">
    <div class="card mb-5">
        <div class="card-body">
            <h4 class="card-title">Daftar Jurnal</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-hover data">
                    <thead>
                        <tr>
                            <th class="font-weight-bold text-center"> ID Proposal </th>
                            <th class="font-weight-bold"> Pengaju </th>
                            <th class="font-weight-bold"> Agenda </th>
                            <th class="font-weight-bold text-center"> Tanggal Agenda </th>
                            <th class="font-weight-bold text-center"> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($Jurnal as $Jurnal) { ?>
                            <tr>
                                <td align="center"><?php echo $Jurnal->id_proposal ?></td>
                                <td><?php echo $Jurnal->tgl_agenda ?></td>
                                <td><?php echo $Jurnal->agenda ?></td>
                                <td align="center"><?php echo $Jurnal->record_tgl_jurnal ?></td>
                                <td align="center">
                                    <a href="<?= base_url('Laporan/detail/' . $Jurnal->id_proposal); ?>" class="btn btn-primary btn-sm" role="button">
                                        Detail
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
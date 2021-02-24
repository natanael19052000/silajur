<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Daftar Jurnal</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-hover data">
                    <thead>
                        <tr>
                            <th class="font-weight-bold text-center"> No. Jurnal </th>
                            <th class="font-weight-bold"> Agenda </th>
                            <th class="font-weight-bold text-center"> Satus </th>
                            <th class="font-weight-bold"> Tanggal Pengajuan </th>
                            <th class="font-weight-bold text-center"> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($Jurnal as $Jurnal) { ?>
                            <tr>
                                <td align="center"><?php echo $Jurnal->id_proposal ?></td>
                                <td><?php echo $Jurnal->agenda ?></td>
                                <td align="center">-</td>
                                <td><?php echo $Jurnal->record_tgl ?></td>
                                <td align="right">
                                    <a href="<?= base_url('Jurnal/detail/' . $Jurnal->id_proposal); ?>" 
                                    class="btn btn-outline-info btn-sm" role="button">
                                        Detail
                                    </a>
                                    <a href="<?= base_url('Jurnal/delete/' . $Jurnal->id_proposal); ?>" c
                                    lass="btn btn-outline-danger btn-sm" role="button">
                                        Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
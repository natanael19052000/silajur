<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Daftar Proposal</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-hover data">
                    <thead>
                        <tr>
                            <th class="font-weight-bold text-center"> ID Proposal </th>
                            <th class="font-weight-bold"> Agenda </th>
                            <th class="font-weight-bold text-center"> Status </th>
                            <th class="font-weight-bold"> Tanggal Pengajuan </th>
                            <th class="font-weight-bold text-center"> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($Proposal as $Proposal) { ?>
                            <tr>
                                <td align="center"><?php echo $Proposal->id_proposal ?></td>
                                <td><?php echo $Proposal->agenda ?></td>
                                <td align="center">-</td>
                                <td><?php echo $Proposal->record_tgl ?></td>
                                <td align="right">
                                    <a href="<?= base_url('Proposal/detail/' . $Proposal->id_proposal); ?>" 
                                    class="btn btn-outline-info btn-sm" role="button">
                                        Detail
                                    </a>
                                    <a href="<?= base_url('Proposal/delete/' . $Proposal->id_proposal); ?>" 
                                    class="btn btn-putline-danger btn-sm" role="button">
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
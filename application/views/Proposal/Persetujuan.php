<div class="col-lg-12 grid-margin stretch-card">
    <div class="card mb-5">
        <div class="card-body">
            <h4 class="card-title">Daftar Proposal</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-hover data">
                    <thead>
                        <tr>
                            <th class="font-weight-bold text-center"> ID Proposal </th>
                            <th class="font-weight-bold"> Pengaju </th>
                            <th class="font-weight-bold"> Agenda </th>
                            <th class="font-weight-bold"> Tanggal Pengajuan </th>
                            <th class="font-weight-bold text-center"> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($Proposal as $Proposal) { ?>
                            <tr>
                                <td align="center"><?php echo $Proposal->id_proposal ?></td>
                                <td><?php echo $Proposal->nama ?></td>
                                <td><?php echo $Proposal->agenda ?></td>
                                <td><?php echo $Proposal->record_tgl ?></td>
                                <td align="center">
                                    <?php
                                    if ($Proposal->status == "N/A") { ?>
                                        <a href="<?= base_url('Proposal/konfirmasi/' . $Proposal->id_proposal); ?>" class="btn btn-primary btn-sm" role="button">
                                            Konfirmasi
                                        </a>
                                    <?php } elseif ($Proposal->status == '1') { ?>
                                        <a href="<?= base_url('Proposal/konfirmasi/' . $Proposal->id_proposal); ?>" class="btn btn-success btn-circle btn-sm">
                                            <i class="fas fa-check"></i>
                                        </a>
                                    <?php } else { ?>
                                        <a href="<?= base_url('Proposal/konfirmasi/' . $Proposal->id_proposal); ?>" class="btn btn-danger btn-circle btn-sm">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
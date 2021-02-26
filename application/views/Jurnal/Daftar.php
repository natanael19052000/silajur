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
                            <th class="font-weight-bold"> Tanggal Agenda </th>
                            <th class="font-weight-bold text-center"> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($Proposal as $Proposal) { ?>
                            <tr>
                                <td align="center"><?php echo $Proposal->id_proposal ?></td>
                                <td><?php echo $Proposal->agenda ?></td>
                                <td><?php echo $Proposal->tgl_agenda ?></td>
                                <td align="center">
                                    <?php
                                    if ($Proposal->dok_jurnal == "N/A") { ?>
                                        <a href="<?= base_url('Jurnal/detail/' . $Proposal->id_proposal); ?>" 
                                        class="btn btn-primary btn-circle btn-sm">
                                            <i class="fas fa-upload"></i>
                                        </a>
                                    <?php } else { ?>
                                        <a href="<?= base_url('Jurnal/detail/' . $Proposal->id_proposal); ?>" 
                                        class="btn btn-success btn-circle btn-sm">
                                            <i class="fas fa-check"></i>
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
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a style="float:right;" class="btn btn-sm btn-danger btn-icon-text"
                href="<?php echo base_url('akun/tambah')?>">
                <i class=" icon-user-follow btn-icon-prepend"></i>
                Akun Baru
            </a>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="font-weight-bold"> # </th>
                            <th class="font-weight-bold"> NIP </th>
                            <th class="font-weight-bold"> Nama </th>
                            <th class="font-weight-bold"> Email </th>
                            <th class="font-weight-bold"> Jabatan </th>
                            <th class="font-weight-bold"> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                $i=1;
                foreach ($akun as $akun) { ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $akun->nip ?></td>
                            <td><?php echo $akun->nama ?></td>
                            <td><?php echo $akun->email ?></td>
                            <td><?php echo $akun->jabatan ?></td>
                            <td>
                                <a href="<?php echo site_url('akun/edit/'.$akun->nip);?>" class="btn btn-info btn-sm"
                                    role="button">
                                    Edit
                                </a>
                                <a href="<?php echo site_url('akun/delete/'.$akun->nip);?>"
                                    class="btn btn-danger btn-sm" role="button">
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
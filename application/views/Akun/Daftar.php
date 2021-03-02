<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered data" id="dataTable" width="100%" cellspacing="0">
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
                    <!-- Mnampilkan Data Akun -->
                    <?php
                    $i = 1;
                    foreach ($akun as $akun) { ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $akun->nip ?></td>
                            <td><?= $akun->nama ?></td>
                            <td><?= $akun->email ?></td>
                            <td><?= $akun->jabatan ?></td>
                            <td>
                                <a href="<?= base_url('Akun/edit/' . $akun->nip); ?>" class="btn btn-info btn-sm" role="button">
                                    Edit
                                </a>
                                <a href="<?= base_url('Akun/delete/' . $akun->nip); ?>" class="btn btn-danger btn-sm" role="button">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>
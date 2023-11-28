<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Anggota</h3>
        <br>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <?php $no = 1;
            foreach ($user as $key => $anggota) {
                    # code...
                ; ?>
                <tbody>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $anggota->username; ?></td>
                        <td><?= $anggota->lvl; ?></td>
                        <td>
                            <a href="<?= base_url('petugas/hapus/' . $anggota->id_user) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini')"><i class="fas fa-trash"></i></a>

                        </td>
                    </tr>
                <tbody>
                <?php }; ?>
        </table>
    </div>
</div>
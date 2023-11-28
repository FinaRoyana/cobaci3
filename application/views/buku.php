<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Anggota</h3>
        <br>
        <a href="<?= base_url('buku/tambah_buku') ?>" class="btn btn-success btn-sm"><i class="fas fa-plus"></i>Tambah Anggota</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <?php $no = 1;
            foreach ($tbuku as $key => $tbuku) {
                    # code...
                ; ?>
                <tbody>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $tbuku->judul_buku; ?></td>
                        <td><?= $tbuku->penulis_buku; ?></td>
                        <td><?= $tbuku->penerbit_buku; ?></td>
                        <td>
                            <a href="<?= base_url('buku/hapus/' . $tbuku->id_buku) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <tbody>
                <?php }; ?>
        </table>
    </div>
</div>
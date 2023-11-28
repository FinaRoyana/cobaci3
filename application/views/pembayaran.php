<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Anggota</h3>
        <br>
        <a href="<?= base_url('pembayaran/tambah') ?>" class="btn btn-success btn-sm"><i class="fas fa-plus"></i>Tambah Pembayaran</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Kelas</th>
                    <th>Tanggal Bayar</th>
                    <th>Nominal</th>
                    <th>Total Bayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <?php $no = 1;
            foreach ($siswa as $key => $anggota) {
                    # code...
                ; ?>
                <tbody>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $anggota->nama_anggota; ?></td>
                        <td><?= $anggota->nama_kelas; ?></td>
                        <td><?= $anggota->tgl_bayar; ?></td>
                        <td><?= $anggota->nominal; ?></td>
                        <td><?= $anggota->bayar; ?></td>
                        <td>

                            <a href="<?= base_url('pembayaran/hapus/' . $anggota->id_pembayaran) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <tbody>
                <?php }; ?>
        </table>
    </div>
</div>
<!-- /.card-body -->
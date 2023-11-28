<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Anggota</h3>
        <br>
        <a href="<?= base_url('siswa/tambah_anggota') ?>" class="btn btn-success btn-sm"><i class="fas fa-plus"></i>Tambah Anggota</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Anggota</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Nama Kelas</th>
                    <th>Jenis Kelamin</th>
                    <th>Nomer Telepon</th>
                    <th>Jurusan</th>
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
                        <td><?= $anggota->kd_anggota; ?></td>
                        <td><?= $anggota->nama_anggota; ?></td>
                        <td><?= $anggota->kelas; ?></td>
                        <td><?= $anggota->nama_kelas; ?></td>
                        <td><?= $anggota->jk_anggota; ?></td>
                        <td><?= $anggota->no_telp_anggota; ?></td>
                        <td><?= $anggota->jurusan_anggota; ?></td>
                        <td>
                            <a href="<?= base_url('siswa/hapus/' . $anggota->id_anggota) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini')"><i class="fas fa-trash"></i></a>
                            <button data-toggle="modal" data-target="#edit<?= $anggota->id_anggota ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit Data Siswa</button>
                            <a href="<?= base_url('siswa/edit_data/' . $anggota->id_anggota) ?>" class="btn btn-danger btn-sm" </i>Edit Anggota</a>
                            <!--  <button <a href="<? base_url('siswa/edit_data/' . $anggota->id_anggota) ?>" class=" btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit Data Siswa</a></button> -->
                        </td>
                    </tr>
                <tbody>
                <?php }; ?>
        </table>
    </div>
</div>
<!-- /.card-body -->

<?php foreach ($siswa as $anggota) {; ?>
    <div class="modal fade" id="edit<?= $anggota->id_anggota ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('siswa/edit/' . $anggota->id_anggota) ?>" method="post">
                        <div class="mb-3">
                            <label>Kode Anggota</label>
                            <input type="text" name="kd_anggota" class="form-control" value="<?= $anggota->kd_anggota ?>" required>
                            <?= form_error('kd_anggota', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class=" mb-3">
                            <label for="namaAnggota" class="form-label">Nama Anggota</label>
                            <input type="text" name="nama_anggota" class="form-control" value="<?= $anggota->nama_anggota ?>" required>
                            <?= form_error('nama_anggota', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input type="text" name="kelas" class="form-control" id="kelas" value="<?= $anggota->kelas ?>" required>
                            <?= form_error('kelas', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select name="nama_kelas" class="form-control">
                                <option value="">--Pilih Kelas--</option>
                                <?php foreach ($kelas as $key => $value) { ?>
                                    <option value="<?= $value->nama_kelas ?>"><?= $value->nama_kelas ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jkAnggota" class="form-label">Jenis Kelamin</label>
                            <input type="text" name="jk_anggota" class="form-control" value="<?= $anggota->jk_anggota ?>" required>
                            <?= form_error('jk_anggota', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="jurusanAnggota" class="form-label">Jurusan</label>
                            <input type="text" name="jurusan_anggota" class="form-control" id="jurusan_anggota" value="<?= $anggota->jurusan_anggota ?>" required>
                            <?= form_error('jurusan_anggota', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="noHp" class="form-label">No Telepon</label>
                            <input type="text" name="no_telp_anggota" class="form-control" id="no_telp_anggota" value="<?= $anggota->no_telp_anggota ?>" required>
                            <?= form_error('no_telp_anggota', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" <i class="fas fa-trash"></i>Reset</button>
                            <button type="submit" class="btn btn-primary" <i class="fas fa-save"></i>Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php }; ?>
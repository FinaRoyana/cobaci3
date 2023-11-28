<div class="mb-3">
    <?php foreach ($siswa as $anggota) {; ?>
        <form action="<?= base_url() . 'siswa/update_edit_data/' . $anggota->id_anggota; ?>" method="post">
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
    <?php }; ?>
</div>
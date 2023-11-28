<form action="<?= base_url('siswa/tambah') ?>" method="POST">
    <?php
    if ($this->session->flashdata('pesan')) {
        echo '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5><i class="icon fas fa-check"></i>';
        echo $this->session->flashdata('pesan');
        echo '</h5></div>';
    }


    ?>
    <form>
        <div class="mb-3">
            <label for="kodeAnggota" class="form-label">Kode Anggota</label>
            <input type="text" name="kd_anggota" class="form-control" placeholder="cth: kd-a-..." required>
            <?= form_error('kd_anggota', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="mb-3">
            <label for="namaAnggota" class="form-label">Nama Anggota</label>
            <input type="text" name="nama_anggota" class="form-control" placeholder="Masukan Nama Anggota" required>
            <?= form_error('nama_anggota', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Masukan kelas anggota">
            <?= form_error('kelas', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select name="id_kelas" class="form-control">
                <option value="">--Pilih Kelas--</option>
                <?php foreach ($siswa as $key => $value) { ?>
                    <option value="<?= $value->id_kelas ?>"><?= $value->nama_kelas ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="jkAnggota" class="form-label">Jenis Kelamin</label>
            <input type="text" name="jk_anggota" class="form-control" placeholder="Masukan Jenis Kelamin, cth: L/P" required>
            <?= form_error('jk_anggota', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="mb-3">
            <label for="jurusanAnggota" class="form-label">Jurusan</label>
            <input type="text" name="jurusan_anggota" class="form-control" id="jurusan_anggota" placeholder="Masukan jurusan anggota">
            <?= form_error('jurusan_anggota', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="mb-3">
            <label for="noHp" class="form-label">No Telepon</label>
            <input type="text" name="no_telp_anggota" class="form-control" id="no_telp_anggota" placeholder="Masukan nomer telefon">
            <?= form_error('no_telp_anggota', '<div class="text-small text-danger">', '</div>'); ?>
        </div>

        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Submit</button>
        <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
    </form>

</form>
<form action="<?= base_url('pembayaran/aksi_tambah') ?>" method="POST">
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
            <label for="namaanggota" class="form-label">Nama Anggota</label>
            <select name="id_anggota" class="form-control">
                <option value="">-- Pilih Nama --</option>
                <?php foreach ($anggota as $key => $value) { ?>
                    <option value="<?= $value->id_anggota ?>"><?= $value->nama_anggota ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select name="id_kelas" class="form-control">
                <option value="">-- Pilih Kelas --</option>
                <?php foreach ($kelas as $key => $value) { ?>
                    <option value="<?= $value->id_kelas ?>"><?= $value->nama_kelas ?></option>
                <?php } ?>
            </select>

        </div>
        <div class="mb-3">
            <label for="tanggalbayar" class="form-label">Tanggal Bayar</label>
            <input type="date" name="tgl_bayar" class="form-control" placeholder="Tanggal Bayar" required>

        </div>
        <div class="nominal">
            <label for="nominal" class="form-label">Nominal</label>
            <input type="text" name="nominal" class="form-control" value="100.000" id=" jurusan_anggota" placeholder="Berapa nominal">
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total Bayar</label>
            <input type="text" name="bayar" class="form-control" id="no_telp_anggota" placeholder="Masukan total bayar">
        </div>
        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Submit</button>
        <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>



    </form>

</form>
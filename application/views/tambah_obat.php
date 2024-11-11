<form action="<?= base_url('obat/tambah_aksi') ?>" method="POST">
    <div class="form-group">
        <label for="nama_obat">Nama Obat</label>
        <input type="text" name="nama_obat" id="nama_obat" class="form-control">
        <?= form_error('nama_obat', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="harga_obat">Harga Obat</label>
        <input type="number" name="harga_obat" id="harga_obat" class="form-control">
        <?= form_error('harga_obat', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="stok_obat">Stok Obat</label>
        <input type="number" name="stok_obat" id="stok_obat" class="form-control">
        <?= form_error('stok_obat', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label for="expire_obat">Expire Obat</label>
        <input type="date" name="expire_obat" id="expire_obat" class="form-control">
        <?= form_error('expire_obat', '<div class="text-small text-danger">', '</div>'); ?>
    </div>

    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Riset</button>
</form>
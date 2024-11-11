<?= $this->session->flashdata('pesan'); ?>

<div class="card">
  <div class="card-header d-flex">
    <h3 class="card-title">Data Table Obat</h3>
    <a href="<?= base_url('obat/tambah') ?>" class="btn btn-sm btn-primary ml-auto"><i class="fa fa-plus"></i> Tambah Data Obat</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped text-center">
      <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Expire</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <?php $no = 1; foreach ($obat as $o): ?>
      <tbody>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $o->nama_obat; ?></td>
        <td><?= $o->harga_obat; ?></td>
        <td><?= $o->stok_obat; ?></td>
        <td><?= $o->expire_obat; ?></td>
        <td>
          <button data-toggle="modal" data-target="#edit<?= $o->id; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
          <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
        </td>
      </tr>
      </tbody>
      <?php endforeach ?>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

<!-- Modal Edit -->
<?php foreach($obat as $o): ?>
<div class="modal fade" id="edit<?= $o->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Obat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('obat/edit/' . $o->id) ?>" method="POST">
          <div class="form-group">
              <label for="nama_obat">Nama Obat</label>
              <input type="text" name="nama_obat" id="nama_obat" class="form-control" value="<?= $o->nama_obat; ?>">
              <?= form_error('nama_obat', '<div class="text-small text-danger">', '</div>'); ?>
          </div>
          <div class="form-group">
              <label for="harga_obat">Harga Obat</label>
              <input type="number" name="harga_obat" id="harga_obat" class="form-control" value="<?= $o->harga_obat; ?>">
              <?= form_error('harga_obat', '<div class="text-small text-danger">', '</div>'); ?>
          </div>
          <div class="form-group">
              <label for="stok_obat">Stok Obat</label>
              <input type="number" name="stok_obat" id="stok_obat" class="form-control" value="<?= $o->stok_obat; ?>">
              <?= form_error('stok_obat', '<div class="text-small text-danger">', '</div>'); ?>
          </div>
          <div class="form-group">
              <label for="expire_obat">Expire Obat</label>
              <input type="date" name="expire_obat" id="expire_obat" class="form-control" value="<?= $o->expire_obat; ?>">
              <?= form_error('expire_obat', '<div class="text-small text-danger">', '</div>'); ?>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save"></i> Simpan</button>
            <button type="reset" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Riset</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>
<div class="card">
  <div class="card-header d-flex">
    <h3 class="card-title">DataTable Obat</h3>
    <a href="<?= base_url('obat/tambah') ?>" class="btn btn-sm btn-success ml-auto"><i class="fa fa-plus"></i>Tambah Data Obat</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
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
        <td><?= $o->nama; ?></td>
        <td><?= $o->harga; ?></td>
        <td><?= $o->stok; ?></td>
        <td><?= $o->exp; ?></td>
        <td>
          <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
          <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
        </td>
      </tr>
      </tbody>
      <?php endforeach ?>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
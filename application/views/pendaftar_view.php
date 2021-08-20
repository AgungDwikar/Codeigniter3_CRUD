<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pendaftar</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body>
  <div class="container">
    <h1><?php echo $judul; ?></h1>
    <a href="<?php echo site_url('pendaftar/btn_tambah'); ?>" class="btn btn-info">Tambah</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Email</th>
          <th>Umur</th>
          <th>Judul</th>
          <th>pemrakarsa</th>
          <th>Penganggung Jawab</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($pendaftar->result() as $row) : ?>
          <tr>
            <th><?php echo $row->nama; ?></th>
            <th><?php echo $row->email; ?></th>
            <th><?php echo $row->umur; ?></th>
            <th><?php echo $row->judul; ?></th>
            <th><?php echo $row->pemrakarsa; ?></th>
            <th><?php echo $row->penanggung_jawab; ?></th>
            <td><a href="<?php echo site_url('pendaftar/get_ubah/' . $row->id); ?>" class="btn btn-warning">Ubah</a>
              <a href="<?php echo site_url('pendaftar/delete/' . $row->id); ?>" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</body>

</html>
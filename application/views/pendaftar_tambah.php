<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Pendaftar</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body>
  <div class="container">
    <h2>Tambah Pendaftar</h2>
    <div class="col-md-12">
      <form action="<?php echo site_url('pendaftar/tambah') ?>" method="POST">
        <div class="form-group">
          <label>Nama</label>
          <input type="text" class="form-control" name="nama" placeholder="masukkan nama">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" name="email" placeholder="masukkan email">
        </div>
        <div class="form-group">
          <label>Judul</label>
          <input type="text" class="form-control" name="judul" placeholder="masukkan judul">
        </div>
        <div class="form-group">
          <label>Umur</label>
          <input type="text" class="form-control" name="umur" placeholder="masukkan umur">
        </div>
        <div class="form-group">
          <label>Pemrakarsa</label>
          <input type="text" class="form-control" name="pemrakarsa" placeholder="masukkan pemrakarsa">
        </div>
        <div class="form-group">
          <label>Penanggung Jawab</label>
          <input type="text" class="form-control" name="penanggung_jawab" placeholder="masukkan PJ">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>

</body>

</html>
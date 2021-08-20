<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Pendaftar</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body>
  <div class="container">
    <h2>Ubah Pendaftar</h2>
    <div class="col-md-12">
      <form action="<?php echo site_url('pendaftar/ubah') ?>" method="POST">
        <div class="form-group">
          <label>Nama</label>
          <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>" placeholder="masukkan nama">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" name="email" value="<?php echo $email ?>" placeholder="masukkan email">
        </div>
        <div class="form-group">
          <label>Judul</label>
          <input type="text" class="form-control" name="judul" value="<?php echo $judul ?>" placeholder="masukkan judul">
        </div>
        <div class="form-group">
          <label>Umur</label>
          <input type="text" class="form-control" name="umur" value="<?php echo $umur ?>" placeholder="masukkan umur">
        </div>
        <div class="form-group">
          <label>Pemrakarsa</label>
          <input type="text" class="form-control" name="pemrakarsa" value="<?php echo $pemrakarsa ?>" placeholder="masukkan pemrakarsa">
        </div>

        <div class="form-group">
          <label>Penanggung Jawab</label>
          <input type="text" class="form-control" name="penanggung_jawab" value="<?php echo $penanggung_jawab ?>" placeholder="masukkan PJ">
        </div>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>

</body>

</html>
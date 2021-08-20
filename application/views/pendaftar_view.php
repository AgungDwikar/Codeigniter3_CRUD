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
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Email</th>
          <th>Umur</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($pendaftar->result() as $row) : ?>
          <tr>
            <th><?php echo $row->nama; ?></th>
            <th><?php echo $row->email; ?></th>
            <th><?php echo $row->umur; ?></th>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</body>

</html>
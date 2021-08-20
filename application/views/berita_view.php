<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ini Berita</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body>
  <div class="container">
    <h1>Ini Berita <?php echo $judul; ?></h1>
    <table class="table table-striped">
      <thead>
        <tr>

          <th><?php echo $judul; ?></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th><?php echo $isi; ?></th>
        </tr>
      </tbody>
    </table>
  </div>

</body>

</html>
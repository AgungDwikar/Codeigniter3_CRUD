<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>instansi</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');  ?>">
</head>
<body>
    <div class="container">
        <h1><?php echo $judul; ?></h1>
        <a href="<?php echo site_url('instansi/btn_tambah'); ?>" class="btn btn-info">Tambah</a>
        <div class="row mt-3">
        <div class="col-md-4">
                <form action="" method="POST">
                         <div class="input-group mb-3">
                                 <input type="text" class="form-control" placeholder="Cari Data Instansi" name="keyword">
                                 <button class="btn btn-primary" type="submit" >Cari</button>
                            </div>
                </form>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Instansi id</th>
                    <th>Instansi Nama</th>
                    <th>Instansi Jenis id</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($instansi->result() as $row) : ?>
                    <tr>
                                <th><?php echo $row->instansi_id; ?></th>
                                <th><?php echo $row->instansi_nama; ?></th>
                                <th><?php echo $row->instansi_jenis_id; ?></th>
                                <td>
                                <a href="<?php echo site_url('instansi/get_ubah/' . $row->instansi_id); ?>" class="btn btn-warning" >Ubah</a>
                                <a href="<?php echo site_url('instansi/delete/' . $row->instansi_id); ?>" class="btn btn-danger" >Hapus</a>    
                            </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
        </table>
        </div>
    </div>
    
</body>
</html>
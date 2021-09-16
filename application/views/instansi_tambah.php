<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form tambah</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
    <div class="container">
    <h2>form tambah</h2>
    <div class="row mt-3">
        <div class="col-md-12">
        <div class="card">
        <div class="card-header">
                tambah data instansi
        </div>
        <div class="card-body">
            <form action="<?php echo site_url('instansi/tambah') ?>" method="POST">
                <div class="form-group">
                    <label >instansi nama</label>
                    <input type="text" class="form-control" name="instansi_nama" placeholder="masukan nama instansi">
                </div>
                <div class="form-group">
                    <label >instansi jenis id</label>
                    <input type="text" class="form-control" name="instansi_jenis_id" placeholder="masukan jenis id">
                </div>
                <button type="submit" class="btn btn-primary">simpan</button>
                
        </form>
        </div>
        </div>
        </div>
    </div>
    </div>
    
</body>
</html>
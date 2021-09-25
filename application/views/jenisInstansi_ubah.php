<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body>
    <div class="container">
        <h2> ubah instansi</h2>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Ubah data instansi
                    </div>
                    <div class="card-body">
                        <form action="<?php echo site_url('jenis_instansi/ubah') ?>" method="POST">
                            <div class="form-group">
                                <label>instansi nama</label>
                                <input type="text" class="form-control" name="jenis_nama" value="<?php echo $jenis_nama ?>"="masukan nama instansi">
                            </div>
                            <div class="form-group">
                                <label>instansi jenis id</label>
                                <input type="text" class="form-control" name="jenis_desk" value="<?php echo $jenis_desk ?>" placeholder="masukan jenis id">
                            </div>
                            <input type="hidden" name="jenis_id" value="<?php echo $jenis_id ?>">
                            <button type="submit" class="btn btn-primary">simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
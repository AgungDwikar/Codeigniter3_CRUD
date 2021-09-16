<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>instansi</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');  ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.dataTables.min.css'); ?>">
    <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>">
    </script>
</head>

<body>
    <div class="container">
        <h1><?php echo $judul; ?></h1>
        <!-- <a href="<?php echo site_url('instansi/btn_tambah'); ?>" class="btn btn-info">Tambah</a> -->
        <div class="pull-right"><a class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_tambah"> Tambah Data</a></div>
        <div class="row mt-3">
            <div class="col-md-4">
                <form action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Data Instansi" name="keyword">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>
        <table id="table2" class="table table-bordered table-hover">
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
                $no;
                foreach ($instansi->result() as $row) : ?>
                    <tr>
                        <th><?php echo $row->instansi_id; ?></th>
                        <th><?php echo $row->instansi_nama; ?></th>
                        <th><?php echo $row->instansi_jenis_id; ?></th>
                        <td>
                            <a href="<?php echo site_url('instansi/get_ubah/' . $row->instansi_id); ?>" class="btn btn-warning">Ubah</a>
                            <!-- <a href="<?php echo site_url('instansi/delete/' . $row->instansi_id); ?>" class="btn btn-danger">Hapus</a> -->
                            <a data-toggle="modal" data-target="#modal_delete<?php echo $row->instansi_id ?>" class="btn btn-danger" title="Hapus">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php foreach ($instansi->result() as $row) : ?>
            <div id="modal_delete<?php echo $row->instansi_id ?>" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4>Apakah Anda Yakin Akan Menghapus Data <?php echo $row->instansi_nama ?> ?</h4>
                        </div>

                        <div class="modal-body">
                            <a class="btn btn-danger" href="<?php echo site_url('instansi/delete/' . $row->instansi_id); ?>" role="button">Hapus</a>
                        </div>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h3 class="modal-title" id="myModalLabel">Add New Instansi</h3>
                    </div>

                    <div class="card-body">
                        <form action="<?php echo site_url('instansi/tambah') ?>" method="POST">
                            <div class="form-group">
                                <label>instansi nama</label>
                                <input type="text" class="form-control" name="instansi_nama" placeholder="masukan nama instansi">
                            </div>
                            <div class="form-group">
                                <label>instansi jenis id</label>
                                <input type="text" class="form-control" name="instansi_jenis_id" placeholder="masukan jenis id">
                            </div>
                            <button type="submit" class="btn btn-primary">simpan</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

</body>

</html>
<script>
    $(document).ready(function() {
        // $('#table2').DataTable({
        //     'paging': true,
        //     'lengthChange': false,
        //     'searching': true,
        //     'ordering': true,
        //     'info': true,
        //     'autoWidth': true,
        //     "aaSorting": []
        // });
        var t = $('#table2').DataTable({
            "columnDefs": [{
                "searchable": false,
                "orderable": false,
                "targets": 0
            }],
            "language": {
                "search": "Pencarian",
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Maaf, data tidak ditemukan.",
                "info": "Tampilkan _PAGE_ dari _PAGES_ halaman",
                "infoEmpty": "Maaf, data kosong.",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "paginate": {
                    "previous": "Sebelumnya",
                    "next": "Selanjutnya"
                }
            },
            initComplete: function() {
                var input = $('.dataTables_filter input').unbind(),
                    self = this.api(),
                    $searchButton = $('<button>')
                    .text('Cari')
                    .click(function() {
                        self.search(input.val()).draw();
                    }),
                    $clearButton = $('<button>')
                    .text('Hapus')
                    .click(function() {
                        input.val('');
                        $searchButton.click();
                    })
                $('.dataTables_filter').append($searchButton, $clearButton);
            },
            // "order": [
            //     [1, 'asc']
            // ]
        });

        t.on('order.dt search.dt', function() {
            t.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function(cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();

    })
</script>
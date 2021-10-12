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
  <div class="col-md-6">
    <form class="form-horizontal">
      <div class="form-group">
        <label>Jenis Instansi</label>
        <div class="col-md-9">
          <select name="jenis_instansi" id="jenis_instansi" class="form-control">
            <option value="0"> Pilih Jenis Instansi</option>
            <?php foreach ($jenis->result() as $row) : ?>
              <option value="<?php echo $row->jenis_id; ?>"><?php echo $row->jenis_nama; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label>Instansi</label>
        <div class="col-md-9">
          <select name="instansi" class="instansi form-control">
            <option value="0">Pilih Instansi</option>
          </select>
        </div>
      </div>
    </form>
  </div>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#jenis_instansi').change(function() {
        var id = $(this).val();
        $.ajax({
          url: "<?php echo base_url(); ?>form/get_instansi",
          method: "POST",
          data: {
            id: id
          },
          async: false,
          dataType: 'json',
          success: function(data) {
            var html = '';
            var i;
            for (i = 0; i < data.length; i++) {
              html += '<option>' + data[i].instansi_nama + '</option>'
            }
            $('.instansi').html(html);
          }
        });
      });
    });
  </script>
</body>

</html>
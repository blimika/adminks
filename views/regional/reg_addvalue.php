<div class="row">
<div class="col-md-6">
          <!-- Horizontal Form -->
<div class="box box-info">
<div class="box-header with-border">
<h3 class="box-title">Tambah Value</h3>
</div>
<!-- /.box-header -->
<!-- form start -->
<form class="form-horizontal" action="<?php echo $app_url.'/'.$page.'/savevalue/'; ?>" method="post" role="form">
<div class="box-body">
<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">Variabel</label>
<div class="col-sm-10" >
<input type="text" name="value_var" class="form-control" id="inputNama" placeholder="Waktu" value="<?php echo get_reg_namavar($lvl3);?>" disabled="">
</div>
</div>
<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">Wilayah</label>
<div class="col-sm-6">
<input type="text" name="value_wilayah" class="form-control" id="inputNama" placeholder="Waktu" required="">
</div>
</div>
<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">Nilai</label>
<div class="col-sm-6">
<input type="text" name="value_nilai" class="form-control" id="inputNama" placeholder="Nilai" required="">
</div>
</div>
  <div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Posisi</label>
  <div class="col-sm-4">
  <input type="number" name="value_posisi" class="form-control" id="inputPosisi" placeholder="Posisi" required="">
  </div>
  </div>
</div>
<!-- /.box-body -->
<div class="box-footer">
<button type="reset" class="btn btn-default">Reset</button>
<button type="submit" name="submit" value="simpanvalue" class="btn btn-info pull-right">Simpan</button>
</div>
<!-- /.box-footer -->
<input type="hidden" name="value_var_id" value="<?php echo $lvl3; ?>" />
</form>
</div>
<!-- /.box -->
</div>
</div>
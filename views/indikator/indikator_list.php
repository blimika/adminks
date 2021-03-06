<div class="row">
<div class="col-md-10">
          <div class="box box-solid box-success">
            <div class="box-header">
              <h3 class="box-title">Variabel Indikator Strategis</h3> <span class="pull-right"><button class="btn btn-xs btn-success" data-widget="collapse"><i class="fa fa-minus"></i></button> <a href="<?php echo $app_url.'/'.$page.'/addvar/'.$lvl3; ?>" class="btn btn-flat btn-xs btn-warning"><i class="fa fa-plus" aria-hidden="true"></i></a></span>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding table-responsive">
              <table class="table table-striped">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Ket</th>
                  <th>Pos</th>
                  <th>Strategis</th>
                  <th style="width: 100px">Aksi</th>
                </tr>
                <?php
                $r_var=list_variabel_strategis();
                if ($r_var["error"]==false) {
						$i=1;
						$max_var=$r_var["tema_var_total"];
						for ($i=1;$i<=$max_var;$i++) {
							echo '
							<tr>
								<td>'.$i.'</td>
								<td>'.$r_var["item"][$i]["tema_var_nama"].'</td>
								<td>'.$r_var["item"][$i]["tema_var_kat_nama"].'</td>
								<td>'.$r_var["item"][$i]["tema_var_ket"].'</td>
								<td>'.$r_var["item"][$i]["tema_var_posisi"].'</td>
								<td>'.$r_var["item"][$i]["tema_var_indikator"].'</td>
								<td><div class="text-center"><a href="'.$app_url.'/'.$page.'/view/'.$r_var["item"][$i]["tema_var_kat_id"].'/'.$r_var["item"][$i]["tema_var_id"].'" class="btn btn-xs btn-warning"><i class="fa fa-search" aria-hidden="true"></i></a> 
								<a href="'.$app_url.'/ragam/editvar/'.$r_var["item"][$i]["tema_var_kat_id"].'/'.$r_var["item"][$i]["tema_var_id"].'" class="btn btn-xs btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
								<a href="'.$app_url.'/ragam/hapusvar/'.$lvl3.'/'.$r_var["item"][$i]["tema_var_id"].'" class="btn btn-xs btn-danger" data-confirm="Apakah data variabel ini akan di hapus?"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>
								</td>
							</tr>
						';	
						}
						
					}
					else {
						echo '
						<tr>
						<td colspan="4"><p class="text-center">'.$r_var["pesan_error"].'</p></td>
						</tr>
						';
					}
                ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
</div>
</div>
<div class="row">
<div class="col-md-10">
 <?php if ($lvl4 != "") { 
          	$var_id=$lvl4;
			if (cek_varID($var_id)==FALSE) {
			     $var_nama="Variabel ID ini tidak ada";
			 }
			else {
			  $var_edit=get_ragam_variabel($var_id);
			  $var_nama=$var_edit["var_nama"];
			  $var_satuan=$var_edit["var_satuan"];
			  $var_ket=$var_edit["var_ket"];
			  $var_kat_id=$var_edit["var_kat_id"];
			  $var_posisi=$var_edit["var_posisi"];
			  $nama_kategori=get_nama_kategori($var_kat_id);
			  $page="ragam";
			}
          	?>
          <div class="box box-solid box-warning">
            <div class="box-header">
              <h3 class="box-title">Value</h3> <span class="pull-right"><a href="<?php echo $app_url.'/'.$page.'/imporvalue/'.$lvl3.'/'.$lvl4; ?>" class="btn btn-flat btn-xs btn-success">Impor Excel</a> <a href="<?php echo $app_url.'/'.$page.'/addvalue/'.$lvl3.'/'.$lvl4; ?>" class="btn btn-flat btn-xs btn-success"><i class="fa fa-plus" aria-hidden="true"></i></a></span>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Kategori</th>
                  <th>Variabel</th>
                  <th>Waktu</th>
                  <th>Nilai</th>
                  <th>Posisi</th>
                  <th style="width: 100px">Aksi</th>
                </tr>
                <?php
                $r_var_value=list_variabel_value($lvl4);
                if ($r_var_value["error"]==false) {
						$i=1;
						$max_var_value=$r_var_value["var_value_total"];
						for ($i=1;$i<=$max_var_value;$i++) {
							echo '
							<tr>
								<td>'.$i.'</td>
								<td>'.$nama_kategori.'</td>
								<td>'.$r_var_value["item"][$i]["var_value_nama"].'</td>
								<td>'.$r_var_value["item"][$i]["var_value_waktu"].'</td>
								<td>'.$r_var_value["item"][$i]["var_value_nilai"].'</td>
								<td>'.$r_var_value["item"][$i]["var_value_posisi"].'</td>
								<td><div class="text-center">
								<a href="'.$app_url.'/'.$page.'/editvalue/'.$lvl3.'/'.$lvl4.'/'.urlencode($r_var_value["item"][$i]["var_value_waktu"]).'" class="btn btn-xs btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
								<a href="'.$app_url.'/'.$page.'/hapusvalue/'.$lvl3.'/'.$lvl4.'/'.urlencode($r_var_value["item"][$i]["var_value_waktu"]).'" class="btn btn-xs btn-danger" data-confirm="Apakah data value ini akan di hapus?"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>
								</td>
							</tr>
						';	
						}
						
					}
					else {
						echo '
						<tr>
						<td colspan="4">'.$r_var_value["pesan_error"].'</td>
						</tr>
						';
					}
                ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box value view-->
          <?php } ?>
</div>
</div>
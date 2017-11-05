<?php
  include('v_header.php');
  include('v_sidebar.php');
?>
<!-- page content -->
<div class="right_col" role="main">
    
    <div class="clearfix"></div>
    
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                
                <div class="x_title">
                    
                    <h2>Input Sertifikat</h2>
                    <div class="clearfix"></div>
                
                </div>
                
                <div class="x_content">
                <?php echo form_open_multipart(base_url('pegawai/edit_pelatihan/'.$data->id),'class="form-horizontal form-label-left"'); ?>

                		<div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
		                        <h6>Nama Pelatihan <input name="nama_pelatihan" type="text" class="form-control" value="<?php echo $data->nama_pelatihan; ?>"></h6>

                                <h6>Tanggal Mulai Pelatihan <input name="tanggal_mulai" type="date" class="form-control" value="<?php echo $data->tanggal_mulai; ?>"></h6>

                                <h6>Tanggal Selesai Pelatihan <input name="tanggal_selesai" type="date" class="form-control" value="<?php echo $data->tanggal_selesai; ?>"></h6>

                                <h6>Nama Penyelenggara <input name="nama_penyelenggara" type="text" class="form-control" value="<?php echo $data->nama_penyelenggara; ?>"></h6>
					    	</div>
                        </div>

					    <div class="ln_solid"></div>

                		<div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-6">
					            <input type="submit" class="btn btn-success" value="Simpan">
					    	</div>
                        </div>

                </div>

            </div>
        </div>
    </div>
<?php
  include('v_footer.php');
?>
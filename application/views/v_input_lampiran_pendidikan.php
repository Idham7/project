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
                    
                    <h2>Input Ijazah</h2>
                    <div class="clearfix"></div>
                
                </div>
                
                <div class="x_content">
                <?php echo form_open_multipart(base_url('pegawai/input_lamp_pendidikan/'.$data->id),'class="form-horizontal form-label-left"'); ?>

                		<div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
		                        <tr class="even pointer">
					                <td class=" ">Ijazah <?php echo $data->institusi; ?></td>
					                <td class=" ">
					                    <input class="btn btn-default" type="file" name="ijazah" id="ijazah" />
					                    <?php echo isset($error_file) ? $error_file['error'] : ''; ?>
					                </td>
					            </tr>
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
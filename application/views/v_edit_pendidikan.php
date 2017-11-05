<?php
  include('v_header.php');
  include('v_sidebar.php');
  $style = array('class' => 'form-control');
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
                <?php echo form_open_multipart(base_url('pegawai/edit_pendidikan/'.$data->id),'class="form-horizontal form-label-left"'); ?>

                		<div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <h6>Jenjang Pendidikan
                                <?php
                                $draft = array(
                                  'Jenjang Pendidikan' => array(
                                  'TK'=>'TK',
                                  'SD'=>'SD',
                                  'SMP'=>'SMP',
                                  'SMA'=>'SMA',
                                  'S1'=>'S1',
                                  'S2'=>'S2',
                                  'S3'=>'S3'
                                ));
                                echo form_dropdown('jenjang', $draft, $data->jenjang, $style);
                                ?>
                                </h6>

                                <h6>Nama Institusi <input name="institusi" type="text" class="form-control" value="<?php echo $data->institusi; ?>"></h6>

                                <h6>Jurusan <input name="jurusan" type="text" class="form-control" value="<?php echo $data->jurusan; ?>"></h6>

                                <h6>Tahun Lulus <input name="tahun_lulus" type="text" class="form-control" value="<?php echo $data->tahun_lulus; ?>"></h6>
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
<?php
include('v_sidebar_admin.php');
?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Form Registrasi User<small> Admin </small></h3>
        </div>
    </div>
    
    <div class="clearfix"></div>
    
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                
                <div class="x_content">
                    <form method="post" action="<?php echo base_url('admin/registrasi_user');?>" class="form-horizontal form-label-left">

                        <div class="form-group">
                            <label class="col-md-3 col-sm-3 col-xs-12">Email<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="email" id="email" placeholder="Email" required="required" class="form-control col-md-7 col-xs-12">
                                <?php echo form_error('email');?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-sm-3 col-xs-12">Password<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="password" id="password" placeholder="Password" class="form-control col-md-7 col-xs-12" required="required"  type="text"></input>
                                <?php echo form_error('password');?>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                    
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <a class="btn btn-primary" href="<?php echo base_url('admin/daftar_user');?>"> Batal </a>
                                <input type="submit" class="btn btn-success" value="Simpan">
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

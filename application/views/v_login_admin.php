<?php
include('v_header.php');
?>

<body style="background:#E20016;">

  <div class="body">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
            <h1>Login Admin Form</h1>
            <!--                                      FORM                                              -->
            <?php echo form_open('login_admin'); ?>
            <!--                                      FORM                                              -->

            <div class="x_content">
              <?php if (isset($pesan)) {
                ?>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <strong>Error!</strong><br><small><?php echo $pesan; ?></small>
                </div>
              <?php }
              ?>
              <?php echo form_error('username');?>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required="" />
              </div>
              <?php echo form_error('password');?>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
              </div>
              <div>
                <input class="btn btn-default submit" type="submit" value="Login" />
              </div>
            </div>
            <!--                                      FORM                                              -->
            <?php echo form_close(); ?>
            <!--                                      FORM                                              -->
            <div class="clearfix"></div>
            <div class="separator">

              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i style="font-size: 26px;"></i> <img src="<?php echo base_url(); ?>../assets/images/telkom-property.png" alt="" style="width: 100px; height: 67px"> </h1>
                <h1><i style="font-size: 26px;"></i> TELKOM PROPERTY SDM</h1>
              </div>
            </div>

          <!-- form -->
        </section>
        <!-- content -->
      </div>

    </div>
  </div>

</body>

</html>

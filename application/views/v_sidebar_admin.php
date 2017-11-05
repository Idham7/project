<body class="nav-md">

  <div class="container body">


    <div class="main_container">
<div class="col-md-3 left_col">
  <div class="left_col scroll-view">

    <div class="navbar nav_title" style="border: 0;">
      <a href="<?php echo base_url('admin'); ?>" class="site_title"><img src="<?php echo base_url(); ?>../assets/images/telkom-property.png" style="width: 70px; height: 47px"></i> <span>Beranda</span></a>
    </div>
    <div class="clearfix"></div>

    <!-- menu prile quick info -->
    <div class="profile">
      <div class="profile_pic">
        <img src="<?php echo base_url(); ?>../assets/images/<?php echo $this->session->userdata("foto_avatar"); ?>" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2><?php echo $this->session->userdata("email"); ?></h2>
      </div>
    </div>
    <!-- /menu prile quick info -->

    <br/>

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>Menu</h3>
        <ul class="nav side-menu">
          <li><a><i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none">
                <li><a href="<?php echo base_url('admin');?>">Daftar Pegawai</a></li>
                <li><a href="<?php echo base_url('admin/log_history');?>">Log History</a></li>
            </ul>
        </li>
          <li><a><i class="fa fa-user"></i> User <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none">
                <li><a href="<?php echo base_url('admin/registrasi_user');?>">Registrasi User</a></li>
            </ul>
            <ul class="nav child_menu" style="display: none">
                <li><a href="<?php echo base_url('admin/daftar_user');?>">Daftar User</a></li>
            </ul>
        </li>
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <!-- <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div> -->
    <!-- /menu footer buttons -->
  </div>
</div>
<!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="<?php echo base_url('admin/logout');?>">
                    <i class="fa fa-sign-out fa-fw"></i> Logout
                </a>
            </li>



            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->

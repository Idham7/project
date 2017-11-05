
<?php
include('v_sidebar_admin.php');
?>

<!-- page content -->
<div class="right_col" role="main">

<div class="">
<!-- top tiles -->
<div class="row tile_count">
  <div class="animated flipInY col-md-3 col-sm-6 col-xs-6 tile_stats_count">
    <div class="left"></div>
    <div class="right">
      <span class="count_top"><i class="fa fa-user"></i> Total Karyawan</span>
      <div class="count"><?php echo $jumlah; ?></div>
    </div>
  </div>
  <div class="animated flipInY col-md-3 col-sm-6 col-xs-6 tile_stats_count">
    <div class="left"></div>
    <div class="right">
      <span class="count_top"><i class="fa fa-user"></i> Karyawan Tetap</span>
      <div class="count"><?php echo $jumlah_tetap; ?></div>
    </div>
  </div>
  <div class="animated flipInY col-md-3 col-sm-6 col-xs-6 tile_stats_count">
    <div class="left"></div>
    <div class="right">
      <span class="count_top"><i class="fa fa-clock-o"></i> Karyawan Honor</span>
      <div class="count green"><?php echo $jumlah_honor; ?></div>
    </div>
  </div>
  <div class="animated flipInY col-md-3 col-sm-6 col-xs-6 tile_stats_count">
    <div class="left"></div>
    <div class="right">
      <span class="count_top"><i class="fa fa-clock-o"></i> Karyawan Magang</span>
      <div class="count green"><?php echo $jumlah_magang; ?></div>
    </div>
  </div>

</div>
<!-- /top tiles -->
<div class="clearfix"></div>
<hr>

<!-- page content -->

    <div class="page-title">
        <div class="title_left">
            <h3>Daftar Pegawai<small> Admin </small></h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_content">
                <?php if ($this->session->flashdata('success')) {
                ?>
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <strong>Sukses!</strong> <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php
                } ?>
                    <a class="btn btn-primary" href="<?php echo base_url('cexcel/read_modify_write');?>"> Export to Excel </a>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">

                      <thead>
                        <tr>
                          <th>NIK</th>
                          <th>Nama Lengkap</th>
                          <th>Nama Posisi</th>
                          <th>Lokasi Kerja</th>
                          <th>Unit Kerja</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php

                        foreach ($data as $pegawai => $dt) {
                        echo '<tr id="'.$dt->id.'">';
                        echo '<td>' . $dt->nik . '</td>';
                        echo '<td>' . $dt->nama_lengkap . '</td>';
                        echo '<td>' . $dt->nama_posisi . '</td>';
                        echo '<td>' . $dt->lokasi_kerja . '</td>';
                        echo '<td>' . $dt->unit_kerja . '</td>';
                        echo '<td>' . '<a class="btn btn-primary btn-sm "  aria-label="Left Align" href="'.base_url('admin/beranda/'.$dt->id).'">
                                        <span class="glyphicon glyphicon-list" aria-hidden="true"></span> detail</a>
                                        <a class="btn btn-danger btn-sm "  aria-label="Left Align" href="'.base_url('admin/delete_pegawai/'.$dt->id).'">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> hapus</a>'
                                    .
                                        '</td></tr>';
                        }
                        ?>

                      </tbody>

                    </table>

                </div>

            </div>
        </div>

    </div>

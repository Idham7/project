<?php
include('v_sidebar_admin.php');
?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Daftar Admin<small> Admin </small></h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
    <form method="post" action="<?php echo base_url('admin/daftar_admin');?>">
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

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">

                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tanggal Registrasi</th>
                          <th>Email</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        $tambah = 0;
                        foreach ($data as $user => $dt) {
                          echo '<tr id="'.$dt->id.'">';
                          echo '<td>' . ++$tambah . '</td>';
                          $d=strtotime($dt->updated_at);
                          $a = date("l, d-M-Y H:i:s", $d);
                          echo '<td>' . $a . '</td>';
                          echo '<td>' . $dt->email . '</td>';
                          echo '<td>' . '<a class="btn btn-primary btn-sm "  aria-label="Left Align" href="'.base_url('admin/edit_user/'.$dt->id).'">
                                          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> edit</a>
                                          <a class="btn btn-danger btn-sm "  aria-label="Left Align" href="'.base_url('admin/delete_user/'.$dt->id).'">
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
    </form>
    </div>

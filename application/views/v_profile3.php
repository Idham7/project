<?php
include('v_header.php');

$style = array(
  'class' => 'form-control'
);
?>

      <?php
      include('v_sidebar.php');
      ?>

      <!-- top navigation -->

      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">


        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Data Karyawan</h3>
            </div>

          </div>
          <div class="clearfix"></div>



          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

              <div class="x_panel">
                <!-- <div class="x_title">
                  <h2>User Report <small>Activity report</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div> -->
                <div class="x_content">

                  <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                    <div class="profile_img">

                      <!-- end of image cropping -->
                      <div id="crop-avatar">
                        <!-- Current avatar -->
                        <div class="avatar-view" title="Change the avatar">
                          <?php
                            echo '<img src="'.base_url(). '../assets/upload/foto_ava/'.$this->session->userdata('foto_avatar').'" alt="Avatar">';
                          ?>

                        </div>

                        <!-- Cropping modal -->
                        <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                              <?php echo form_open_multipart(base_url('pegawai/input_foto_ava')); ?>

                                <div class="modal-header">
                                  <button class="close" data-dismiss="modal" type="button">&times;</button>
                                  <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="avatar-body">

                                    <!-- Upload image and data -->
                                    <div class="avatar-upload">
                                      <input class="avatar-src" name="avatar_src" type="hidden">
                                      <input class="avatar-data" name="avatar_data" type="hidden">
                                      <label for="avatarInput">Local upload</label>
                                      <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                                    </div>

                                  </div>
                                </div>

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button class="btn btn-primary source" onclick="new PNotify({
                                              title: 'Regular Success',
                                              text: 'That thing that you were trying to do worked!',
                                              type: 'success'
                                          });">Save changes
                                  </button>
                                </div>
                                <!-- <div class="modal-footer">
                                                  <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                                </div> -->
                              <?php echo form_close(); ?>

                            </div>
                          </div>
                        </div>
                        <!-- /.modal -->

                        <!-- Loading state -->
                        <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                      </div>
                      <!-- end of image cropping -->

                    </div>



                    <h3><?php echo isset($pegawai->nama_lengkap) ? $pegawai->nama_lengkap : $this->session->userdata("email") ; ?></h3>
<!--
                    <ul class="list-unstyled user_data">
                      <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
                      </li>

                      <li>
                        <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
                      </li>

                      <li class="m-top-xs">
                        <i class="fa fa-external-link user-profile-icon"></i>
                        <a href="http://www.kimlabs.com/profile/" target="_blank">www.auroradeveloper.com</a>
                      </li>
                    </ul>
-->
                    <br />

                  </div>
                  <!-- Biodata Karyawan (recent activity) -->
                  <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Pribadi</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Keluarga</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content7" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Pekerjaan</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Pendidikan</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content10" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Pelatihan</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content8" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false">Lainnya</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content9" role="tab" id="profile-tab5" data-toggle="tab" aria-expanded="false">Berkas</a>
                        </li>


                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                          <!-- start recent activity -->
                          <div class="clearfix"></div>

                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                               <div class="x_title">
                                <h2>Biodata Diri <small>Karyawan</small></h2>
                                <!-- <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="#">Settings 1</a>
                                      </li>
                                      <li><a href="#">Settings 2</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                                  </li>
                                </ul> -->
                                <div class="clearfix"></div>
                              </div>

                              <!--  RISAL UBAH DISINI -->
                              <!-- modals -->
                                <!-- Large modal -->
                              <!--  BERHENTI DISINI-->
                                <!-- dirubah style="text-align: center" -->
                              <div class="x_content" >
                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <!--                                      FORM                                              -->
                                      <?php
                                      echo form_open('pegawai/input_data_diri');
                                      ?>
                                      <!--                                      FORM                                              -->

                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">Edit Data Diri</h4>
                                      </div>
                                      <!--Isi modal -->
                                      <fieldset>
                                      <div class="modal-body">

                                      <div class="col-md-6 col-sm-6">

                                        <h6>Nama <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php  echo $pegawai->nama_lengkap; ?>">
                                        </h6>

                                        <h6>Tempat Lahir <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="<?php  echo $pegawai->tempat_lahir; ?>">
                                        </h6>

                                        <h6>Tanggal Lahir <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal lahir" value="<?php  echo $pegawai->tanggal_lahir; ?>">
                                        </h6>

                                        <h6>Agama
                                          <?php
                                          $draft = array(
                                            "AGAMA" => array("Islam"=>"Islam","Kristen"=>"Kristen","Hindu"=>"Hindu","Budha"=>"Budha")
                                          );
                                          echo form_dropdown('agama', $draft, $pegawai->agama, $style);
                                          ?>
                                        </h6>

                                        <h6>Jenis Kelamin
                                          <?php
                                          $draft = array("Jenis Kelamin" => array('Laki-Laki'=>'Laki-Laki', 'Perempuan'=>'Perempuan'));
                                          echo form_dropdown('jenis_kelamin', $draft, $pegawai->sex, $style);
                                          ?>
                                          </h6>

                                          <h6>Nomor KTP<input name="nomor_ktp" type="text" class="form-control" placeholder="Nomor KTP" value="<?php echo $pegawai->nomor_ktp; ?>"></h6>

                                          <h6>Nomor Telepon<input name="nomor_handphone" type="text" class="form-control" placeholder="Nomor Telepon" value="<?php echo $pegawai->no_hp; ?>"></h6>

                                          <h6>Golongan Darah
                                            <?php
                                            $draft = array(
                                              "Golongan Darah" => array(
                                              'O'=>'O',
                                              'A'=>'A',
                                              'B'=>'B',
                                              'AB'=>'AB'
                                            ));
                                            echo form_dropdown('golongan_darah', $draft, $pegawai->gol_darah, $style);
                                            ?>
                                           </h6>

                                           <h6>Alamat Domisili<input name="alamat_domisili" type="text" class="form-control" placeholder="Alamat Domisili" value="<?php echo $pegawai->alamat; ?>"></h6>
                                      </div>
                                      <div class="col-md-6 col-sm-6">
                                        <h6>RT/RW<input name="rt_rw" type="text" class="form-control" placeholder="RT/RW" value="<?php echo $pegawai->rt_rw; ?>"></h6>

                                        <h6>Provinsi
                                          <select name="provinsi" class="form-control" id="provinsi" onclick="ajaxkota(this.value)">
                                            <option value="">Pilih Provinsi</option>
                                            <?php
                                            $id_prov = null;
                                            $prov = null;
                                            $kec = null;
                                            $kab = null;
                                            $kel = null;
                                            foreach ($provinsi as $daerah => $dt) {
                                              if ($pegawai->prov === $dt->id_prov) {
                                                $id_prov = $dt->id_prov;
                                                $prov = $dt->nama;
                                                echo '<option value="'.$dt->id_prov.'" selected>'.$dt->nama.'</option>';
                                              } else {
                                                echo '<option value="'.$dt->id_prov.'">'.$dt->nama.'</option>';
                                              }
                                            }
                                            ?>
                                          </select>
                                        </h6>

                                        <h6>Kabupaten
                                          <select name="kabupaten_kota" class="form-control" id="kabupaten" onclick="ajaxkec(this.value)">
                                            <?php
                                            $id_kab = null;
                                            if (isset($pegawai->kab_kot) && $id_prov != NULL){
                                              $kabupatens = $this->Daerah_model->getKab($id_prov);
                                              foreach ($kabupatens as $kb => $dt) {
                                                if ($pegawai->kab_kot === $dt->id_kab) {
                                                  $id_kab = $dt->id_kab;
                                                  $kab = $dt->nama;
                                                  echo '<option value="'.$dt->id_kab.'" selected>'.$dt->nama.'</option>';
                                                } else {
                                                  echo '<option value="'.$dt->id_kab.'">'.$dt->nama.'</option>';
                                                }
                                              }
                                            } else {
                                            ?>
                                            <option value="">Pilih Kabupaten/Kota</option>
                                            <?php
                                            }
                                            ?>
                                          </select>
                                        </h6>

                                        <h6>Kecamatan
                                          <select name="kecamatan" class="form-control" id="kecamatan" onclick="ajaxkel(this.value)">
                                            <?php
                                            $id_kec = null;
                                            if (isset($pegawai->kec) && $id_kab != NULL){
                                              $kecamatans = $this->Daerah_model->getKec($id_kab);
                                              foreach ($kecamatans as $kb => $dt) {
                                                if ($pegawai->kec === $dt->id_kec) {
                                                  $id_kec = $dt->id_kec;
                                                  $kec = $dt->nama;
                                                  echo '<option value="'.$dt->id_kec.'" selected>'.$dt->nama.'</option>';
                                                } else {
                                                  echo '<option value="'.$dt->id_kec.'">'.$dt->nama.'</option>';
                                                }
                                              }
                                            } else {
                                            ?>
                                            <option value="">Pilih Kecamatan</option>
                                            <?php
                                            }
                                            ?>
                                          </select>
                                        </h6>

                                        <h6>Kelurahan
                                          <select name="desa_kelurahan" class="form-control" id="kelurahan" onclick="showCoordinate();">
                                            <?php
                                            if (isset($pegawai->des_kel) && $id_kec != NULL){
                                              $kel = $this->Daerah_model->getKel($id_kec);
                                              foreach ($kel as $kb => $dt) {
                                                if ($pegawai->des_kel === $dt->id_kel) {
                                                  $kel = $dt->nama;
                                                  echo '<option value="'.$dt->id_kel.'" selected>'.$dt->nama.'</option>';
                                                } else {
                                                  echo '<option value="'.$dt->id_kel.'">'.$dt->nama.'</option>';
                                                }
                                              }
                                            } else {
                                            ?>
                                            <option value="">Pilih Kelurahan/Desa</option>
                                            <?php
                                            }
                                            ?>
                                          </select>
                                        </h6>

                                        <h6>Kode Pos<input name="kode_pos" type="text" class="form-control" placeholder="Kode Pos" value="<?php echo $pegawai->kode_pos; ?>"></h6>

                                        <h6>Email <input name="email_telpro" type="email" class="form-control" placeholder="Email Telpro"  value="<?php echo $pegawai->email_telpro; ?>"></h6>

                                        <h6>Email Lain<input name="other_email" type="email" class="form-control" placeholder="Email Lain" value="<?php echo $pegawai->other_email; ?>"></h6>
                                      </div>

                                      </div>
                                      <!--batas Isi modal -->
                                    </fieldset>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary source" onclick="new PNotify({
                                                    title: 'Regular Success',
                                                    text: 'That thing that you were trying to do worked!',
                                                    type: 'success'
                                                });">Save changes
                                        </button>
                                      </div>
                                      <!--                                      FORM                                              -->
                                      <?php echo form_close(); ?>
                                      <!--                                      FORM                                              -->
                                    </div>
                                  </div>
                                </div>
                                <table class="table table-striped responsive-utilities jambo_table bulk_action">

                                  <tbody>
                                    <tr class="even pointer">
                                      <td class=" ">Nama</td>
                                      <td class=" "><?php echo isset($pegawai->nama_lengkap) ? $pegawai->nama_lengkap : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Tempat Lahir</td>
                                      <td class=" "><?php echo isset($pegawai->tempat_lahir) ? $pegawai->tempat_lahir : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Tanggal Lahir</td>
                                      <?php
                                      $date=date_create($pegawai->tanggal_lahir);
                                       ?>
                                      <td class=" "><?php echo isset($pegawai->tanggal_lahir) ? date_format($date,"d M Y") : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Agama</td>
                                      <td class=" "><?php echo isset($pegawai->agama) ? $pegawai->agama : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Sex</td>
                                      <td class=" "><?php echo isset($pegawai->sex) ? $pegawai->sex : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Golongan Darah</td>
                                      <td class=" "><?php echo isset($pegawai->gol_darah) ? $pegawai->gol_darah : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Nomor KTP</td>
                                      <td class=" "><?php echo isset($pegawai->nomor_ktp) ? $pegawai->nomor_ktp : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Email Telpro</td>
                                      <td class=" "><?php echo isset($pegawai->email_telpro) ? $pegawai->email_telpro : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Other Email</td>
                                      <td class=" "><?php echo isset($pegawai->other_email) ? $pegawai->other_email : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Alamat Domisili</td>
                                      <td class=" "><?php echo isset($pegawai->alamat) ? $pegawai->alamat : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">RT/RW</td>
                                      <td class=" "><?php echo isset($pegawai->rt_rw) ? $pegawai->rt_rw : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Desa/Kelurahan</td>
                                      <td class=" "><?php echo isset($pegawai->des_kel) ? $kel : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Kecamatan</td>
                                      <td class=" "><?php echo isset($pegawai->kec) ? $kec : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Kota/Kabupaten Domisili</td>
                                      <td class=" "><?php echo isset($pegawai->kab_kot) ? $kab : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Propinsi Domisili</td>
                                      <td class=" "><?php echo isset($pegawai->prov) ? $prov : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Kode Pos Domisili</td>
                                      <td class=" "><?php echo isset($pegawai->kode_pos) ? $pegawai->kode_pos : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">No. Handphone</td>
                                      <td class=" "><?php echo isset($pegawai->no_hp) ? $pegawai->no_hp : '(data belum diinput)' ; ?></td>
                                    </tr>
                                  </tbody>

                                </table>
                              </div>
                              <div align="Right">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-edit"></i> Edit</button>
                              </div>


                            </div>
                          </div>
                          <!-- end recent activity -->

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                          <!-- start user projects -->
                          <div class="clearfix"></div>

                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Data Keluarga<small>Karyawan</small></h2>
                                <!-- <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="#">Settings 1</a>
                                      </li>
                                      <li><a href="#">Settings 2</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                                  </li>
                                </ul> -->
                                <div class="clearfix"></div>
                              </div>

                              <div class="x_content">

                                <table class="table table-striped responsive-utilities jambo_table bulk_action">

                                  <tbody>
                                    <tr class="even pointer">
                                      <td class=" ">Status Nikah</td>
                                      <td class=" "><?php echo isset($pegawai->status_nikah) ? $pegawai->status_nikah : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Tanggal Nikah</td>
                                      <?php
                                      $date=date_create($pegawai->tanggal_nikah);
                                       ?>
                                      <td class=" "><?php echo isset($pegawai->tanggal_nikah) ? date_format($date,"d M Y") : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">TANG_KEL</td>
                                      <td class=" "><?php echo isset($pegawai->tang_kel) ? $pegawai->tang_kel : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">No. KK</td>
                                      <td class=" "><?php echo isset($pegawai->no_kk) ? $pegawai->no_kk : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Nama Suami/Istri</td>
                                      <td class=" "><?php echo isset($pegawai->nama_suami_or_istri) ? $pegawai->nama_suami_or_istri : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Nama Anak 1</td>
                                      <td class=" "><?php echo isset($pegawai->nama_anak_1) ? $pegawai->nama_anak_1 : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Nama Anak 2</td>
                                      <td class=" "><?php echo isset($pegawai->nama_anak_2) ? $pegawai->nama_anak_2 : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Nama Anak 3</td>
                                      <td class=" "><?php echo isset($pegawai->nama_anak_3) ? $pegawai->nama_anak_3 : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Nama Ayah kandung</td>
                                      <td class=" "><?php echo isset($pegawai->nama_ayah_kandung) ? $pegawai->nama_ayah_kandung : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Nama Ibu Kandung</td>
                                      <td class=" "><?php echo isset($pegawai->nama_ibu_kandung) ? $pegawai->nama_ibu_kandung : '(data belum diinput)' ; ?></td>
                                    </tr>
                                  </tbody>

                                </table>
                              </div>
                              <div align="Right">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg2"><i class="fa fa-edit"></i> Edit</button>
                              </div>

                                <!-- modals -->
                                  <!-- Large modal -->
                                  <div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">

                                        <!--                                      FORM                                              -->
                                        <?php
                                        echo form_open('pegawai/input_data_keluarga');
                                        ?>
                                        <!--                                      FORM                                              -->
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Edit Data Keluarga</h4>
                                        </div>
                                        <fieldset>
                                        <div class="modal-body">
                                          <div class="col-md-6 col-sm-6">
                                          <h6>Status Nikah
                                            <?php
                                            $draft = array(
                                              'Status Nikah' => array(
                                              'Menikah'=>'Menikah',
                                              'Sudah Menikah'=>'Sudah Menikah',
                                              'Belum Menikah'=>'Belum Menikah'
                                            ));
                                            echo form_dropdown('status_nikah', $draft, $pegawai->status_nikah, $style);
                                            ?>
                                          </h6>

                                          <h6>Tanggal Nikah <input name="tanggal_nikah" type="date" class="form-control" placeholder="Tanggal Nikah" value="<?php echo $pegawai->tanggal_nikah; ?>"></h6>

                                          <h6>Tang Kel <input name="tang_kel" type="text" class="form-control" placeholder="TANG_KEL" value="<?php echo $pegawai->tang_kel; ?>"></h6>

                                          <h6>No Kartu Keluarga<input name="no_kk" type="text" class="form-control" placeholder="No.KK"  value="<?php echo $pegawai->no_kk; ?>"></h6>

                                          <h6>Nama Suami/Istri<input name="nama_suami_or_istri" type="text" class="form-control" placeholder="Nama Suami/Istri" value="<?php echo $pegawai->nama_suami_or_istri; ?>"></h6>

                                          </div>
                                          <div class="col-md-6 col-sm-6">
                                           <h6>Nama Anak 1 <input name="nama_anak_1" type="text" class="form-control" placeholder="Nama Anak 1" value="<?php echo $pegawai->nama_anak_1; ?>"></h6>

                                          <h6>Nama Anak 2<input name="nama_anak_2" type="text" class="form-control" placeholder="Nama Anak 2" value="<?php echo $pegawai->nama_anak_2; ?>"></h6>

                                          <h6>Nama Anak 3<input name="nama_anak_3" type="text" class="form-control" placeholder="Nama Anak 3" value="<?php echo $pegawai->nama_anak_3; ?>"></h6>

                                          <h6>Nama Ayah Kandung<input name="nama_ayah_kandung" type="text" class="form-control" placeholder="Nama Ayah Kandung" value="<?php echo $pegawai->nama_ayah_kandung; ?>"></h6>

                                          <h6>Nama Ibu Kandung<input name="nama_ibu_kandung" type="text" class="form-control" placeholder="Nama Ibu Kandung" value="<?php echo $pegawai->nama_ibu_kandung; ?>"></h6>

                                          </div>
                                        </div>
                                      </fieldset>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>
                                        <!--                                      FORM                                              -->
                                        <?php echo form_close(); ?>
                                        <!--                                      FORM                                              -->
                                      </div>
                                    </div>
                                  </div>
                            </div>
                          </div>
                          <!-- end user projects -->

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <div class="clearfix"></div>

                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Pendidikan <small>Karyawan</small></h2>
                                <!-- <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="#">Settings 1</a>
                                      </li>
                                      <li><a href="#">Settings 2</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                                  </li>
                                </ul> -->
                                <div class="clearfix"></div>
                              </div>

                              <div class="x_content">

                                    <?php
                                        if (!$cek_pendidikan) {
                                          echo '<table class="table table-striped responsive-utilities jambo_table bulk_action"><tbody><tr class="even pointer">(data pelatihan belum ada diinput)</tr></tbody></table>';
                                        } else {
                                          echo '<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">

                                                  <thead>
                                                    <tr>
                                                      <th>Jenjang Pendidikan</th>
                                                      <th>Nama Institusi</th>
                                                      <th>Jurusan</th>
                                                      <th>Tahun Lulus</th>
                                                      <th>Aksi</th>
                                                    </tr>
                                                  </thead>

                                                  <tbody>
                                                    ';
                                          foreach ($pendidikan as $data_pendidikan => $dt) {


                                              echo '<tr id="'.$dt->id .'">';
                                              echo '<td>' . $dt->jenjang  . '</td>';
                                              echo '<td>' . $dt->institusi   . '</td>';
                                              echo '<td>' . $dt->jurusan   . '</td>';
                                              echo '<td>' . $dt->tahun_lulus   . '</td>';
                                              echo '<td>' .   '<a class="btn btn-primary btn-sm "  aria-label="Left Align" href="'.base_url('pegawai/edit_pendidikan/'.$dt->id).'">
                                                              <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> edit</a>'
                                                          .
                                                              '</td></tr>';


                                          }
                                           echo '
                                                </tbody>

                                              </table>';
                                        }
                                      ?>

                              </div>
                              <div align="Right">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg3"><i class="fa fa-edit"></i> Add</button>
                              </div>

                                <!-- modals -->
                                  <!-- Large modal -->
                                  <div class="modal fade bs-example-modal-lg3" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">
                                          <?php
                                        echo form_open('pegawai/input_pendidikan');
                                        ?>
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Tambah Pendidikan</h4>
                                        </div>
                                        <fieldset>
                                        <div class="modal-body col-md-12 col-sm-12">
                                            <!-- <h6>Jenjang Pendidikan
                                            <?php
                                            $draft = array(
                                              'Jenjang Pendidikan' => array(
                                              'TK'=>'TK',
                                              'SD'=>'SD',
                                              'SMP'=>'SMP',
                                              'SMA'=>'SMA',
                                              'S1'=>'S1',
                                              'S2'=>'S2',
                                              'S3'=>'S3',
                                            ));
                                            echo form_dropdown('jenjang', $draft, $pendidikan->jenjang, $style);
                                            ?>
                                            </h6> -->

                                            <!-- <h6>Jenjang Pendidikan <input name="jenjang" type="text" class="form-control" placeholder="Jenjang Pendidikan"></h6> -->

                                            <h6>Jenjang Pendidikan
                                            <select name="jenjang" class="form-control">
                                              <option value="">Pilih Jenjang Pendidikan</option>
                                              <option value="TK">TK</option>
                                              <option value="SD">SD</option>
                                              <option value="SMP">SMP</option>
                                              <option value="SMA">SMA</option>
                                              <option value="S1">S1</option>
                                              <option value="S2">S2</option>
                                              <option value="S3">S3</option>
                                            </select>
                                            </h6>

                                            <h6>Nama Institusi <input name="institusi" type="text" class="form-control" placeholder="Nama Institusi"></h6>

                                            <h6>Jurusan <input name="jurusan" type="text" class="form-control" placeholder="Jurusan"></h6>

                                            <h6>Tahun Lulus <input name="tahun_lulus" type="text" class="form-control" placeholder="Tahun Lulus"></h6>
                                        </div>
                                        </fieldset>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>
                                        <!--                                      FORM                                              -->
                                        <?php echo form_close(); ?>
                                        <!--                                      FORM                                              -->


                                      </div>
                                    </div>
                                  </div>
                            </div>
                          </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content7" aria-labelledby="profile-tab">

                          <!-- start user projects -->
                          <div class="clearfix"></div>

                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Pekerjaan <small>Karyawan</small></h2>
                                <!-- <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="#">Settings 1</a>
                                      </li>
                                      <li><a href="#">Settings 2</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                                  </li>
                                </ul> -->
                                <div class="clearfix"></div>
                              </div>

                              <div class="x_content">

                                <table class="table table-striped responsive-utilities jambo_table bulk_action">

                                  <tbody>
                                    <tr class="even pointer">
                                      <td class=" ">NIK</td>
                                      <td class=" "><?php echo isset($pegawai->nik) ? $pegawai->nik : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Nama Posisi (Jabatan)</td>
                                      <td class=" "><?php echo isset($pegawai->nama_posisi) ? $pegawai->nama_posisi : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Lokasi Kerja</td>
                                      <td class=" "><?php echo isset($pegawai->lokasi_kerja) ? $pegawai->lokasi_kerja : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Unit Kerja</td>
                                      <td class=" "><?php echo isset($pegawai->unit_kerja) ? $pegawai->unit_kerja : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">PSA</td>
                                      <td class=" "><?php echo isset($pegawai->psa) ? $pegawai->psa : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Level Eksis</td>
                                      <td class=" "><?php echo isset($pegawai->level_eksis) ? $pegawai->level_eksis : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Tanggal Level</td>
                                      <?php
                                      $date=date_create($pegawai->tanggal_level);
                                       ?>
                                      <td class=" "><?php echo isset($pegawai->tanggal_level) ? date_format($date,"d M Y") : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Tgl Mulai Kerja</td>
                                      <?php
                                      $date=date_create($pegawai->tanggal_mulai_kerja);
                                      ?>
                                      <td class=" "><?php echo isset($pegawai->tanggal_mulai_kerja) ?  date_format($date,"d M Y") : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Status Karyawan</td>
                                      <td class=" "><?php echo isset($pegawai->status_karyawan) ? $pegawai->status_karyawan : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">No. SK Pengangkatan KARTAP</td>
                                      <td class=" "><?php echo isset($pegawai->no_sk_kartap) ? $pegawai->no_sk_kartap : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Tanggal KARTAP</td>
                                      <?php
                                      $date=date_create($pegawai->tanggal_kartap);
                                       ?>
                                      <td class=" "><?php echo isset($pegawai->tanggal_kartap) ? date_format($date,"d M Y") : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">No. SK PROMUT</td>
                                      <td class=" "><?php echo isset($pegawai->no_sk_promut) ? $pegawai->no_sk_promut : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Tanggal PROMUT</td>
                                      <?php
                                      $date=date_create($pegawai->tanggal_promut);
                                       ?>
                                      <td class=" "><?php echo isset($pegawai->tanggal_promut) ? date_format($date,"d M Y") : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">No. Kontrak <small>*)Khusus Tenaga Kontrak</small> </td>
                                      <td class=" "><?php echo isset($pegawai->no_kontrak) ? $pegawai->no_kontrak : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Mulai Kontrak <small>*)Khusus Tenaga Kontrak</small> </td>
                                      <td class=" "><?php echo isset($pegawai->mli_kontrak) ? $pegawai->mli_kontrak : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Akhir Kontrak <small>*)Khusus Tenaga Kontrak</small> </td>
                                      <td class=" "><?php echo isset($pegawai->end_kontrak) ? $pegawai->end_kontrak : '(data belum diinput)' ; ?></td>
                                    </tr>
                                  </tbody>

                                </table>
                              </div>
                              <div align="Right">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg4"><i class="fa fa-edit"></i> Edit</button>
                              </div>

                                <!-- modals -->
                                  <!-- Large modal -->
                                  <div class="modal fade bs-example-modal-lg4" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">

                                        <!--                                      FORM                                              -->
                                        <?php
                                        echo form_open('pegawai/input_data_pekerjaan');
                                        ?>
                                        <!--                                      FORM                                              -->
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Data Pekerjaan</h4>
                                        </div>
                                        <fieldset>
                                        <div class="modal-body">
                                        <!-- HOAOHHAOHOALHLAHLHALHALHAL-->
                                            <div class="col-md-6 col-sm-6">
                                            <h6>NIK<input name="nik" type="text" class="form-control" placeholder="NIK" value="<?php echo $pegawai->nik; ?>"></h6>

                                            <h6>Nama Posisi
                                            <?php
                                            $draft = array(
                                              'Nama Posisi' => array(
                                              'General Affair Senior Officer I'=>'General Affair Senior Officer I',
                                              'General Affair Senior Officer II'=>'General Affair Senior Officer II',
                                              'General Affair Senior Officer III'=>'General Affair Senior Officer III'
                                            ));
                                            echo form_dropdown('nama_posisi', $draft, $pegawai->nama_posisi, $style);
                                            ?>
                                            </h6>

                                            <h6>Lokasi Kerja
                                            <?php
                                            $draft = array(
                                              'Lokasi Kerja' => array(
                                              'AREA I'=>'AREA I',
                                              'AREA II'=>'AREA II',
                                              'AREA III'=>'AREA III'
                                            ));
                                            echo form_dropdown('lokasi_kerja', $draft, $pegawai->lokasi_kerja, $style);
                                            ?>
                                            </h6>

                                            <h6>Unit Kerja
                                            <?php
                                            $draft = array(
                                              'Unit Kerja' => array(
                                              'BUSINESS SUPPORT I'=>'BUSINESS SUPPORT I',
                                              'BUSINESS SUPPORT II'=>'BUSINESS SUPPORT II',
                                              'BUSINESS SUPPORT III'=>'BUSINESS SUPPORT III'
                                            ));
                                            echo form_dropdown('unit_kerja', $draft, $pegawai->unit_kerja, $style);
                                            ?>
                                            </h6>

                                            <h6>PSA
                                            <?php
                                            $draft = array(
                                              'PSA' => array(
                                              'PSA I'=>'PSA I',
                                              'PSA II'=>'PSA II',
                                              'PSA III'=>'PSA III'
                                            ));
                                            echo form_dropdown('psa', $draft, $pegawai->psa, $style);
                                            ?>
                                            </h6>

                                            <h6>Level Eksis
                                            <?php
                                            $draft = array(
                                              'Level Eksis' => array(
                                              'A'=>'A',
                                              'B'=>'B',
                                              'C'=>'C',
                                              'D'=>'D',
                                              'E'=>'E',
                                              'F'=>'F',
                                            ));
                                            echo form_dropdown('level_eksis', $draft, $pegawai->level_eksis, $style);
                                            ?>
                                            </h6>

                                           <h6>Tanggal Level<input name="tanggal_level" type="date" class="form-control" placeholder="Tanggal Level" value="<?php echo $pegawai->tanggal_level; ?>"></h6>

                                           <h6>Tanggal Mulai Kerja<input name="tanggal_mulai_kerja" type="date" class="form-control" placeholder="Tanggal Mulai Kerja" value="<?php echo $pegawai->tanggal_mulai_kerja; ?>"><br></h6>

                                          </div>

                                          <div class="col-md-6 col-cm-6">

                                            <h6>Status Karyawan
                                            <?php
                                            $draft = array(
                                              'Status Karyawan' => array(
                                              'TETAP'=>'TETAP',
                                              'MAGANG'=>'MAGANG',
                                              'HONOR'=>'HONOR'
                                            ));
                                            echo form_dropdown('status_karyawan', $draft, $pegawai->status_karyawan, $style);
                                            ?>
                                            </h6>

                                          <h6>SK Kartap<input name="sk_kartap" type="text" class="form-control" placeholder="No.SK Pengangkatan KARTAP" value="<?php echo $pegawai->no_sk_kartap; ?>"></h6>

                                          <h6>Tanggal KARTAP<input name="tanggal_kartap" type="date" class="form-control" placeholder="Tanggal KARTAP" value="<?php echo $pegawai->tanggal_kartap; ?>"></h6>

                                          <h6>SK Promut<input name="sk_promut" type="text" class="form-control" placeholder="No.SK PROMUT" value="<?php echo $pegawai->no_sk_promut; ?>"></h6>

                                          <h6>Tanggal PROMUT<input name="tanggal_promut" type="date" class="form-control" placeholder="Tanggal PROMUT" value="<?php echo $pegawai->tanggal_promut; ?>"></h6>

                                          <h6>No_Kontrak<input name="no_kontrak" type="text" class="form-control" placeholder="NO.Kontrak (Tenaga Kontrak)" value="<?php echo $pegawai->no_kontrak; ?>"></h6>

                                          <h6>MLI Kontrak<input name="mli_kontrak" type="text" class="form-control" placeholder="MLI Kontrak (Tenaga Kontrak)" value="<?php echo $pegawai->mli_kontrak; ?>"></h6>

                                          <h6>END Kontrak<input name="end_kontrak" type="text" class="form-control" placeholder="END Kontrak (Tenaga Kontrak)" value="<?php echo $pegawai->end_kontrak; ?>"></h6>

                                          </div>
                                        <!-- HOAOHHAOHOALHLAHLHALHALHAL-->
                                        </div>
                                      </fieldset>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>
                                        <!--                                      FORM                                              -->
                                        <?php echo form_close(); ?>
                                        <!--                                      FORM                                              -->
                                      </div>
                                    </div>
                                  </div>
                            </div>
                          </div>
                          <!-- end user projects -->

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content8" aria-labelledby="profile-tab">
                          <div class="clearfix"></div>

                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Data Lain <small>Karyawan</small></h2>
                                <!-- <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="#">Settings 1</a>
                                      </li>
                                      <li><a href="#">Settings 2</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                                  </li>
                                </ul> -->
                                <div class="clearfix"></div>
                              </div>

                              <div class="x_content">

                                <table class="table table-striped responsive-utilities jambo_table bulk_action">

                                  <tbody>
                                    <tr class="even pointer">
                                      <td class=" ">No. BPJS Kesehatan</td>
                                      <td class=" "><?php echo isset($pegawai->no_bpjs_kes) ? $pegawai->no_bpjs_kes : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">No. BPJS Ketenagakerjaan</td>
                                      <td class=" "><?php echo isset($pegawai->no_bpjs_ket) ? $pegawai->no_bpjs_ket : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">NPWP</td>
                                      <td class=" "><?php echo isset($pegawai->npwp) ? $pegawai->npwp : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Nama Bank</td>
                                      <td class=" "><?php echo isset($pegawai->nama_bank) ? $pegawai->nama_bank : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">No. Rekening Bank</td>
                                      <td class=" "><?php echo isset($pegawai->no_rekening) ? $pegawai->no_rekening : '(data belum diinput)' ; ?></td>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Nama Rekening Bank</td>
                                      <td class=" "><?php echo isset($pegawai->nama_rekening) ? $pegawai->nama_rekening : '(data belum diinput)' ; ?></td>
                                    </tr>
                                  </tbody>
                                </table>

                              </div>
                              <div align="Right">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg5"><i class="fa fa-edit"></i> Edit</button>
                              </div>

                                <!-- modals -->
                                  <!-- Large modal -->
                                  <div class="modal fade bs-example-modal-lg5" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">
                                        <!--                                      FORM                                              -->
                                        <?php
                                        echo form_open('pegawai/input_data_lainnya');
                                        ?>
                                        <!--                                      FORM                                              -->
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Edit data Lainnya</h4>
                                        </div>
                                        <fieldset>
                                        <div class="modal-body">
                                          <div class="col-md-12 col-sm-12">
                                            <h6>No. BPJS Kesehatan<input name="no_bpjs_kes" type="text" class="form-control" placeholder="No. BPJS Kesehatan" value="<?php echo $pegawai->no_bpjs_kes; ?>">
                                            </h6>
                                            <h6>No. BPJS Ketenagakerjaan<input name="no_bpjs_ket" type="text" class="form-control" placeholder="No.BPJS Ketenagakerjaan" value="<?php echo $pegawai->no_bpjs_ket; ?>">
                                          </h6>
                                            <h6>No. NPWP<input name="npwp" type="text" class="form-control" placeholder="NPWP" value="<?php echo $pegawai->npwp; ?>">
                                          </h6>

                                          <h6>Nama Bank
                                            <?php
                                            $draft = array(
                                              'Nama Bank' => array(
                                              'Bank Mandiri'=>'Bank Mandiri',
                                              'BRI'=>'BRI',
                                              'BNI'=>'BNI',
                                              'BTN'=>'BTN'
                                            ));
                                            echo form_dropdown('nama_bank', $draft, $pegawai->nama_bank, $style);
                                            ?>
                                            </h6>
                                            <h6>No. Rekening Bank<input name="no_rekening" type="text" class="form-control" placeholder="No. Rekening" value="<?php echo $pegawai->no_rekening; ?>">
                                            </h6>
                                            <h6>Nama Rekening Bank<input name="nama_rekening" type="text" class="form-control" placeholder="Nama Pemilik Rekening" value="<?php echo $pegawai->nama_rekening; ?>">
                                            </h6>
                                        </div>
                                        </div>
                                      </fieldset>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>
                                        <!--                                      FORM                                              -->
                                        <?php echo form_close(); ?>
                                        <!--                                      FORM                                              -->
                                      </div>
                                    </div>
                                  </div>
                            </div>
                          </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content9" aria-labelledby="profile-tab">
                          <div class="clearfix"></div>

                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Berkas <small>Karyawan</small></h2>
                                <!-- <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="#">Settings 1</a>
                                      </li>
                                      <li><a href="#">Settings 2</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                                  </li>
                                </ul> -->
                                <div class="clearfix"></div>
                              </div>

                              <div class="x_content">

                                <table class="table table-striped responsive-utilities jambo_table bulk_action">

                                  <tbody>
                                    <tr class="even pointer">
                                      <td class=" ">KTP</td>
                                      <?php
                                        if ($pegawai->lamp_ktp==null) {
                                          echo '<td class=" ">
                                                  (data belum diinput)
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg25"><i class="fa fa-edit"></i> Add</button>
                                                </td>';
                                        } else {
                                          echo '<td class=" ">
                                                  <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg23"><i class="fa fa-book"></i> Lihat Data</button>
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg24"><i class="fa fa-edit"></i> Edit</button>
                                                </td>';
                                        };
                                      ?>
                                    </tr>

                                    <!-- modals BERKAS -->
                                  <!-- Large modal -->


                                  <!-- MODAL MULAI EDIT -->
                                  <!-- Large modal -->
                                    <tr class="odd pointer">
                                      <td class=" ">SK Kartap</td>
                                         <?php
                                        if ($pegawai->lamp_sk_kartap==null) {
                                          echo '<td class=" ">
                                                  (data belum diinput)
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg26"><i class="fa fa-edit"></i> Add</button>
                                                </td>';
                                        } else {
                                          echo '<td class=" ">
                                                  <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg27"><i class="fa fa-book"></i> Lihat Data</button>
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg28"><i class="fa fa-edit"></i> Edit</button>
                                                </td>';
                                        };
                                      ?>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">SK Promut</td>
                                        <?php
                                        if ($pegawai->lamp_sk_promut==null) {
                                          echo '<td class=" ">
                                                  (data belum diinput)
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg29"><i class="fa fa-edit"></i> Add</button>
                                                </td>';
                                        } else {
                                          echo '<td class=" ">
                                                  <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg30"><i class="fa fa-book"></i> Lihat Data</button>
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg31"><i class="fa fa-edit"></i> Edit</button>
                                                </td>';
                                        };
                                      ?>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Lamp. Kontark <small>*Khusus tenaga kontrak</small></td>
                                      <?php
                                        if ($pegawai->lamp_kontrak==null) {
                                          echo '<td class=" ">
                                                  (data belum diinput)
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg32"><i class="fa fa-edit"></i> Add</button>
                                                </td>';
                                        } else {
                                          echo '<td class=" ">
                                                  <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg33"><i class="fa fa-book"></i> Lihat Data</button>
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg34"><i class="fa fa-edit"></i> Edit</button>
                                                </td>';
                                        };
                                      ?>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Buku Nikah</td>
                                      <?php
                                        if ($pegawai->lamp_buku_nikah==null) {
                                          echo '<td class=" ">
                                                  (data belum diinput)
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg35"><i class="fa fa-edit"></i> Add</button>
                                                </td>';
                                        } else {
                                          echo '<td class=" ">
                                                  <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg36"><i class="fa fa-book"></i> Lihat Data</button>
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg37"><i class="fa fa-edit"></i> Edit</button>
                                                </td>';
                                        };
                                      ?>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Kartu Keluarga</td>
                                        <?php
                                        if ($pegawai->lamp_kk==null) {
                                          echo '<td class=" ">
                                                  (data belum diinput)
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg38"><i class="fa fa-edit"></i> Add</button>
                                                </td>';
                                        } else {
                                          echo '<td class=" ">
                                                  <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg39"><i class="fa fa-book"></i> Lihat Data</button>
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg40"><i class="fa fa-edit"></i> Edit</button>
                                                </td>';
                                        };
                                      ?>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">KTP Pasangan</td>
                                      <?php
                                        if ($pegawai->lamp_ktp_pasangan==null) {
                                          echo '<td class=" ">
                                                  (data belum diinput)
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg41"><i class="fa fa-edit"></i> Add</button>
                                                </td>';
                                        } else {
                                          echo '<td class=" ">
                                                  <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg42"><i class="fa fa-book"></i> Lihat Data</button>
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg43"><i class="fa fa-edit"></i> Edit</button>
                                                </td>';
                                        };
                                      ?>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Akta Lahir Anak 1</td>
                                      <?php
                                        if ($pegawai->lamp_akta_1==null) {
                                          echo '<td class=" ">
                                                  (data belum diinput)
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg44"><i class="fa fa-edit"></i> Add</button>
                                                </td>';
                                        } else {
                                          echo '<td class=" ">
                                                  <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg45"><i class="fa fa-book"></i> Lihat Data</button>
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg46"><i class="fa fa-edit"></i> Edit</button>
                                                </td>';
                                        };
                                      ?>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Akta Lahir Anak 2</td>
                                      <?php
                                        if ($pegawai->lamp_akta_2==null) {
                                          echo '<td class=" ">
                                                  (data belum diinput)
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg47"><i class="fa fa-edit"></i> Add</button>
                                                </td>';
                                        } else {
                                          echo '<td class=" ">
                                                  <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg48"><i class="fa fa-book"></i> Lihat Data</button>
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg49"><i class="fa fa-edit"></i> Edit</button>
                                                </td>';
                                        };
                                      ?>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Akta Lahir Anak 3</td>
                                      <?php
                                        if ($pegawai->lamp_akta_3==null) {
                                          echo '<td class=" ">
                                                  (data belum diinput)
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg50"><i class="fa fa-edit"></i> Add</button>
                                                </td>';
                                        } else {
                                          echo '<td class=" ">
                                                  <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg51"><i class="fa fa-book"></i> Lihat Data</button>
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg52"><i class="fa fa-edit"></i> Edit</button>
                                                </td>';
                                        };
                                      ?>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Kartu BPJS Kesehatan</td>
                                      <?php
                                        if ($pegawai->lamp_bpjs_kes==null) {
                                          echo '<td class=" ">
                                                  (data belum diinput)
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg53"><i class="fa fa-edit"></i> Add</button>
                                                </td>';
                                        } else {
                                          echo '<td class=" ">
                                                  <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg54"><i class="fa fa-book"></i> Lihat Data</button>
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg55"><i class="fa fa-edit"></i> Edit</button>
                                                </td>';
                                        };
                                      ?>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Kartu BPJS Ketenagakerjaan</td>
                                      <?php
                                        if ($pegawai->lamp_bpjs_tk==null) {
                                          echo '<td class=" ">
                                                  (data belum diinput)
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg56"><i class="fa fa-edit"></i> Add</button>
                                                </td>';
                                        } else {
                                          echo '<td class=" ">
                                                  <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg57"><i class="fa fa-book"></i> Lihat Data</button>
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg58"><i class="fa fa-edit"></i> Edit</button>
                                                </td>';
                                        };
                                      ?>
                                    </tr>
                                    <tr class="even pointer">
                                      <td class=" ">Kartu NPWP</td>
                                      <?php
                                        if ($pegawai->lamp_kartu_npwp==null) {
                                          echo '<td class=" ">
                                                  (data belum diinput)
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg59"><i class="fa fa-edit"></i> Add</button>
                                                </td>';
                                        } else {
                                          echo '<td class=" ">
                                                  <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg60"><i class="fa fa-book"></i> Lihat Data</button>
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg61"><i class="fa fa-edit"></i> Edit</button>
                                                </td>';
                                        };
                                      ?>
                                    </tr>
                                    <tr class="odd pointer">
                                      <td class=" ">Buku Rekening</td>
                                      <?php
                                        if ($pegawai->lamp_buku_rekening==null) {
                                          echo '<td class=" ">
                                                  (data belum diinput)
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg62"><i class="fa fa-edit"></i> Add</button>
                                                </td>';
                                        } else {
                                          echo '<td class=" ">
                                                  <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg63"><i class="fa fa-book"></i> Lihat Data</button>
                                                </td>
                                                <td class=" ">
                                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg64"><i class="fa fa-edit"></i> Edit</button>
                                                </td>';
                                        };
                                      ?>
                                    </tr>

                                    <?php

                                    foreach ($pendidikan as $data_pendidikan => $dt) {

                                    echo
                                    '<tr class="even pointer">
                                      <td class=" ">Ijazah '.$dt->institusi.'</td>';

                                        if ($dt->lamp_ijazah==null) {
                                          echo '<td class=" ">
                                                  (data belum diinput)
                                                </td>
                                                <td class=" ">
                                                  <a type="button" class="btn btn-success" href="'.base_url('pegawai/open_lamp_pendidikan/'.$dt->id).'"><i class="fa fa-edit"></i> Add</a>
                                                </td>';
                                        } else {
                                          echo '<td class=" ">
                                                  <a type="button" class="btn btn-info" href="'.base_url("../assets/upload/pendidikan"). '/' .$dt->lamp_ijazah.'" target="_blank"><i class="fa fa-book"></i> Lihat Data</a>
                                                </td>
                                                <td class=" ">
                                                  <a type="button" class="btn btn-success" href="'.base_url('pegawai/open_lamp_pendidikan/'.$dt->id).'"><i class="fa fa-edit"></i> Edit</a>
                                                </td>';
                                        }

                                    echo
                                    '</tr>';

                                    };
                                    ?>

                                    <?php

                                    foreach ($pelatihan as $data_pelatihan => $dt) {

                                    echo
                                    '<tr class="even pointer">
                                      <td class=" ">Sertifikat '.$dt->nama_pelatihan.'</td>';

                                        if ($dt->lampiran_pelatihan==null) {
                                          echo '<td class=" ">
                                                  (data belum diinput)
                                                </td>
                                                <td class=" ">
                                                  <a type="button" class="btn btn-success" href="'.base_url('pegawai/open_lamp_pelatihan/'.$dt->id).'"><i class="fa fa-edit"></i> Add</a>
                                                </td>';
                                        } else {
                                          echo '<td class=" ">
                                                  <a type="button" class="btn btn-info" href="'.base_url("../assets/upload/pelatihan"). '/' .$dt->lampiran_pelatihan.'" target="_blank"><i class="fa fa-book"></i> Lihat Data</a>
                                                </td>
                                                <td class=" ">
                                                  <a type="button" class="btn btn-success" href="'.base_url('pegawai/open_lamp_pelatihan/'.$dt->id).'"><i class="fa fa-edit"></i> Edit</a>
                                                </td>';
                                        }
                                      echo '<br>';

                                    echo
                                    '</tr>';

                                    };
                                    ?>
                                  </tbody>

                                </table>
                              </div>

                                  <div class="modal fade bs-example-modal-lg23" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">KTP</h4>
                                        </div>

                                        <div class="modal-body">
                                          <div class="col-md-12 col-sm-12">
                                            <img src="<?php echo base_url().'../assets/upload/ktp/'.$pegawai->lamp_ktp; ?>" class="img-responsive" alt="Cinque Terre" >
                                          </div>
                                        </div>
                                        </br>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg24" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_ktp')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Edit KTP</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">KTP</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_ktp" id="lamp_ktp" />
                                            </td>
                                          </tr>
                                        </div>
                                        </fieldset>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg25" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_ktp')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Input KTP</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">KTP</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_ktp" id="lamp_ktp" />
                                                <?php echo isset($error_file) ? $error_file['error'] : ''; ?>
                                            </td>
                                          </tr>
                                        </div>

                                        </fieldset>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg26" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_sk_kartap')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Input SK Kartap</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">SK Kartap</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_sk_kartap" id="lamp_sk_kartap" />
                                                <?php echo isset($error_file) ? $error_file['error'] : ''; ?>
                                            </td>
                                          </tr>
                                        </div>

                                        </fieldset>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg27" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">SK Kartap</h4>
                                        </div>

                                        <div class="modal-body">
                                          <div class="col-md-12 col-sm-12">
                                            <img src="<?php echo base_url().'../assets/upload/sk_kartap/'.$pegawai->lamp_sk_kartap; ?>" class="img-responsive" alt="Cinque Terre" >
                                          </div>
                                        </div>
                                        </br>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg28" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_sk_kartap')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Edit SK Kartap</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">SK Kartap</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_sk_kartap" id="lamp_sk_kartap" />
                                            </td>
                                          </tr>
                                        </div>
                                        </fieldset>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg29" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_sk_promut')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Input SK Promut</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">SK Promut</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_sk_promut" id="lamp_sk_promut" />
                                                <?php echo isset($error_file) ? $error_file['error'] : ''; ?>
                                            </td>
                                          </tr>
                                        </div>

                                        </fieldset>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg30" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">SK Promut</h4>
                                        </div>

                                        <div class="modal-body">
                                          <div class="col-md-12 col-sm-12">
                                            <img src="<?php echo base_url().'../assets/upload/sk_promut/'.$pegawai->lamp_sk_promut; ?>" class="img-responsive" alt="Cinque Terre" >
                                          </div>
                                        </div>
                                        </br>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg31" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_sk_promut')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Edit SK Promut</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">SK Promut</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_sk_promut" id="lamp_sk_promut" />
                                            </td>
                                          </tr>
                                        </div>
                                        </fieldset>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg32" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_lamp_kontrak')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Input Lampiran Kontrak</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">Lampiran Kontrak</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_kontrak" id="lamp_Kontrak" />
                                                <?php echo isset($error_file) ? $error_file['error'] : ''; ?>
                                            </td>
                                          </tr>
                                        </div>

                                        </fieldset>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg33" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Lampiran Kontrak</h4>
                                        </div>

                                        <div class="modal-body">
                                          <div class="col-md-12 col-sm-12">
                                            <img src="<?php echo base_url().'../assets/upload/lamp_kontrak/'.$pegawai->lamp_kontrak; ?>" class="img-responsive" alt="Cinque Terre" >
                                          </div>
                                        </div>
                                        </br>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg34" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_lamp_kontrak')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Edit Lampiran Kontrak</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">Lampiran Kontrak</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_kontrak" id="lamp_kontrak" />
                                            </td>
                                          </tr>
                                        </div>
                                        </fieldset>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg35" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_buku_nikah')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Input Buku Nikah</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">Buku Nikah</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_buku_nikah" id="lamp_buku_nikah" />
                                                <?php echo isset($error_file) ? $error_file['error'] : ''; ?>
                                            </td>
                                          </tr>
                                        </div>

                                        </fieldset>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg36" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Buku Nikah</h4>
                                        </div>

                                        <div class="modal-body">
                                          <div class="col-md-12 col-sm-12">
                                            <img src="<?php echo base_url().'../assets/upload/buku_nikah/'.$pegawai->lamp_buku_nikah; ?>" class="img-responsive" alt="Cinque Terre" >
                                          </div>
                                        </div>
                                        </br>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg37" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_buku_nikah')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Edit Buku Nikah</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">Buku Nikah</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_buku_nikah" id="lamp_buku_nikah" />
                                            </td>
                                          </tr>
                                        </div>
                                        </fieldset>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg38" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_kk')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Input Kartu Keluarga</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">Kartu Keluarga</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_kk" id="lamp_kk" />
                                                <?php echo isset($error_file) ? $error_file['error'] : ''; ?>
                                            </td>
                                          </tr>
                                        </div>

                                        </fieldset>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg39" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Kartu Keluarga</h4>
                                        </div>

                                        <div class="modal-body">
                                          <div class="col-md-12 col-sm-12">
                                            <img src="<?php echo base_url().'../assets/upload/kk/'.$pegawai->lamp_kk; ?>" class="img-responsive" alt="Cinque Terre" >
                                          </div>
                                        </div>
                                        </br>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg40" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_kk')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Edit Kartu Keluarga</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">Kartu Keluarga</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_kk" id="lamp_kk" />
                                            </td>
                                          </tr>
                                        </div>
                                        </fieldset>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg41" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_ktp_pasangan')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Input KTP Pasangan</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">KTP Pasangan</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_ktp_pasangan" id="lamp_ktp_pasangan" />
                                                <?php echo isset($error_file) ? $error_file['error'] : ''; ?>
                                            </td>
                                          </tr>
                                        </div>

                                        </fieldset>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg42" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">KTP Pasangan</h4>
                                        </div>

                                        <div class="modal-body">
                                          <div class="col-md-12 col-sm-12">
                                            <img src="<?php echo base_url().'../assets/upload/ktp_pasangan/'.$pegawai->lamp_ktp_pasangan; ?>" class="img-responsive" alt="Cinque Terre" >
                                          </div>
                                        </div>
                                        </br>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg43" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_ktp_pasangan')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Edit KTP Pasangan</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">KTP Pasangan</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_ktp_pasangan" id="lamp_ktp_pasangan" />
                                            </td>
                                          </tr>
                                        </div>
                                        </fieldset>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg44" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_akta_1')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Input Akta Lahir Anak 1</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">Akta Lahir Anak 1</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_akta_1" id="lamp_akta_1" />
                                                <?php echo isset($error_file) ? $error_file['error'] : ''; ?>
                                            </td>
                                          </tr>
                                        </div>

                                        </fieldset>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg45" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Akta Lahir Anak 1</h4>
                                        </div>

                                        <div class="modal-body">
                                          <div class="col-md-12 col-sm-12">
                                            <img src="<?php echo base_url().'../assets/upload/akta_1/'.$pegawai->lamp_akta_1; ?>" class="img-responsive" alt="Cinque Terre" >
                                          </div>
                                        </div>
                                        </br>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg46" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_akta_1')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Edit Akta Lahir Anak 1</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">Akta Lahir Anak 1</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_akta_1" id="lamp_akta_1" />
                                            </td>
                                          </tr>
                                        </div>
                                        </fieldset>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg47" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_akta_2')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Input Akta Lahir Anak 2</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">Akta Lahir Anak 2</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_akta_2" id="lamp_akta_2" />
                                                <?php echo isset($error_file) ? $error_file['error'] : ''; ?>
                                            </td>
                                          </tr>
                                        </div>

                                        </fieldset>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg48" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Akta Lahir Anak 2</h4>
                                        </div>

                                        <div class="modal-body">
                                          <div class="col-md-12 col-sm-12">
                                            <img src="<?php echo base_url().'../assets/upload/akta_2/'.$pegawai->lamp_akta_2; ?>" class="img-responsive" alt="Cinque Terre" >
                                          </div>
                                        </div>
                                        </br>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg49" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_akta_2')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Edit Akta Lahir Anak 2</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">Akta Lahir Anak 2</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_akta_2" id="lamp_akta_2" />
                                            </td>
                                          </tr>
                                        </div>
                                        </fieldset>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg50" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_akta_3')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Input Akta Lahir Anak 3</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">Akta Lahir Anak 3</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_akta_3" id="lamp_akta_3" />
                                                <?php echo isset($error_file) ? $error_file['error'] : ''; ?>
                                            </td>
                                          </tr>
                                        </div>

                                        </fieldset>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg51" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Akta Lahir Anak 3</h4>
                                        </div>

                                        <div class="modal-body">
                                          <div class="col-md-12 col-sm-12">
                                            <img src="<?php echo base_url().'../assets/upload/akta_3/'.$pegawai->lamp_akta_3; ?>" class="img-responsive" alt="Cinque Terre" >
                                          </div>
                                        </div>
                                        </br>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg52" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_akta_3')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Edit Akta Lahir Anak 3</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">Akta Lahir Anak 3</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_akta_3" id="lamp_akta_3" />
                                            </td>
                                          </tr>
                                        </div>
                                        </fieldset>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg53" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_bpjs_kes')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Input BPJS Kesehatan</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">BPJS Kesehatan</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_bpjs_kes" id="lamp_bpjs_kes" />
                                                <?php echo isset($error_file) ? $error_file['error'] : ''; ?>
                                            </td>
                                          </tr>
                                        </div>

                                        </fieldset>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg54" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">BPJS Kesehatan</h4>
                                        </div>

                                        <div class="modal-body">
                                          <div class="col-md-12 col-sm-12">
                                            <img src="<?php echo base_url().'../assets/upload/bpjs_kes/'.$pegawai->lamp_bpjs_kes; ?>" class="img-responsive" alt="Cinque Terre" >
                                          </div>
                                        </div>
                                        </br>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg55" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_bpjs_kes')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Edit BPJS Kesehatan</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">BPJS Kesehatan</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_bpjs_kes" id="lamp_bpjs_kes" />
                                            </td>
                                          </tr>
                                        </div>
                                        </fieldset>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg56" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_bpjs_ket')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Input BPJS Ketenagakerjaan</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">BPJS Ketenagakerjaan</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_bpjs_tk" id="lamp_bpjs_tk" />
                                                <?php echo isset($error_file) ? $error_file['error'] : ''; ?>
                                            </td>
                                          </tr>
                                        </div>

                                        </fieldset>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg57" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">BPJS Ketenagakerjaan</h4>
                                        </div>

                                        <div class="modal-body">
                                          <div class="col-md-12 col-sm-12">
                                            <img src="<?php echo base_url().'../assets/upload/bpjs_ket/'.$pegawai->lamp_bpjs_tk; ?>" class="img-responsive" alt="Cinque Terre" >
                                          </div>
                                        </div>
                                        </br>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg58" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_bpjs_ket')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Edit BPJS Ketenagakerjaan</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">BPJS Ketenagakerjaan</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_bpjs_tk" id="lamp_bpjs_tk" />
                                            </td>
                                          </tr>
                                        </div>
                                        </fieldset>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg59" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_npwp')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Input Kartu NPWP</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">Kartu NPWP</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_kartu_npwp" id="lamp_kartu_npwp" />
                                                <?php echo isset($error_file) ? $error_file['error'] : ''; ?>
                                            </td>
                                          </tr>
                                        </div>

                                        </fieldset>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg60" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Kartu NPWP</h4>
                                        </div>

                                        <div class="modal-body">
                                          <div class="col-md-12 col-sm-12">
                                            <img src="<?php echo base_url().'../assets/upload/npwp/'.$pegawai->lamp_kartu_npwp; ?>" class="img-responsive" alt="Cinque Terre" >
                                          </div>
                                        </div>
                                        </br>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg61" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_npwp')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Edit Kartu NPWP</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">Kartu NPWP</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_kartu_npwp" id="lamp_kartu_npwp" />
                                            </td>
                                          </tr>
                                        </div>
                                        </fieldset>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg62" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_buku_rek')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Input Buku Rekening</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">Buku Rekening</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_buku_rekening" id="lamp_buku_rekening" />
                                                <?php echo isset($error_file) ? $error_file['error'] : ''; ?>
                                            </td>
                                          </tr>
                                        </div>

                                        </fieldset>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg63" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Buku Rekening</h4>
                                        </div>

                                        <div class="modal-body">
                                          <div class="col-md-12 col-sm-12">
                                            <img src="<?php echo base_url().'../assets/upload/buku_rekening/'.$pegawai->lamp_buku_rekening; ?>" class="img-responsive" alt="Cinque Terre" >
                                          </div>
                                        </div>
                                        </br>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade bs-example-modal-lg64" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">

                                        <?php echo form_open_multipart(base_url('pegawai/input_buku_rek')); ?>

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Edit Buku Rekening</h4>
                                        </div>

                                        <fieldset>
                                        <div class="modal-body">
                                          <tr class="even pointer">
                                            <td class=" ">Buku Rekening</td>
                                            <td class=" ">
                                                <input class="btn btn-default" type="file" name="lamp_buku_rekening" id="lamp_buku_rekening" />
                                            </td>
                                          </tr>
                                        </div>
                                        </fieldset>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>

                                        <?php echo form_close(); ?>

                                      </div>
                                    </div>
                                  </div>

                            </div>
                          </div>
                        </div>
<!-- tambahan pelatihan -->
                    <div role="tabpanel" class="tab-pane fade" id="tab_content10" aria-labelledby="profile-tab">
                          <div class="clearfix"></div>

                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Pelatihan <small>Karyawan</small></h2>

                                <div class="clearfix"></div>
                              </div>

                              <div class="x_content">

                                    <?php
                                        if (!$cek_pelatihan) {
                                          echo '<table class="table table-striped responsive-utilities jambo_table bulk_action"><tbody><tr class="even pointer">(data pelatihan belum ada diinput)</tr></tbody></table>';
                                        } else {
                                          echo '<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">

                                                  <thead>
                                                    <tr>
                                                      <th>Nama Pelatihan</th>
                                                      <th>Tanggal Mulai Pelatihan</th>
                                                      <th>Tanggal Selesai Pelatihan</th>
                                                      <th>Nama Penyelenggara</th>
                                                      <th>Aksi</th>
                                                    </tr>
                                                  </thead>

                                                  <tbody>
                                                    ';
                                          foreach ($pelatihan as $data_pelatihan => $dt) {


                                              echo '<tr id="'.$dt->id .'">';
                                              echo '<td>' . $dt->nama_pelatihan  . '</td>';
                                              echo '<td>' . $dt->tanggal_mulai   . '</td>';
                                              echo '<td>' . $dt->tanggal_selesai   . '</td>';
                                              echo '<td>' . $dt->nama_penyelenggara   . '</td>';
                                              echo '<td>' .   '<a class="btn btn-primary btn-sm "  aria-label="Left Align" href="'.base_url('pegawai/edit_pelatihan/'.$dt->id).'">
                                                              <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> edit</a>'
                                                          .
                                                              '</td></tr>';


                                          }
                                           echo '
                                                </tbody>

                                              </table>';
                                        }
                                      ?>

                              </div>
                              <div align="Right">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg22"><i class="fa fa-edit"></i> Add</button>
                              </div>

                                <!-- modals -->
                                  <!-- Large modal -->
                                  <div class="modal fade bs-example-modal-lg22" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                      <div class="modal-content">
                                        <?php
                                        echo form_open('pegawai/input_pelatihan');
                                        ?>
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Tambah Pelatihan</h4>
                                        </div>
                                        <fieldset>
                                        <div class="modal-body col-md-12 col-sm-12">
                                            <h6>Nama Pelatihan <input name="nama_pelatihan" type="text" class="form-control" placeholder="Nama Pelatihan"></h6>

                                            <h6>Tanggal Mulai Pelatihan <input name="tanggal_mulai" type="date" class="form-control" placeholder="Tanggal Pelatihan"></h6>

                                            <h6>Tanggal Selesai Pelatihan <input name="tanggal_selesai" type="date" class="form-control" placeholder="Tanggal Selesai Pelatihan"></h6>

                                            <h6>Nama Penyelenggara <input name="nama_penyelenggara" type="text" class="form-control" placeholder="Nama Penyelenggara"></h6>


                                        </div>
                                        </fieldset>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button class="btn btn-primary source" onclick="new PNotify({
                                                      title: 'Regular Success',
                                                      text: 'That thing that you were trying to do worked!',
                                                      type: 'success'
                                                  });">Save changes
                                          </button>
                                        </div>
                                        <!--                                      FORM                                              -->
                                        <?php echo form_close(); ?>
                                        <!--                                      FORM                                              -->
                                      </div>
                                    </div>
                                  </div>

                            </div>
                          </div>
                        </div>
<!-- batas tambahan pelatihan -->



                    </div>

</div>
                  <!-- end of biodata karyawan-->


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
        include('v_footer.php');
        ?>

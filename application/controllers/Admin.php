<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if(!is_admin_logged_in()){
			redirect(base_url("login_admin"));
		}
	}

	public function index()
	{
		/* Load CSS */
		$data['css'] = array('select/select2.min.css',
									'datatables/jquery.dataTables.min.css',
									 'datatables/buttons.bootstrap.min.css',
									 'datatables/fixedHeader.bootstrap.min.css',
									 'datatables/responsive.bootstrap.min.css',
									 'datatables/scroller.bootstrap.min.css');

		/* Load Header */
		$this->load->view('v_header',$data);

		/* Load Content */
		$data['data']=$this->Data_Pegawai_model->get_all_only();
		$data['jumlah']=$this->Data_Pegawai_model->count_all();
		$data['jumlah_tetap']=$this->Data_Pegawai_model->count_tetap();
		$data['jumlah_honor']=$this->Data_Pegawai_model->count_honor();
		$data['jumlah_magang']=$this->Data_Pegawai_model->count_magang();
		$this->load->view('v_daftar_pegawai',$data);

		/* Load JS & IJS */
		$data['js'] = array('select/select2.full.js','moment/moment.min.js','datepicker/daterangepicker.js',
											'datatables/jquery.dataTables.min.js',
											'datatables/dataTables.bootstrap.js',
											'datatables/dataTables.buttons.min.js',
											'datatables/buttons.bootstrap.min.js',
											'datatables/jszip.min.js',
											'datatables/pdfmake.min.js',
											'datatables/vfs_fonts.js',
											'datatables/buttons.html5.min.js',
											'datatables/buttons.print.min.js',
											'datatables/dataTables.fixedHeader.min.js',
											'datatables/dataTables.keyTable.min.js',
											'datatables/dataTables.responsive.min.js',
											'datatables/responsive.bootstrap.min.js',
											'datatables/dataTables.scroller.min.js');
		$data['ijs'] = array('daftar_pegawai.js');

		/* Load Footer */
		$this->load->view('v_footer',$data);
	}

	public function delete_pegawai($id)
	{
		if ($this->Data_Pegawai_model->delete($id)) {
			$this->session->set_flashdata('success', 'Sukses Hapus Pegawai');
			redirect(base_url('admin'));
		}
	}

	public function registrasi_user()
	{
		/* Load CSS */
		$data['css'] = array();

		/* Load Header */
		$this->load->view('v_header',$data);

		/* Load Content */
		if ($this->input->post()) {
			$this->form_validation->set_rules('email','Email','trim|required|is_unique[user.email]');
			$this->form_validation->set_rules('password','Password','trim|required');
			if($this->form_validation->run() == FALSE){
				$this->load->view('v_registrasi_user');
			} else {
				$data = array('email' => $this->input->post("email"),
								'password' => md5($this->input->post("password")),
								'created_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')));
				if ($this->User_model->create($data)) {
					$this->session->set_flashdata('success', 'Sukses Registrasi User');
					redirect(base_url('admin/daftar_user'));
				} else {
					$this->load->view('v_registrasi_user');
				}
			}
		} else {
			$this->load->view('v_registrasi_user');
		}

		/* Load JS & IJS */
		$data['js'] = array();
		$data['ijs'] = array();

		/* Load Footer */
		$this->load->view('v_footer',$data);
	}

	public function daftar_user()
	{
		/* Load CSS */
		$data['css'] = array('select/select2.min.css',
									'datatables/jquery.dataTables.min.css',
									 'datatables/buttons.bootstrap.min.css',
									 'datatables/fixedHeader.bootstrap.min.css',
									 'datatables/responsive.bootstrap.min.css',
									 'datatables/scroller.bootstrap.min.css');

		/* Load Header */
		$this->load->view('v_header',$data);

		/* Load Content */
		$data['data']=$this->User_model->get_all();
		$this->load->view('v_daftar_user',$data);

		/* Load JS & IJS */
		$data['js'] = array('select/select2.full.js','moment/moment.min.js','datepicker/daterangepicker.js',
											'datatables/jquery.dataTables.min.js',
											'datatables/dataTables.bootstrap.js',
											'datatables/dataTables.buttons.min.js',
											'datatables/buttons.bootstrap.min.js',
											'datatables/jszip.min.js',
											'datatables/pdfmake.min.js',
											'datatables/vfs_fonts.js',
											'datatables/buttons.html5.min.js',
											'datatables/buttons.print.min.js',
											'datatables/dataTables.fixedHeader.min.js',
											'datatables/dataTables.keyTable.min.js',
											'datatables/dataTables.responsive.min.js',
											'datatables/responsive.bootstrap.min.js',
											'datatables/dataTables.scroller.min.js');
		$data['ijs'] = array('daftar_user.js');

		/* Load Footer */
		$this->load->view('v_footer',$data);
	}

	public function edit_user($id)
	{
		/* Load CSS */
		$data['css'] = array();

		/* Load Header */
		$this->load->view('v_header',$data);

		/* Load Content */
		if ($this->input->post()) {
			$this->form_validation->set_rules('email','Email','trim|required');
			if($this->form_validation->run() == FALSE){
				$data['data']=$this->User_model->get_single($id);
				$this->load->view('v_edit_user',$data);
			} else {
				$data = array();
				if ($this->input->post("password") == '') {
					$data = array('email' => $this->input->post("email"),
								'updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')));
				} else {
					$data = array('email' => $this->input->post("email"),
								'password' => md5($this->input->post("password")),
								'updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')));
				}
				if ($this->User_model->update($id,$data)) {
					$this->session->set_flashdata('success', 'Sukses Edit User');
					redirect(base_url('admin/daftar_user'));
				} else {
					$data['data']=$this->User_model->get_single($id);
					$this->load->view('v_edit_user',$data);
				}
			}
		} else {
			$data['data']=$this->User_model->get_single($id);
			$this->load->view('v_edit_user',$data);
		}

		/* Load JS & IJS */
		$data['js'] = array();
		$data['ijs'] = array();

		/* Load Footer */
		$this->load->view('v_footer',$data);
	}

	public function delete_user($id)
	{
		if ($this->User_model->delete($id)) {
			$this->session->set_flashdata('success', 'Sukses Hapus User');
			redirect(base_url('admin/daftar_user'));
		}
	}

	public function log_history()
	{
		$data['css'] = array('select/select2.min.css',
									'datatables/jquery.dataTables.min.css',
									 'datatables/buttons.bootstrap.min.css',
									 'datatables/fixedHeader.bootstrap.min.css',
									 'datatables/responsive.bootstrap.min.css',
									 'datatables/scroller.bootstrap.min.css');

		/* Load Header */
		$this->load->view('v_header',$data);

		/* Load Content */
		$data['log'] = $this->Log_history_model->get_all_only_byadmin();


		$this->load->view('v_log_history_admin',$data);

		/* Load JS & IJS */
		$data['js'] = array('select/select2.full.js','moment/moment.min.js','datepicker/daterangepicker.js',
											'datatables/jquery.dataTables.min.js',
											'datatables/dataTables.bootstrap.js',
											'datatables/dataTables.buttons.min.js',
											'datatables/buttons.bootstrap.min.js',
											'datatables/jszip.min.js',
											'datatables/pdfmake.min.js',
											'datatables/vfs_fonts.js',
											'datatables/buttons.html5.min.js',
											'datatables/buttons.print.min.js',
											'datatables/dataTables.fixedHeader.min.js',
											'datatables/dataTables.keyTable.min.js',
											'datatables/dataTables.responsive.min.js',
											'datatables/responsive.bootstrap.min.js',
											'datatables/dataTables.scroller.min.js');
		$data['ijs'] = array('log_history.js');

		/* Load Footer */
		$this->load->view('v_footer',$data);
	}

//---------------------------------USER-------------------------------------------
	// public function user_log_history($id)
	// {
	// 	$data['myid'] = $id;
	// 	$data['css'] = array('select/select2.min.css',
	// 								'datatables/jquery.dataTables.min.css',
	// 								 'datatables/buttons.bootstrap.min.css',
	// 								 'datatables/fixedHeader.bootstrap.min.css',
	// 								 'datatables/responsive.bootstrap.min.css',
	// 								 'datatables/scroller.bootstrap.min.css');

	// 	/* Load Header */
	// 	$this->load->view('v_header',$data);

	// 	/* Load Content */
	// 	$data['log'] = $this->Log_history_model->get_all_only_query($id);
	// 	$this->load->view('v_log_history_user_admin', $data);

	// 	/* Load JS & IJS */
	// 	$data['js'] = array('select/select2.full.js','moment/moment.min.js','datepicker/daterangepicker.js',
	// 										'datatables/jquery.dataTables.min.js',
	// 										'datatables/dataTables.bootstrap.js',
	// 										'datatables/dataTables.buttons.min.js',
	// 										'datatables/buttons.bootstrap.min.js',
	// 										'datatables/jszip.min.js',
	// 										'datatables/pdfmake.min.js',
	// 										'datatables/vfs_fonts.js',
	// 										'datatables/buttons.html5.min.js',
	// 										'datatables/buttons.print.min.js',
	// 										'datatables/dataTables.fixedHeader.min.js',
	// 										'datatables/dataTables.keyTable.min.js',
	// 										'datatables/dataTables.responsive.min.js',
	// 										'datatables/responsive.bootstrap.min.js',
	// 										'datatables/dataTables.scroller.min.js');
	// 	$data['ijs'] = array('log_history.js');

	// 	/* Load Footer */
	// 	$this->load->view('v_footer',$data);

	// }

	// public function user_beranda($id)
	// {
	// 	$result['myid'] = $id;
	// 	if(!$this->Data_Pegawai_model->id_exists($id)){
	// 		$data_pegawai = array(
	// 			'id' => $id,'id_user' => $id,
	// 			'nama_posisi' => NULL, 'lokasi_kerja' => NULL, 'unit_kerja' => NULL, 'psa' => NULL, 'nik' => NULL, 'level_eksis' => NULL, 'tanggal_level' => NULL, 'tanggal_mulai_kerja' => NULL, 'status_karyawan' => NULL, 'no_sk_kartap' => NULL,
	// 			'tanggal_kartap' => NULL, 'no_sk_promut' => NULL, 'tanggal_promut' => NULL, 'no_kontrak' => NULL, 'mli_kontrak' => NULL, 'end_kontrak' => NULL, 'status_nikah' => NULL, 'tanggal_nikah' => NULL, 'tang_kel' => NULL, 'no_kk' => NULL,
	// 			'nama_suami_or_istri' => NULL, 'nama_anak_1' => NULL, 'nama_anak_2' => NULL, 'nama_anak_3' => NULL, 'nama_ayah_kandung' => NULL, 'nama_ibu_kandung' => NULL, 'no_bpjs_kes' => NULL, 'no_bpjs_ket' => NULL, 'npwp' => NULL,
	// 			'nama_bank' => NULL, 'no_rekening' => NULL, 'nama_rekening' => NULL, 'lamp_foto_karyawan' => NULL, 'lamp_ktp' => NULL, 'lamp_sk_kartap' => NULL, 'lamp_sk_promut' => NULL, 'lamp_kontrak' => NULL, 'lamp_buku_nikah' => NULL,
	// 			'lamp_kk' => NULL, 'lamp_ktp_pasangan' => NULL, 'lamp_akta_lahir_anak' => NULL, 'lamp_bpjs_kes' => NULL, 'lamp_bpjs_tk' => NULL, 'lamp_kartu_npwp' => NULL, 'lamp_buku_rekening' => NULL, 'created_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')), 'updated_at' => NULL,
	// 			'nama_lengkap' => NULL, 'tempat_lahir' => NULL, 'tanggal_lahir' => NULL, 'agama' => NULL, 'sex' => NULL, 'gol_darah' => NULL, 'nomor_ktp' => NULL, 'email_telpro' => NULL,	'other_email' => NULL, 'alamat' => NULL, 'rt_rw' => NULL,
	// 			'des_kel' => NULL, 'kec' => NULL, 'kab_kot' => NULL, 'prov' => NULL,  'kode_pos' => NULL, 'no_hp' => NULL
	// 		);
	// 		$this->Data_Pegawai_model->create($data_pegawai);
	// 	}

	// 	$result['pegawai'] = $this->Data_Pegawai_model->get_single_only($id);
	// 	$result['provinsi'] = $this->Daerah_model->getProv();
	// 	$this->load->view('v_profile3_admin', $result);
	// }



























	public function log_history_admin($id)
	{
		$data['css'] = array('select/select2.min.css',
									'datatables/jquery.dataTables.min.css',
									 'datatables/buttons.bootstrap.min.css',
									 'datatables/fixedHeader.bootstrap.min.css',
									 'datatables/responsive.bootstrap.min.css',
									 'datatables/scroller.bootstrap.min.css');

		/* Load Header */
//		$this->load->view('v_header',$data);

		/* Load Content */
		$data['log'] = $this->Log_history_model->get_all_only_query($id);
		$data['user'] = $this->User_model->get_single($id);
		$data['pegawai'] = $this->Data_Pegawai_model->get_single_only($id);

		$data['myid'] = $id;
		$data['myuser'] = isset($data['pegawai']->nama_lengkap) ? $data['pegawai']->nama_lengkap : $data['user']->email;
		$data['myava'] = isset($data['pegawai']->nama_lengkap) ? $data['pegawai']->nama_lengkap : $data['user']->email;


		$this->load->view('v_log_history_user_admin',$data);

		/* Load JS & IJS */
		$data['js'] = array('select/select2.full.js','moment/moment.min.js','datepicker/daterangepicker.js',
											'datatables/jquery.dataTables.min.js',
											'datatables/dataTables.bootstrap.js',
											'datatables/dataTables.buttons.min.js',
											'datatables/buttons.bootstrap.min.js',
											'datatables/jszip.min.js',
											'datatables/pdfmake.min.js',
											'datatables/vfs_fonts.js',
											'datatables/buttons.html5.min.js',
											'datatables/buttons.print.min.js',
											'datatables/dataTables.fixedHeader.min.js',
											'datatables/dataTables.keyTable.min.js',
											'datatables/dataTables.responsive.min.js',
											'datatables/responsive.bootstrap.min.js',
											'datatables/dataTables.scroller.min.js');
		$data['ijs'] = array('log_history.js');

		/* Load Footer */
		$this->load->view('v_footer',$data);

	}

	public function beranda($id)
	{
		if(!$this->Data_Pegawai_model->id_exists($id)){
			$data_pegawai = array(
				'id' => $id,'id_user' => $id,
				'nama_posisi' => NULL, 'lokasi_kerja' => NULL, 'unit_kerja' => NULL, 'psa' => NULL, 'nik' => NULL, 'level_eksis' => NULL, 'tanggal_level' => NULL, 'tanggal_mulai_kerja' => NULL, 'status_karyawan' => NULL, 'no_sk_kartap' => NULL,
				'tanggal_kartap' => NULL, 'no_sk_promut' => NULL, 'tanggal_promut' => NULL, 'no_kontrak' => NULL, 'mli_kontrak' => NULL, 'end_kontrak' => NULL, 'status_nikah' => NULL, 'tanggal_nikah' => NULL, 'tang_kel' => NULL, 'no_kk' => NULL,
				'nama_suami_or_istri' => NULL, 'nama_anak_1' => NULL, 'nama_anak_2' => NULL, 'nama_anak_3' => NULL, 'nama_ayah_kandung' => NULL, 'nama_ibu_kandung' => NULL, 'no_bpjs_kes' => NULL, 'no_bpjs_ket' => NULL, 'npwp' => NULL,
				'nama_bank' => NULL, 'no_rekening' => NULL, 'nama_rekening' => NULL, 'lamp_foto_karyawan' => NULL, 'lamp_ktp' => NULL, 'lamp_sk_kartap' => NULL, 'lamp_sk_promut' => NULL, 'lamp_kontrak' => NULL, 'lamp_buku_nikah' => NULL,
				'lamp_kk' => NULL, 'lamp_ktp_pasangan' => NULL, 'lamp_akta_1' => NULL, 'lamp_akta_2' => NULL, 'lamp_akta_3' => NULL, 'lamp_bpjs_kes' => NULL, 'lamp_bpjs_tk' => NULL, 'lamp_kartu_npwp' => NULL, 'lamp_buku_rekening' => NULL, 'created_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')), 'updated_at' => NULL,
				'nama_lengkap' => NULL, 'tempat_lahir' => NULL, 'tanggal_lahir' => NULL, 'agama' => NULL, 'sex' => NULL, 'gol_darah' => NULL, 'nomor_ktp' => NULL, 'email_telpro' => NULL,	'other_email' => NULL, 'alamat' => NULL, 'rt_rw' => NULL,
				'des_kel' => NULL, 'kec' => NULL, 'kab_kot' => NULL, 'prov' => NULL,  'kode_pos' => NULL, 'no_hp' => NULL
			);
			$this->Data_Pegawai_model->create($data_pegawai);
		}

		$result['pendidikan'] = $this->Data_Pegawai_model->get_single_pendidikan($id);
		$result['pelatihan'] = $this->Data_Pegawai_model->get_single_pelatihan($id);

		$result['pegawai'] = $this->Data_Pegawai_model->get_single_only($id);
		$result['user'] = $this->User_model->get_single($id);
		$result['myid'] = $id;
		$result['myuser'] = isset($result['pegawai']->nama_lengkap) ? $result['pegawai']->nama_lengkap : $result['user']->email;

		$result['cek_pendidikan'] = $this->Pendidikan_model->id_exists($id);
		$result['cek_pelatihan'] = $this->Pelatihan_model->id_exists($id);

		$result['provinsi'] = $this->Daerah_model->getProv();

		$this->load->view('v_profile3_admin', $result);
	}

	function input_data_diri()
	{
		$nama = $this->input->post('nama');
		$tmpt_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tanggal_lahir');
		$agama = $this->input->post('agama');
		$sex = $this->input->post('jenis_kelamin');
		$gol_dar = $this->input->post('golongan_darah');
		$no_ktp = $this->input->post('nomor_ktp');
		$e_telpro = $this->input->post('email_telpro');
		$other_e = $this->input->post('other_email');
		$almt = $this->input->post('alamat_domisili');
		$rt_rw = $this->input->post('rt_rw');
		$des_kel = $this->input->post('desa_kelurahan');
		$kec = $this->input->post('kecamatan');
		$kab_kot = ucwords($this->input->post('kabupaten_kota'));
		$prov = $this->input->post('provinsi');
		$kd_pos = $this->input->post('kode_pos');
		$no_hp = $this->input->post('nomor_handphone');

		$data['baru'] = array(
        'nama_lengkap' => $nama,
        'tempat_lahir' => $tmpt_lahir,
        'tanggal_lahir' => $tgl_lahir,
        'agama' => $agama,
        'sex' => $sex,
        'gol_darah' => $gol_dar,
        'nomor_ktp' => $no_ktp,
				'email_telpro' => $e_telpro,
				'other_email' => $other_e,
        'alamat' => $almt,
        'rt_rw' => $rt_rw,
        'des_kel' => $des_kel,
        'kec' => $kec,
        'kab_kot' => $kab_kot,
        'prov' => $prov,
        'kode_pos' => $kd_pos,
	      'no_hp' => $no_hp
		);
		$data['lama'] = $this->Data_Pegawai_model->get_single_only_rowarray($id);

		$set = array_diff_assoc($data['baru'],$data['lama']);

		if(isset($set['des_kel'])){
			$set['des_kel'] = $this->Daerah_model->getKel_byKel($set['des_kel'])['nama'];
		}
		if(isset($set['kec'])){
			$set['kec'] = $this->Daerah_model->getKec_byKec($set['kec'])['nama'];
		}
		if(isset($set['kab_kot'])){
			$set['kab_kot'] = $this->Daerah_model->getKab_byKab($set['kab_kot'])['nama'];
		}
		if(isset($set['prov'])){
			$set['prov'] = $this->Daerah_model->getProv_byProv($set['prov'])['nama'];
		}

		$result=array_keys($set);
		$result2=array_values($set);

		$hoho = array(
			'nama_posisi' => "Nama Posisi", 'lokasi_kerja' => 'Lokasi Kerja', 'unit_kerja' => 'Unit Kerja', 'psa' => 'PSA', 'nik' => 'NIK', 'level_eksis' => 'Level Eksis', 'tanggal_level' => 'Tanggal Level', 'tanggal_mulai_kerja' => 'Tanggal Mulai Kerja', 'status_karyawan' => 'Status Karyawan', 'no_sk_kartap' => 'Nomor SK Pengangkatan KARTAP',
			'tanggal_kartap' => 'Tanggal Kartap', 'no_sk_promut' => 'No SK PROMUT', 'tanggal_promut' => 'Tanggal PROMUT', 'no_kontrak' => 'Nomor Kontrak', 'mli_kontrak' => 'MLI Kontrak', 'end_kontrak' => 'End Kontrak', 'status_nikah' => 'Status Nikah', 'tanggal_nikah' => 'Tanggal Nikah', 'tang_kel' => 'Tang Kel', 'no_kk' => 'No KK',
			'nama_suami_or_istri' => 'Nama Pasangan', 'nama_anak_1' => 'Nama Anak 1', 'nama_anak_2' => 'Nama Anak 2', 'nama_anak_3' => 'Nama Anak 3', 'nama_ayah_kandung' => 'Nama Ayah', 'nama_ibu_kandung' => 'Nama Ibu', 'no_bpjs_kes' => 'Nomor BPJS Kesehatan', 'no_bpjs_ket' => 'Nomor BPJS Ketenagakerjaan', 'npwp' => 'No NPWP',
			'nama_bank' => 'Nama Bank', 'no_rekening' => 'No Rekening', 'nama_rekening' => 'Nama Rekening', 'nama_lengkap' => 'Nama Lengkap', 'tempat_lahir' => 'Tempat Lahir', 'tanggal_lahir' => 'Tanggal Lahir', 'agama' => 'Agama', 'sex' => 'Jenis Kelamin', 'gol_darah' => 'Golongan Darah', 'nomor_ktp' => 'Nomor KTP', 'email_telpro' => 'Email Telpro',	'other_email' => 'Email Lain', 'alamat' => 'Alamat', 'rt_rw' => 'RT/RW',
			'des_kel' => 'Desa/Kelurahan', 'kec' => 'Kecamatan', 'kab_kot' => 'Kabupaten/Kota', 'prov' => 'Provinsi',  'kode_pos' => 'Kode Pos', 'no_hp' => 'no HP'
		);
		$ar = array();
		foreach ($result as $key) {
			array_push($ar,$hoho[$key]);
		}


		if(count($result)>0){
			$data['log'] = array(
				'id_pegawai'			=> $id,
						'db_index'		=> implode(",", $ar),
						'deskripsi'		=> implode(",", $result2),
						'link'				=> NULL,
						'updated_at'	=> mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar'))
			);

			$this->Log_history_model->create($data['log']);
			$data['baru']['updated_at'] =	mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar'));
			$this->Data_Pegawai_model->update($id,$data['baru']);
			redirect(base_url('admin/beranda/'.$id));
		}else{
			redirect(base_url('admin/beranda/'.$id));
		}
// IDMARIL EDIT
	}


	function input_data_keluarga($id)
	{
		$status_nikah = $this->input->post('status_nikah');
		$tgl_nikah = $this->input->post('tanggal_nikah');
		$tang_kel = $this->input->post('tang_kel');
		$no_kk = $this->input->post('no_kk');
		$nama_pasangan = $this->input->post('nama_suami_or_istri');
		$anak1 = $this->input->post('nama_anak_1');
		$anak2 = $this->input->post('nama_anak_2');
		$anak3 = $this->input->post('nama_anak_3');
		$ayah = $this->input->post('nama_ayah_kandung');
		$ibu = $this->input->post('nama_ibu_kandung');

		$data = array(
        'status_nikah' => $status_nikah,
        'tanggal_nikah' => $tgl_nikah,
        'tang_kel' => $tang_kel,
        'no_kk' => $no_kk,
        'nama_suami_or_istri' => $nama_pasangan,
        'nama_anak_1' => $anak1,
        'nama_anak_2' => $anak2,
		'nama_anak_3' => $anak3,
		'nama_ayah_kandung' => $ayah,
        'nama_ibu_kandung' => $ibu,
		'updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar'))
		);

		$result = $this->Data_Pegawai_model->update($id,$data);
		redirect(base_url('admin/beranda/'.$id));
	}

	function input_data_pekerjaan($id)
	{
		$nik = $this->input->post('nik');
		$nama_posisi = $this->input->post('nama_posisi');
		$lokasi_kerja = $this->input->post('lokasi_kerja');
		$unit_kerja = $this->input->post('unit_kerja');
		$psa = $this->input->post('psa');
		$level_eksis = $this->input->post('level_eksis');
		$tanggal_level = $this->input->post('tanggal_level');
		$tanggal_mulai_kerja = $this->input->post('tanggal_mulai_kerja');
		$status_karyawan = $this->input->post('status_karyawan');
		$no_sk_kartap = $this->input->post('sk_kartap');
		$tanggal_kartap = $this->input->post('tanggal_kartap');
		$no_sk_promut = $this->input->post('sk_promut');
		$tanggal_promut = $this->input->post('tanggal_promut');
		$no_kontrak = $this->input->post('no_kontrak');
		$mli_kontrak = $this->input->post('mli_kontrak');
		$end_kontrak = $this->input->post('end_kontrak');

		$data = array(
        'nik' => $nik,
        'nama_posisi' => $nama_posisi,
        'lokasi_kerja' => $lokasi_kerja,
        'unit_kerja' => $unit_kerja,
        'psa' => $psa,
        'level_eksis' => $level_eksis,
        'tanggal_level' => $tanggal_level,
        'tanggal_mulai_kerja' => $tanggal_mulai_kerja,
        'status_karyawan' => $status_karyawan,
        'no_sk_kartap' => $no_sk_kartap,
        'tanggal_kartap' => $tanggal_kartap,
        'no_sk_promut' => $no_sk_promut,
        'tanggal_promut' => $tanggal_promut,
        'no_kontrak' => $no_kontrak,
        'mli_kontrak' => $mli_kontrak,
        'end_kontrak' => $end_kontrak,
		'updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar'))
		);

		$result = $this->Data_Pegawai_model->update($id,$data);
		redirect(base_url('admin/beranda/'.$id));
	}

	function input_data_lainnya($id)
	{
		$no_bpjs_kes = $this->input->post('no_bpjs_kes');
		$no_bpjs_ket = $this->input->post('no_bpjs_ket');
		$npwp = $this->input->post('npwp');
		$nama_bank = $this->input->post('nama_bank');
		$no_rekening = $this->input->post('no_rekening');
		$nama_rekening = $this->input->post('nama_rekening');

		$data = array(
        'no_bpjs_kes' => $no_bpjs_kes,
        'no_bpjs_ket' => $no_bpjs_ket,
        'npwp' => $npwp,
        'nama_bank' => $nama_bank,
        'no_rekening' => $no_rekening,
        'nama_rekening' => $nama_rekening,
		'updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar'))
		);

		$result = $this->Data_Pegawai_model->update($id,$data);
		redirect(base_url('admin/beranda/'.$id));
	}

	function input_pendidikan($id)
	{
		$jenjang = $this->input->post('jenjang');
		$institusi = $this->input->post('institusi');
		$jurusan = $this->input->post('jurusan');
		$tahun_lulus = $this->input->post('tahun_lulus');

		$data = array(
        'id_pegawai' => $id,
        'jenjang' => $jenjang,
        'institusi' => $institusi,
        'jurusan' => $jurusan,
        'tahun_lulus' => $tahun_lulus
		);

		$result = $this->Pendidikan_model->create($data);
		redirect(base_url('admin/beranda/'.$id));
	}

	function input_pelatihan($id)
	{
		$nama_pelatihan = $this->input->post('nama_pelatihan');
		$tanggal_mulai = $this->input->post('tanggal_mulai');
		$tanggal_selesai = $this->input->post('tanggal_selesai');
		$nama_penyelenggara = $this->input->post('nama_penyelenggara');

		$data = array(
        'id_pegawai' => $id,
        'nama_pelatihan' => $nama_pelatihan,
        'tanggal_mulai' => $tanggal_mulai,
        'tanggal_selesai' => $tanggal_selesai,
        'nama_penyelenggara' => $nama_penyelenggara
		);

		$result = $this->Pelatihan_model->create($data);
		redirect(base_url('admin/beranda/'.$id));
		// $data_pelatihan = array(
  //       'id_pegawai' => $this->session->userdata('id'),
  //       'nama_pelatihan' => $nama_pelatihan,
  //       'tanggal_mulai' => $tanggal_mulai,
  //       'tanggal_selesai' => $tanggal_selesai,
  //       'nama_penyelenggara' => $nama_penyelenggara
		// );

		// $data_updated = array(
		// 'updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar'))
		// );

		// $result_pelatiahan = $this->Pelatihan_model->create($data_pelatihan);
		// $result_updated = $this->Data_Pegawai_model->update($this->session->userdata('id'),$data_updated);
		// redirect(base_url('admin/beranda/'.$id));
	}

	function input_ktp($id)
	{
		$config['upload_path'] 			= './assets/upload/ktp/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1024000;
		$config['file_name']			= 'ktp_' . $id . '_' . now('Asia/Makassar');
		$this->load->library('upload', $config);

		if($this->upload->do_upload('lamp_ktp')){
			$data = array('updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')),
							'lamp_ktp' => $config['file_name'].$this->upload->data('file_ext'));
			$result = $this->Data_Pegawai_model->update($id,$data);
			redirect(base_url('admin/beranda/'.$id));
		}

		// $success = true;

		// if (!$this->upload->do_upload('lamp_ktp')) {
		// 	$data['error_file']  = $this->upload->display_errors();
		// 	$success = false;
		// }

		// if (!$this->form_validation->run() === TRUE) {
		// 	$success = false;
		// }

		// if($success){
		// 	$data = array('updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')),
		// 					'lamp_ktp' => $config['file_name'].$this->upload->data('file_ext'));
		// 	var_dump($data);
		// 	$result = $this->Data_Pegawai_model->update($this->session->userdata('id'),$data);
		// 	var_dump($result);
		// 	redirect(base_url('admin/beranda/'.$id));
		// }
	}

	function input_sk_kartap($id)
	{
		$config['upload_path'] 			= './assets/upload/sk_kartap/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1024000;
		$config['file_name']			= 'sk_kartap_' . $id . '_' . now('Asia/Makassar');
		$this->load->library('upload', $config);

		if($this->upload->do_upload('lamp_sk_kartap')){
			$data = array('updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')),
							'lamp_sk_kartap' => $config['file_name'].$this->upload->data('file_ext'));
			$result = $this->Data_Pegawai_model->update($id,$data);
			redirect(base_url('admin/beranda/'.$id));
		}
	}

	function input_sk_promut($id)
	{
		$config['upload_path'] 			= './assets/upload/sk_promut/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1024000;
		$config['file_name']			= 'sk_promut_' . $id . '_' . now('Asia/Makassar');
		$this->load->library('upload', $config);

		if($this->upload->do_upload('lamp_sk_promut')){
			$data = array('updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')),
							'lamp_sk_promut' => $config['file_name'].$this->upload->data('file_ext'));
			$result = $this->Data_Pegawai_model->update($id,$data);
			redirect(base_url('admin/beranda/'.$id));
		}
	}

	function input_lamp_kontrak($id)
	{
		$config['upload_path'] 			= './assets/upload/lamp_kontrak/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1024000;
		$config['file_name']			= 'lamp_kontrak_' . $this->session->userdata('id') . '_' . now('Asia/Makassar');
		$this->load->library('upload', $config);

		if($this->upload->do_upload('lamp_kontrak')){
			$data = array('updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')),
							'lamp_kontrak' => $config['file_name'].$this->upload->data('file_ext'));
			$result = $this->Data_Pegawai_model->update($id,$data);
			redirect(base_url('admin/beranda/'.$id));
		}
	}

	function input_buku_nikah($id)
	{
		$config['upload_path'] 			= './assets/upload/buku_nikah/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1024000;
		$config['file_name']			= 'buku_nikah_' . $id . '_' . now('Asia/Makassar');
		$this->load->library('upload', $config);

		if($this->upload->do_upload('lamp_buku_nikah')){
			$data = array('updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')),
							'lamp_buku_nikah' => $config['file_name'].$this->upload->data('file_ext'));
			$result = $this->Data_Pegawai_model->update($id,$data);
			redirect(base_url('admin/beranda/'.$id));
		}
	}

	function input_kk($id)
	{
		$config['upload_path'] 			= './assets/upload/kk/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1024000;
		$config['file_name']			= 'kk_' . $id . '_' . now('Asia/Makassar');
		$this->load->library('upload', $config);

		if($this->upload->do_upload('lamp_kk')){
			$data = array('updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')),
							'lamp_kk' => $config['file_name'].$this->upload->data('file_ext'));
			$result = $this->Data_Pegawai_model->update($id,$data);
			redirect(base_url('admin/beranda/'.$id));
		}
	}

	function input_ktp_pasangan($id)
	{
		$config['upload_path'] 			= './assets/upload/ktp_pasangan/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1024000;
		$config['file_name']			= 'ktp_pasangan_' . $id . '_' . now('Asia/Makassar');
		$this->load->library('upload', $config);

		if($this->upload->do_upload('lamp_ktp_pasangan')){
			$data = array('updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')),
							'lamp_ktp_pasangan' => $config['file_name'].$this->upload->data('file_ext'));
			$result = $this->Data_Pegawai_model->update($id,$data);
			redirect(base_url('admin/beranda/'.$id));
		}
	}

	function input_akta_1($id)
	{
		$config['upload_path'] 			= './assets/upload/akta_1/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1024000;
		$config['file_name']			= 'akta_1_' . $id . '_' . now('Asia/Makassar');
		$this->load->library('upload', $config);

		if($this->upload->do_upload('lamp_akta_1')){
			$data = array('updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')),
							'lamp_akta_1' => $config['file_name'].$this->upload->data('file_ext'));
			$result = $this->Data_Pegawai_model->update($id,$data);
			redirect(base_url('admin/beranda/'.$id));
		}
	}

	function input_akta_2($id)
	{
		$config['upload_path'] 			= './assets/upload/akta_2/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1024000;
		$config['file_name']			= 'akta_2_' . $id . '_' . now('Asia/Makassar');
		$this->load->library('upload', $config);

		if($this->upload->do_upload('lamp_akta_2')){
			$data = array('updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')),
							'lamp_akta_2' => $config['file_name'].$this->upload->data('file_ext'));
			$result = $this->Data_Pegawai_model->update($id,$data);
			redirect(base_url('admin/beranda/'.$id));
		}
	}

	function input_akta_3($id)
	{
		$config['upload_path'] 			= './assets/upload/akta_3/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1024000;
		$config['file_name']			= 'akta_3_' . $id . '_' . now('Asia/Makassar');
		$this->load->library('upload', $config);

		if($this->upload->do_upload('lamp_akta_3')){
			$data = array('updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')),
							'lamp_akta_3' => $config['file_name'].$this->upload->data('file_ext'));
			$result = $this->Data_Pegawai_model->update($id,$data);
			redirect(base_url('admin/beranda/'.$id));
		}
	}

	function input_bpjs_kes($id)
	{
		$config['upload_path'] 			= './assets/upload/bpjs_kes/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1024000;
		$config['file_name']			= 'bpjs_kes_' . $id . '_' . now('Asia/Makassar');
		$this->load->library('upload', $config);

		if($this->upload->do_upload('lamp_bpjs_kes')){
			$data = array('updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')),
							'lamp_bpjs_kes' => $config['file_name'].$this->upload->data('file_ext'));
			$result = $this->Data_Pegawai_model->update($id,$data);
			redirect(base_url('admin/beranda/'.$id));
		}
	}

	function input_bpjs_ket($id)
	{
		$config['upload_path'] 			= './assets/upload/bpjs_ket/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1024000;
		$config['file_name']			= 'bpjs_ket_' . $id . '_' . now('Asia/Makassar');
		$this->load->library('upload', $config);

		if($this->upload->do_upload('lamp_bpjs_tk')){
			$data = array('updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')),
							'lamp_bpjs_tk' => $config['file_name'].$this->upload->data('file_ext'));
			$result = $this->Data_Pegawai_model->update($id,$data);
			redirect(base_url('admin/beranda/'.$id));
		}
	}

	function input_npwp($id)
	{
		$config['upload_path'] 			= './assets/upload/npwp/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1024000;
		$config['file_name']			= 'npwp_' . $id . '_' . now('Asia/Makassar');
		$this->load->library('upload', $config);

		if($this->upload->do_upload('lamp_kartu_npwp')){
			$data = array('updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')),
							'lamp_kartu_npwp' => $config['file_name'].$this->upload->data('file_ext'));
			$result = $this->Data_Pegawai_model->update($id,$data);
			redirect(base_url('admin/beranda/'.$id));
		}
	}

	function input_buku_rek($id)
	{
		$config['upload_path'] 			= './assets/upload/buku_rekening/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1024000;
		$config['file_name']			= 'buku_rekening_' . $id . '_' . now('Asia/Makassar');
		$this->load->library('upload', $config);

		if($this->upload->do_upload('lamp_buku_rekening')){
			$data = array('updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')),
							'lamp_buku_rekening' => $config['file_name'].$this->upload->data('file_ext'));
			$result = $this->Data_Pegawai_model->update($id,$data);
			redirect(base_url('admin/beranda/'.$id));
		}
	}

	function input_lamp_pendidikan($id)																						//tambahan
	{
		$config['upload_path'] 			= './assets/upload/pendidikan/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1024000;
		$config['file_name']			= 'pendidikan_' . $id . '_' . now('Asia/Makassar');
		$this->load->library('upload', $config);

		if($this->upload->do_upload('ijazah')){
			$data = array('lamp_ijazah' => $config['file_name'].$this->upload->data('file_ext'));
			$result = $this->Pendidikan_model->update($id,$data);
			redirect(base_url('pegawai'));
		}
	}

	function open_lamp_pendidikan($id)																						//tambahan
	{
		$data['data']=$this->Pendidikan_model->get_single($id);
		$this->load->view('v_input_lampiran_pendidikan',$data);
	}

	function input_lamp_pelatihan($id)																						//tambahan
	{
		$config['upload_path'] 			= './assets/upload/pelatihan/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1024000;
		$config['file_name']			= 'pelatihan_' . $id . '_' . now('Asia/Makassar');
		$this->load->library('upload', $config);

		if($this->upload->do_upload('sertifikat')){
			$data = array('lampiran_pelatihan' => $config['file_name'].$this->upload->data('file_ext'));
			$result = $this->Pelatihan_model->update($id,$data);
			redirect(base_url('pegawai'));
		}
	}

	function open_lamp_pelatihan($id)																							//tambahan
	{
		$data['data']=$this->Pelatihan_model->get_single($id);
		$this->load->view('v_input_lampiran_pelatihan',$data);
	}

	function edit_pendidikan($id)																									//tambahan
	{
		if ($this->input->post()) {
			$jenjang = $this->input->post('jenjang');
			$institusi = $this->input->post('institusi');
			$jurusan = $this->input->post('jurusan');
			$tahun_lulus = $this->input->post('tahun_lulus');

			$data = array(
	        'id_pegawai' => $id,
	        'jenjang' => $jenjang,
	        'institusi' => $institusi,
	        'jurusan' => $jurusan,
	        'tahun_lulus' => $tahun_lulus
			);

			$result = $this->Pendidikan_model->update($id,$data);
			redirect(base_url('pegawai'));
		} else {
			$data['data']=$this->Pendidikan_model->get_single($id);
			$this->load->view('v_edit_pendidikan',$data);
		}
	}

	function edit_pelatihan($id)																									//tambahan
	{
		if ($this->input->post()) {
			$nama_pelatihan = $this->input->post('nama_pelatihan');
			$tanggal_mulai = $this->input->post('tanggal_mulai');
			$tanggal_selesai = $this->input->post('tanggal_selesai');
			$nama_penyelenggara = $this->input->post('nama_penyelenggara');

			$data = array(
	        'id_pegawai' => $id,
	        'nama_pelatihan' => $nama_pelatihan,
	        'tanggal_mulai' => $tanggal_mulai,
	        'tanggal_selesai' => $tanggal_selesai,
	        'nama_penyelenggara' => $nama_penyelenggara
			);

			$result = $this->Pelatihan_model->update($id,$data);
			redirect(base_url('pegawai'));
		} else {
			$data['data']=$this->Pelatihan_model->get_single($id);
			$this->load->view('v_edit_pelatihan',$data);
		}
	}

	function input_foto_ava($id)
	{
		$config['upload_path'] 			= './assets/upload/foto_ava/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 1024000;
		$config['file_name']			= 'foto_ava_' . $id . '_' . now('Asia/Makassar');
		$this->load->library('upload', $config);

		if($this->upload->do_upload('avatar_file')){
			$data = array('updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar')),
							'foto_ava' => $config['file_name'].$this->upload->data('file_ext'));
			$result = $this->User_model->update($id,$data);
			redirect(base_url('admin/beranda/'.$id));
		}
	}














//---------------------------------USER-------------------------------------------

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}

}

<?php

class Upload extends CI_Controller{

	function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
	}

	public function index(){
		$this->load->view('v_upload', array('error' => ' ' ));
	}

	public function aksi_upload(){
		$config['upload_path']          = 'assets/images/lampiran/';
		$config['allowed_types']        = 'tiff|tif|jpg|png|pdf';
		$config['max_size']             = 500;
		$config['file_name']            = $milliseconds = round(microtime(true) * 1000);

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_upload', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
      var_dump($data);
      print_r($data['upload_data']['file_name']);
		}
	}

	public function action_upload($no){
		$config['upload_path']          = 'assets/images/lampiran/';
		$config['allowed_types']        = 'tiff|tif|jpg|png|pdf';
		$config['max_size']             = 500;
		$config['file_name']            = $milliseconds = round(microtime(true) * 1000);

		$this->load->library('upload', $config);

		$arrayName = array('ktp', 'sk_kartap', 'sk_promut', 'lamp_kontrak', 'buku_nikah', 'kartu_keluarga', 'ktp_pasangan', 'akta_lahir_anak_1', 'akta_lahir_anak_2', 'akta_lahir_anak_3', 'bpjs_kesehatan', 'bpjs_ketenagakerjaan', 'kartu_npwp', 'buku_rekening', 'ijazah');

		if(!$this->upload->do_upload($text)){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_upload', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
		  var_dump($data);
		  print_r($data['upload_data']['file_name']);
		}


	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if(is_user_logged_in()){
			redirect(base_url("Pegawai"));
		}
	}

	public function index()
	{
		if ($this->input->post()) {
			$this->form_validation->set_rules('username','Username','trim|required');
			$this->form_validation->set_rules('password','Password','trim|required');
			if($this->form_validation->run() == FALSE){
				$this->load->view('v_login');
			} else {
				if ($this->User_model->check_login()) {
					$data = array(
						'updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar'))
					);
					$result = $this->User_model->update($this->session->userdata('id'),$data);
					print_r($result);
					redirect(base_url('pegawai'));
				} else {
					$msg['pesan'] = "username atau password salah";
				 	$this->load->view('v_login', $msg);
				}
			}
		} else {
			$this->load->view('v_login');
		}
	}

}

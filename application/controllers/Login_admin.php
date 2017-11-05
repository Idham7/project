<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if(is_admin_logged_in()){
			redirect(base_url("Admin"));
		}
	}

	function index()
	{
			if ($this->input->post()) {
			$this->form_validation->set_rules('username','Username','trim|required');
			$this->form_validation->set_rules('password','Password','trim|required');
			if($this->form_validation->run() == FALSE){
				$this->load->view('v_login_admin');
			} else {
				if ($this->Admin_model->check_login()) {
					print_r('test');
					$data = array(
						'updated_at' => mdate('%Y-%m-%d %H:%i:%s',now('Asia/Makassar'))
					);
					$result = $this->Admin_model->update($this->session->userdata('id'), $data);
					redirect(base_url('admin'));
				} else {
					print_r('yoo');
					$msg['pesan'] = "username atau password salah";
					$this->load->view('v_login_admin', $msg);
				}
			}
		} else {
			$this->load->view('v_login_admin');
		}
	}

}

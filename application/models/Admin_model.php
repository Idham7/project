<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function __construct(){
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function check_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->db->select('*')->from('admin');
        $this->db->where('username',$username)
                  ->where('password',md5($password))
                  ->limit(1);

        $query = $this->db->get();
        $result = $query->row();

        if (isset($result)) {
            $userdata = array(
              'id'        => $result->id,
              'email'     => $result->username,
              'foto_avatar'=> 'user.png',
              'role'      => 'admin',
              'logged_in' => TRUE
            );

            $this->session->set_userdata($userdata);
            return true;
        }
        return false;
    }

    public function create($data){
        if($this->db->insert('admin',$data)){
            return true;
        }
        return false;
    }

    public function get_all(){
        return $this->db->select('*')->from('admin')->order_by('updated_at','DESC')->get()->result();
    }

    public function get_single($id){
        return $this->db->get_where('admin',array('id'=>$id))->row();
    }

    public function update($id,$data){
        $this->db->where('id',$id);
        $this->db->update('admin', $data);
        return true;
    }

    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('admin');
        return true;
    }

}

?>

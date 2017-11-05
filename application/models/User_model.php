<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct(){
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function check_login(){
        $user = $this->input->post('username');
        $password = $this->input->post('password');
        
        $this->db->select('*')->from('user');
        $this->db->where('email',$user)
                  ->where('password',md5($password))
                  ->limit(1);

        $query = $this->db->get();
        $result = $query->row();

        if (isset($result)) {
            $foto_avatar = $result->foto_avatar != null ? $result->foto_avatar : 'user.png';
            $userdata = array(
              'id'          => $result->id,
              'email'       => $result->email,
              'foto_avatar' => $foto_avatar,
              'role' => 'user',
              'logged_in'   => TRUE
            );

            $this->session->set_userdata($userdata);
            return true;
        }
        return false;
    }

    public function create($data){
        if($this->db->insert('user',$data)){
            return true;
        }
        return false;
    }

    public function get_all(){
        return $this->db->select('*')->from('user')->order_by('updated_at','DESC')->get()->result();
    }

    public function get_single($id){
        return $this->db->get_where('user',array('id'=>$id))->row();
    }

    public function update($id,$data){
        $this->db->where('id',$id);
        $this->db->update('user', $data);
        return true;
    }

    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('user');
        return true;
    }
}

?>

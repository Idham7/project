<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelatihan_model extends CI_Model {

    public function __construct(){
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function create($data){
        if($this->db->insert('pelatihan',$data)){
            return true;
        } 
        return false;
    }

    public function get_all(){
        return $this->db->select('*')->from('pelatihan')->get()->result(); 
    }

    public function get_single($id){
        return $this->db->get_where('pelatihan',array('id'=>$id))->row();
    }

    public function update($id,$data){
        $this->db->where('id',$id);
        $this->db->update('pelatihan',$data);
        return true;
    }

    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('pelatihan');
        return true;
    }

    public function id_exists($id)
    {
        $query = $this->db->get_where('pelatihan',array('id_pegawai'=>$id));
        if ($query->num_rows() > 0)
            return true;
        else
            return false;
    }

}

?>

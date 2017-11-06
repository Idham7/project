<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan_model extends CI_Model {

    public function __construct(){
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function create($data){
        if($this->db->insert('pendidikan',$data)){
            return true;
        }
        return false;
    }

    public function get_all(){
        return $this->db->select('*')->from('pendidikan')->get()->result();
    }

    public function get_single($id){
        return $this->db->get_where('pendidikan',array('id'=>$id))->row();
    }

    public function get_single_only_rowarray($id){
      return $this->db->get_where('pendidikan',array('id'=>$id))->row_array();
    }

    public function update($id,$data){
        $this->db->where('id',$id);
        $this->db->update('pendidikan',$data);
        return true;
    }

    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('pendidikan');
        return true;
    }

    public function id_exists($id)
    {
        $query = $this->db->get_where('pendidikan',array('id_pegawai'=>$id));
        if ($query->num_rows() > 0)
            return true;
        else
            return false;
    }

}

?>

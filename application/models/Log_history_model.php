<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// IDMARIL EDIT BUKA
class Log_History_model extends CI_Model {

    public function __construct(){
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function create($data){
        if($this->db->insert('log_history',$data)){
            return true;
        }
        return false;
    }

    public function get_all_only_byadmin(){
        $sql = "SELECT data_pegawai.nama_lengkap, log_history.* FROM log_history JOIN data_pegawai
        ON log_history.id_pegawai = data_pegawai.id_user ORDER BY log_history.updated_at DESC";
        return $this->db->query($sql)->result();
    }

    //
    // public function get_all_only_query($id){
    //   return $this->db->get_where('log_history', $id)->order_by('updated_at','DESC')->result();
    // }


    public function get_all_only_query($id){
      $sql = "SELECT * FROM log_history WHERE id_pegawai = ? ORDER BY updated_at Desc";
      return $this->db->query($sql, array($id))->result();
    }

    public function get_single_only($id){
        return $this->db->get_where('log_history',array('id'=>$id))->row();
    }

    public function update($id,$data){
        $this->db->where('id_pegawai',$id);
        $this->db->update('log_history',$data);
        return true;
    }

    public function delete($id){
        $this->db->where('id_pegawai',$id);
        $this->db->delete('log_history');
        return true;
    }

    public function id_exists($id)
    {
        $query = $this->db->get_where('log_history',array('id_pegawai'=>$id));
        if ($query->num_rows() > 0)
            return true;
        else
            return false;
    }
}
// IDMARIL EDIT
?>

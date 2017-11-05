<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Pegawai_model extends CI_Model {

    public function __construct(){
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function create($data){
        if($this->db->insert('data_pegawai',$data)){
            return true;
        }
        return false;
    }

    public function create_pendidikan($id_pegawai,$jenjang,$jurusan,$institusi,$lampiran_ijazah){
        if (count($jenjang)>0 && $id_pegawai) {
            for ($i=0; $i<count($jenjang); $i++) {
                $fields = array(
                    'id_pegawai' => $id_pegawai,
                    'jenjang' => $jenjang[$i],
                    'jurusan' => $jurusan[$i],
                    'institusi' => $institusi[$i],
                    'lampiran_ijazah' => $lampiran_ijazah[$i]);
                $this->db->insert('pendidikan',$fields);
            } return true;
        } return false;
    }

    public function create_pelatihan($id_pegawai,$nama_pelatihan,$tanggal_mulai,$tanggal_selesai,$nama_penyelenggara,$lampiran_pelatihan){
        if (count($nama_pelatihan)>0 && $id_pegawai) {
            for ($i=0; $i<count($nama_pelatihan); $i++) {
                $fields = array(
                    'id_pegawai' => $id_pegawai,
                    'nama_pelatihan' => $nama_pelatihan[$i],
                    'tanggal_mulai' => $tanggal_mulai[$i],
                    'tanggal_selesai' => $tanggal_selesai[$i],
                    'nama_penyelenggara' => $nama_penyelenggara[$i],
                    'lampiran_pelatihan' => $lampiran_pelatihan[$i]);
                $this->db->insert('pelatihan',$fields);
            } return true;
        } return false;
    }

    public function get_all_only(){
        return $this->db->select('*')->from('data_pegawai')->order_by('updated_at','DESC')->get()->result();
    }

    public function get_single_only($id){
        return $this->db->get_where('data_pegawai',array('id_user'=>$id))->row();
    }

    public function count_tetap(){
        $status = "TETAP";
        $query = $this->db->select('*')->from('data_pegawai')->where('status_karyawan',$status);
        return $query->count_all_results();
    }

    public function count_honor(){
        $status = "HONOR";
        $query = $this->db->select('*')->from('data_pegawai')->where('status_karyawan',$status);
        return $query->count_all_results();
    }

    public function count_magang(){
        $status = "MAGANG";
        $query = $this->db->select('*')->from('data_pegawai')->where('status_karyawan',$status);
        return $query->count_all_results();
    }

    public function count_all(){
        $query = $this->db->select('*')->from('data_pegawai');
        return $query->count_all_results();
    }


    public function get_all(){
        $data['data_pegawai'] = $this->db->select('*')->from('data_pegawai')->order_by('updated_at','DESC')->get()->result();

        $data['pendidikan'] = $this->db->select('*')->from('pendidikan')->get()->result();

        $data['pelatihan'] = $this->db->select('*')->from('pelatihan')->get()->result();

        return $data;
    }

    // IDMARIL EDIT
    public function get_single_only_rowarray($id){
      return $this->db->get_where('data_pegawai',array('id'=>$id))->row_array();
    }
    // IDMARIL EDIT

    public function get_single($id){
        $data['data_pegawai'] = $this->db->get_where('data_pegawai',array('id'=>$id))->row();

        $data['pendidikan'] = $this->db->select('pendidikan.*')->join('data_pegawai',
            'data_pegawai.id = pendidikan.id_pegawai','inner')
        ->from('pendidikan')->where('data_pegawai.id',$id)->get()->result();

        $data['pelatihan'] = $this->db->select('pelatihan.*')->join('data_pegawai',
            'data_pegawai.id = pelatihan.id_pegawai','inner')
        ->from('pelatihan')->where('data_pegawai.id',$id)->get()->result();

        return $data;
    }

    public function get_single_pendidikan($id){
        $data = $this->db->select('pendidikan.*')->join('data_pegawai',
            'data_pegawai.id = pendidikan.id_pegawai','inner')
        ->from('pendidikan')->where('data_pegawai.id',$id)->get()->result();
        return $data;
    }

    public function get_single_pelatihan($id){
        $data = $this->db->select('pelatihan.*')->join('data_pegawai',
            'data_pegawai.id = pelatihan.id_pegawai','inner')
        ->from('pelatihan')->where('data_pegawai.id',$id)->get()->result();
        return $data;
    }

    public function update($id,$data){
        $this->db->where('id_user',$id);
        $this->db->update('data_pegawai',$data);
        return true;
    }

    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('data_pegawai');
        return true;
    }

    public function id_exists($id)
    {
        $query = $this->db->get_where('data_pegawai',array('id_user'=>$id));
        if ($query->num_rows() > 0)
            return true;
        else
            return false;
    }
}

?>

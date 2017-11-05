<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daerah_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

	public function getProv()
	{
    $sql="SELECT * FROM provinsi";
    $query=$this->db->query($sql);
    return $query->result();
	}

	public function getKab($id_prov)
	{
	  $sql="SELECT * FROM kabupaten WHERE id_prov={$id_prov} ORDER BY nama";
	  $query=$this->db->query($sql);
    return $query->result();
	}

	public function getKec($id_kab)
	{
	  $sql="SELECT * FROM kecamatan WHERE id_kab={$id_kab} ORDER BY nama";
	  $query=$this->db->query($sql);
    return $query->result();
	}

	public function getKel($id_kec)
	{
	  $sql="SELECT * FROM kelurahan WHERE id_kec={$id_kec} ORDER BY nama";
	  $query=$this->db->query($sql);
    return $query->result();
	}

	public function getProv_byProv($id_prov)
	{
    $sql="SELECT nama FROM provinsi WHERE id_prov={$id_prov} ORDER BY nama";
    $query=$this->db->query($sql);
    return $query->row_array();
	}

	public function getKab_byKab($id_kab)
	{
	  $sql="SELECT nama FROM kabupaten WHERE id_kab={$id_kab} ORDER BY nama";
	  $query=$this->db->query($sql);
    return $query->row_array();
	}

	public function getKec_byKec($id_kec)
	{
	  $sql="SELECT nama FROM kecamatan WHERE id_kec={$id_kec} ORDER BY nama";
	  $query=$this->db->query($sql);
    return $query->row_array();
	}

	public function getKel_byKel($id_kel)
	{
	  $sql="SELECT nama FROM kelurahan WHERE id_kel={$id_kel} ORDER BY nama";
	  $query=$this->db->query($sql);
    return $query->row_array();
	}
}

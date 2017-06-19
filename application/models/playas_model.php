<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class playas_model extends CI_Model {
  
  public function __construct() {
    parent::__construct();
  }

  public function mostrarPlaya($id) {
  		$this->db->select("PLA_ID, PLA_NOMBRE, PLA_ORIENTACION, PLA_DESCRIPCION_GENERAL, PLA_DESCRIPCIPCION_TECNICA, SGC_CIUDAD_CIU_ID");
  		$this->db->from("sgc_playa");
  		$this->db->where("PLA_ID",$id);
  		$query = $this->db->get();

  		if($query->num_rows()>0){
  			return $query->result();
  		}
  		return FALSE;
  }

  public function mostrarCiudad($id){
      $this->db->select("CIU_NOMBRE, CIU_ID");
      $this->db->from("sgc_ciudad");
      $this->db->join("sgc_playa","sgc_playa.SGC_CIUDAD_CIU_ID= sgc_ciudad.CIU_ID");
      $this->db->where("sgc_ciudad.CIU_ID",$id);

      $query = $this->db->get();
      if($query->num_rows()>0){
        return $query->result();
      }
      return FALSE;
  }

  public function contarPerfil($id){
     $this->db->select("count(*) as contador");
     $this->db->from("sgc_perfil");
     $this->db->where("SGC_PLAYA_PLA_ID",$id);
     $query = $this->db->get();
      if($query->num_rows()>0){
        return $query->result();
      }
      return FALSE;
  }
}

?>
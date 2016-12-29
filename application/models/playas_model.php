<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class playas_model extends CI_Model {
  
  public function __construct() {
    parent::__construct();
  }

  public function mostrarPlaya($id=9) {
  		$this->db->select("PLA_ID, PLA_NOMBRE, PLA_ORIENTACION, PLA_DESCRIPCION_GENERAL, PLA_DESCRIPCIPCION_TECNICA, SGC_CIUDAD_CIU_ID");
  		$this->db->from("sgc_playa");
  		$this->db->where("PLA_ID",$id);
  		$query = $this->db->get();

  		if($query->num_rows()>0){
  			return $query->result();
  		}
  		return FALSE;
  }
}

?>
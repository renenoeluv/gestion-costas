<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Perfil_model extends CI_Model {
  
  public function __construct() {
    parent::__construct();
  }


  public function get_bitacoras($perfil_id) {
    $this->db->select('BIT_ID,BIT_FECHA_HORA');
    $this->db->from('SGC_BITACORA');
	  $this->db->where(' SGC_PERFIL_PERF_NUMERO', $perfil_id);
    $query = $this->db->get();    
    if($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  public function get_mediciones($bitacora_id) {
    $this->db->select('MED_DISTANCIA_HORIZONTAL,MED_DISTANCIA_VERTICAL');
    $this->db->from('SGC_MEDICION');
    $this->db->where('SGC_BITACORA_BIT_ID', $bitacora_id);
    $query = $this->db->get();    
    if($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

}

?>
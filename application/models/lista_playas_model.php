<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Lista_playas_model extends CI_Model {
  
  public function __construct() {
    parent::__construct();
    $this->load->database();
   
  }

  public function obtenerpais(){
    $this->db->select('PAI_NOMBRE')->from(' SGC_PAIS pa');
    $query = $this->db->get();
    if($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  public function cargarreg($pais){
    $query=$this->db->select('PAI_ID')->from('SGC_PAIS')->where('PAI_NOMBRE',$pais)->get()->result()[0]->PAI_ID;
    return $this->db->select('REG_NOMBRE,REG_ID')->from('SGC_REGION')->where('SGC_PAIS_PAI_ID',$query)->get()->result();


  }
public function consultar_playas($region){
     return $this->db->distinct()->select('PLA_ID,PLA_NOMBRE')->from('sgc_playa,SGC_REGION,SGC_CIUDAD')->where('SGC_REGION_REG_ID',$region.'and SGC_REGION.REG_ID=SGC_CIUDAD.SGC_REGION_REG_ID and SGC_CIUDAD.CIU_ID=SGC_PLAYA.SGC_CIUDAD_CIU_ID')->get()->result();
  // $query = $this->db->get();
    //if($query->num_rows() > 0) {
      //  $results = $query->result();
    //}
    //return $results;
}
public function consultar_campanhas(){
     $this->db->distinct()->select ('CAMP_id, CAMP_FECHA_HORA,CAMP_ESTADO,SGC_PLAYA_PLA_ID')->from('SGC_PERFIL,SGC_BITACORA,SGC_CAMPANHA')->where('SGC_BITACORA.SGC_CAMPANHA_CAMP_ID=SGC_CAMPANHA.CAMP_ID and SGC_PERFIL.PERF_NUMERO=SGC_BITACORA.SGC_PERFIL_PERF_NUMERO');
   $query = $this->db->get();
    if($query->num_rows() > 0) {
        $results = $query->result();
    }
    return $results;
}


}
?>

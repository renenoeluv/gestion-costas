<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Playa_model extends CI_Model {
  
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function get_ubicacion(){
  	$query=$this->db->query("SELECT  PLA_CODIGO_WINDGURU from SGC_PLAYA where PLA_ID=1");
    if($query->num_rows()>0){
  	$playas=$query->result();
    $valor=$playas['0']->PLA_CODIGO_WINDGURU;
  	return $valor;
  }else{
    return false;
  }
  }

}

  ?>
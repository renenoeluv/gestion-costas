<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Playa_model extends CI_Model {
  
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function get_ubicacion(){
  	$query=$this->db->query("SELECT  PLA_ORIENTACION from SGC_PLAYA where PLA_ID=5");
  	$playas=$query->result();
    $valor=$playas['0']->PLA_ORIENTACION;
  	return $valor;
  }

}

  ?>
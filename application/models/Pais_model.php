<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Pais_model extends CI_Model {
  
  public function __construct() {
    parent::__construct();
  }

  public function get_paises() {
    $this->db->select('*');
    $this->db->from('SGC.SGC_PAIS');
    $this->db->order_by('PAI_NOMBRE DESC');
    $query = $this->db->get();    
    if($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }
}

?>
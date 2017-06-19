<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Prueba extends CI_Model{
	
	public function __construct() {
    parent::__construct();
    $this->load->database('testGraf', TRUE);
  }

  public function mostrar(){
  	$query = $this->db->query("SELECT mexico from grafico where años=1992");
  	$prueba=$query->result();
  	}

}

?>
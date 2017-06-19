<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
* Clase controladora de Graficas
*/
class Graficas extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Conexion');
	}

	function index(){
		$this->load->view('grafico');
	}

	function ajax(){
		$query = $this->Conexion->obtenerdatos();
		if($query != false){
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		header('Content-Type: application/json');
	  	echo json_encode($data);
	  	return;
	}

}
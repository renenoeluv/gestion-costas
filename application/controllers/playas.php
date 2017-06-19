<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Playas extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('playa_model');
		$this->load->model('Conexion');
	}

	public function muestra(){
		$data['ubicacion']=$this->playa_model->get_ubicacion();
		$this->load->view('muestraInfoPlaya', $data);

	}

	/*function ajax(){
		$query = $this->Conexion->obtenerdatos();
		if($query != false){
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		header('Content-Type: application/json');
	  	echo json_encode($data);
	  	return;
	}*/


	public function index(){
		$this->load->model('playas_model');
		$data = array();
		$data["mostrarPlaya"] = $this->playas_model->mostrarPlaya();
		$data["mostrarCiudad"] = $this->playas_model->mostrarCiudad();
		$this->load->view('vista_playas', $data, FALSE);
	}
}
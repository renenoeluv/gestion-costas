<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Playa_especifica extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('playas_model');
	}


	public function index(){
		$this->load->model('playas_model');
		$data = array();
		$data["mostrarPlaya"] = $this->playas_model->mostrarPlaya();
		$data["mostrarCiudad"] = $this->playas_model->mostrarCiudad();
		$data["contarPerfil"] = $this->playas_model->contarPerfil();
		$this->load->view('vista_playa_especifica', $data, FALSE);
	}
}
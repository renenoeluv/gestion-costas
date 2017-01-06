<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Playas extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('playa_model');
	}

	public function muestra(){
		$data['ubicacion']=$this->playa_model->get_ubicacion();
		$this->load->view('mostrarInfo2', $data);

	}

}
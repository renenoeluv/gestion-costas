<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finalizar extends CI_Controller {



	public function __construct(){
		parent::__construct();
		$this->load->model('Finalizar_model');
	}




	//La llamada de la vista anterior tiene que pasarme el id de la campaña por la ruta
	public function index($idcamp){

		$buscar=$this->Finalizar_model->perfiles($idcamp;//echo $perfiles;
		$data['perfiles']=$buscar;
		$this->load->view('vmedfinalizar',$data);


	}


}	

	
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finalizar extends CI_Controller {



	public function __construct(){
		parent::__construct();
		$this->load->model('Finalizar_model');
	}



	public function index(){

		$buscar=$this->Finalizar_model->perfiles(1);//echo $perfiles;
		$data['perfiles']=$buscar;
		$this->load->view('vmedfinalizar',$data);


	}


}	

	
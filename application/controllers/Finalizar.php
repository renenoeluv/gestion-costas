<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finalizar extends CI_Controller {

   

	public function __construct(){
		parent::__construct();
		$this->load->model('Finalizar_model');
	}


	public function mediciones(){
		$bit=$this->input->post('idbit');
		$medicion=$this->Finalizar_model->llenartabla($bit);
		$retorno = json_encode($medicion);
		header('Content-Type: application/json');
	    echo $retorno;
	    return;
	}


	public function updateestado(){
		$bit = $this->input->post('idbit');
		$update=$this->Finalizar_model->set_estado_bit($bit);
		echo $bit;
		return;
	}

	//La llamada de la vista anterior tiene que pasarme el id de la campaña por la ruta
	public function index(){
		$idcamp = $this->input->get('m');
		$buscar=$this->Finalizar_model->perfiles($idcamp);
		$data['perfiles']=$buscar;
		$this->load->view('vmedfinalizar',$data);
		return;
	}


}	

	
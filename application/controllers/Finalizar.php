<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finalizar extends CI_Controller {

   

	public function __construct(){
		parent::__construct();
		$this->load->model('Finalizar_model');
	}



	public function edmed(){
		$idmed=$this->input->post('id');
		$em=$this->input->post('em');
		$e=$this->input->post('e');
		$dh=$this->input->post('dh');
		$dv=$this->input->post('dv');
		$observacion=$this->input->post('observacion');
		$this->Finalizar_model->update_medicion($idmed,$em,$e,$dv,$dh,$observacion);



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

	public function fincamp(){
		$idcamp = $this->input->post('idcamp');
		$this->Finalizar_model->fincamp($idcamp);
	}





//al controlador hay que pasarle el id de campaña por la url(get) con la variable m para que cargue esta vista
	public function index(){
		$idcamp=$this->input->get('m');
		$buscar=$this->Finalizar_model->perfiles($idcamp);
		$buscar1=$this->Finalizar_model->llenartabla1($buscar);
		$buscar3=$this->Finalizar_model->encargado($idcamp);
		$buscar4=$this->Finalizar_model->playa($idcamp);
		$buscar5=$this->Finalizar_model->fecha($idcamp);
		$buscar7=$this->Finalizar_model->avance1($idcamp);
		$data['perfiles']=$buscar;
		$data['llenartabla']=$buscar1;
		$data['encargado']=$buscar3;
		$data['playa']=$buscar4;
		$data['fecha']=$buscar5;
		$data['avance1']=$buscar7;
		$data['idcamp']=$idcamp;
		$this->load->view('vmedfinalizar',$data);
	}

}	

	
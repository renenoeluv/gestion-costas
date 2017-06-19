<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_playas_controller extends CI_Controller {
	public function __construct() {
		
		parent::__construct();
		$this->load->model('lista_playas_model');
	}
	

	public function regiones(){
		$pais=$this->input->post('ps');
		$regiones=$this->lista_playas_model->cargarreg($pais);
		$retorno = json_encode($regiones);
		header('Content-Type: application/json');
		echo $retorno;
		return;
	}
	public function cargar_lista_playas($idreg){ // recibe el parametro en $region..... este es el metodo que llama a tu vista
		$region = urldecode($idreg);
		
		$data['pais_region']=$region;
				//originalmente santa%20cruz ... y queda santa cruz
		$link['datu']=$idreg;//le doy un nombre para usarlo dentro
		$data['lista_playas']= $this->lista_playas_model->consultar_playas($idreg);
		$data['lista_campanhas']= $this->lista_playas_model->consultar_campanhas($idreg);
		$data['pais'] = $this->lista_playas_model->obtenerpais()->result();
		$this->load->view('lista_con_playas_view',$data,$link);
		
		
		
	}

	public function index() {
		$data['pais'] = $this->lista_playas_model->obtenerpais()->result();
		
		$this->load->view('lista_sin_playas_view',$data);
	
	}

	
}
	
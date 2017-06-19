<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Playa extends CI_Controller {
 
	public function __construct() {
		parent::__construct();
		$this->load->model('Pais_model');
	}
 
 	public function agregar_playa() {
		$id = $this->input->post('id');   
		$nom = $this->input->post('Nombre');
		$ori = $this->input->post('Orientación');
		$dger = $this->input->post('Descripción General');
		$dtec = $this->input->post('Descripción Técnica');
		$fotosup = $this->input->sub_foto();// DETALLE
		$fotopri = $this->input->sub_foto();// DETALLE
		$lat = $this->input->post('latitud');
		$long = $this->input->post('longitud');
		$cod_ciudad = $this->input->post('id de ciudad');
		$cod_windguru = $this->input->post('código de windguru');
		$pen = $this->input->post('pendiente');

		$this->playa_model->set_playa($id, $nom, $ori, $dger, $dtec, $fotosup, $fotopri, $lat, $long, $cod_ciudad, $cod_windguru, $pen);
    }

    private function sub_foto(){
    	$type = explode(".", $_FILES['pic']['name']);
    	$type = $type[count($type)-1];
		if(in_array($type, array('jpg' 'jpeg', 'gif', 'png')))
    		if(is_uploaded_file($_FILES['pic']['tmp_name']))
    			move_uploaded_file($_FILES['pic']['tmp_name'], './fotos/playas'.uniqid(mktime()).'.'.$type);
    }

    public function borrar_playa() {
		$id = $this->input->post('id');

		$this->playa_model->delete_playa($id);
	}

	public function editar_playa() {
		$id = $this->input->post('id');   
		$nom = $this->input->post('nombre');
		$ori = $this->input->post('Orientación');
		$dger = $this->input->post('Descripción General');
		$dtec = $this->input->post('Descripción Técnica');
		$fotosup = $this->input->post('Foto Superior');
		$fotopri = $this->input->post('Foto Principal');
		$lat = $this->input->post('latitud');
		$long = $this->input->post('longitud');
		$cod_ciudad = $this->input->post('id de ciudad');
		$cod_windguru = $this->input->post('código de windguru');
		$pen = $this->input->post('pendiente');
		
		$this->playa_model->set_playa($id, $nom, $ori, $dger, $dtec, $fotosup, $fotopri, $lat, $long, $cod_ciudad, $cod_windguru, $pen);
	}

	public function playas(){
		$playas = $this->playa_model->get_playa()->result();	    
	    $retorno = json_encode($playas);
	    echo $retorno; 
	    return;
	}
}
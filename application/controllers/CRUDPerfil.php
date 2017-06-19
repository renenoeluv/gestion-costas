<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Perfil_model');
	}
	public function agregar_Perfil() {
		$id = $this->input->post('id');   
		$num = $this->input->post('numero');
		$foto_ref = $this->input->sub_foto(); //DETALLE
		$desc_med = $this->input->post('descripcion medicion');
		$id_playa = $this->input->post('id playa');
		
		$this->Perfil_model->set_perfil($id, $num, $foto_ref, $desc_med,$id_playa);
    }
 private function sub_foto(){
    	$type = explode(".", $_FILES['pic']['name']);
    	$type = $type[count($type)-1];
		if(in_array($type, array('jpg' 'jpeg', 'gif', 'png')))
    		if(is_uploaded_file($_FILES['pic']['tmp_name']))
    			move_uploaded_file($_FILES['pic']['tmp_name'], './fotos/playas'.uniqid(mktime()).'.'.$type);
    }

    public function borrar_Perfil() {
		$id = $this->input->post('id');
		$this->Perfil_model->delete_perfil($id);
	}
	public function editar_perfil() {
		$id = $this->input->post('id');   
		$num = $this->input->post('numero');
		$foto_ref = $this->input->post('foto referencia');
		$desc_med = $this->input->post('descripcion medicion');
		$id_playa = $this->input->post('id playa');
		
		$this->Perfil_model->update_perfil($id, $num, $foto_ref, $desc_med,$id_playa);
	}
	public function Perfil(){
		$perfil = $this->Perfil_model->get_perfil()->result();	    
	    $retorno = json_encode($perfil);
	    echo $retorno; 
	    return;
	}
}

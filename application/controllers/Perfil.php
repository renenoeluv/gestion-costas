<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {
	 public function __construct() {
	 	parent::__construct();
	 	$this->load->model('Perfil_model');
	 }
   /*
    * Uso: Si que quiere obtener la interpolación del perfil id 2 de la playa id 1 se escribe en la url:
    *      /gestion-costas/index.php/perfil/get/1/2
    *     Si que quiere obtener la interpolación del perfil id 1 de la playa id 3 se escribe en la url:
    *      /gestion-costas/index.php/perfil/get/3/1
		*     La url /gestion-costas/index.php/perfil/get/ por predeterminado es el perfil id 1 de la playa id 1
    */
	public function get($id_playa = 1, $id_perfil = 1)
	{
		$perfil = $this->Perfil_model->get_bitacoras($id_playa, $id_perfil);

		$cantidad_bitacoras = 0;
		$escala_dh = 0.2;
		$bitacoras = array();

		foreach ($perfil as $key => $value) {
			$bitacoras[$value->fecha] = $this->Perfil_model->interpolar($this->Perfil_model->get_medicion($value->id), $escala_dh);
			$cantidad_bitacoras += 1;
		}

		$datos = ["perfil" => $id_perfil, "cantidad_bitacoras" => $cantidad_bitacoras, "escala_dh" => $escala_dh, "bitacoras" => $bitacoras];

    $this->output->set_content_type('application/json')->set_output(json_encode($datos));
	}
}

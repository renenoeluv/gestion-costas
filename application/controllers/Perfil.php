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
    /* Falta falta implementación formula interpolación, pero ya se sacan todos los datos almacenados
     * en la tablas que hace referencia a la plata $id_playa, $id_perfil
     */
    $data = $this->Perfil_model->get_perfil($id_playa, $id_perfil);
    if(empty($data)) {
      $data = '';
    } else {
      //Implementación interpolación
    }
    $this->output
    	->set_content_type('application/json')
    	->set_output(json_encode(array('data' => $data)));
	}
}

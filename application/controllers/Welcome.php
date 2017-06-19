<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {

<<<<<<< HEAD
	public function __construct() {
		parent::__construct();
		$this->load->model('Mejor_playa');
	}


	public function index()
	{

		$result = $this->db->get('sgc_playa');
		$data = array('consulta'=>$result);
		$this->load->view('welcome_message', $data);
=======
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct() {
	 	parent::__construct();
	 	$this->load->model('Perfil_model');
	 }

	public function index()
	{
		$data['tabla'] = $this->Perfil_model->get_perfil(0, 0);
		$this->load->view('welcome_message');
>>>>>>> master
	}

}
?>
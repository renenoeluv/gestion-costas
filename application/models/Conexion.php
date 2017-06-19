<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

	class Conexion extends CI_Model{
		public function __construct() {
	    parent::__construct();
	    $this->load->database();
	  }

	  
	  function obtenerdatos(){
	  	/* Query a la BD
			
	  	$NPERFILREPRESENTATIVO = "select PERF_NUMERO from SGC_PERFIL WHERE PERF_REPRESENTTIVO = 1";
		$max="SELECT BIT_ID FROM SGC_BITACORA WHERE (PERF_NUEMRO = (select PERF_NUMERO from SGC_PERFIL WHERE PERF_REPRESENTTIVO = 1) AND BIT_MAXIMA = 1)";
		$min="SELECT BIT_ID FROM SGC_BITACORA WHERE (PERF_NUEMRO =PERF_NUEMRO = (select PERF_NUMERO from SGC_PERFIL WHERE PERF_REPRESENTTIVO = 1) AND BIT_MINIMA= 1)"
		SELECT * FROM SGC_MEDICION WHERE BIT_ID=min;
		SELECT * FROM SGC_MEDICION WHERE BIT_ID=max;*/

		
	  	$query = $this->db->get('graficos'); //recuperar todos los registros de una tabla
	  	if($query->num_rows()>0) return $query;
	  	else return false;
	  }

	}
?>

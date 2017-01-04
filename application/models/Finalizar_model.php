<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Finalizar_model extends CI_Model {
  
  public function __construct() {
    parent::__construct();
  }


  public function perfiles ($idcamp){
  	$data = array(

  		'SGC_CAMPANHA_CAMP_ID'=>$idcamp
  		);
  	$this->db->select('*');
  	$this->db->from('SGC_BITACORA');
  	$this->db->where($data);
  	$query=$this->db->get();

  	return $query->result();

  }


  public function llenartabla($bit_id){
  $query=$this->db->get_where('SGC_MEDICION',array('SGC_BITACORA_BIT_ID'=>$bit_id));
  return $query->result();

  }

  public function set_estado_bit($bit_id){
    $data = array(
            'BIT_ESTADO' => 'confirmado'

        );
        $this->db->where('BIT_ID', $bit_id);
        return $this->db->update('SGC_BITACORA', $data);
    }


  /*public function perfiLfila($perfiles,$idcamp){

  	$vista= array();


  	foreach ($perfiles as $key => $perfil) {


  		$data=array(
  			'SGC_CAMPANHA_CAMP_ID' => 1,
  			'SGC_PERFIL_PERF_NUMERO' =>1
  			);


  		$query= $this->db->select('BIT_ID')->from('SGC_BITACORA')->where($data)->get()->result()[0]->BIT_ID;


  		$query2=$this->db->select('*')->from('SGC_MEDICION')->where('SGC_BITACORA_BIT_ID',$query);



  		$vista[]= array('medicion' => $query2->get()->num_rows());



 

  		
  		//return $query;



  		//$this->db->from('SGC_BITACORA');
  		//$this->db->where($data);
  		//$data1=array(
  			//'SGC_BITACORA_BIT_ID' => $this->db->get()->result()[0]->BIT_ID
  			//);



  		//$this->db->select('count(*) as medicion');
  		//$this->db->from('SGC_MEDICION');
  		//$this->db->where($data1);
  		//$vista= array(
  			//$key => $this->db->get()->result()[0]->medicion
  		//);


  	}

  	return $vista;
  }*/


}

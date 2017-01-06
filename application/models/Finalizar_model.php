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

  public function update_medicion($id_med,$em,$e,$dv,$dh,$observacion) {
    $data = array(
      'MED_ESTACION_MEDICION' => $em,
      'MED_ESTACION' => $e,
      'MED_DISTANCIA_HORIZONTAL' => $dh,
      'MED_DISTANCIA_VERTICAL' => $dv,
      'MED_COMENTARIO' => $observacion
      );
    $this->db->where('MED_ID', $id_med);
    return $this->db->update('SGC_MEDICION',$data);
  } 


  public function llenartabla($bit_id){
  $query=$this->db->get_where('SGC_MEDICION',array('SGC_BITACORA_BIT_ID'=>$bit_id));
  return $query->result();

  }

 
public function llenartabla1($query) {

    foreach ($query as $key => $val) {
      if($val->BIT_ESTADO!='vacio'){
        $query1=$this->db->get_where('SGC_MEDICION',array('SGC_BITACORA_BIT_ID'=>$val->BIT_ID));
        return $query1->result();
      }
    }
    $vacio = array('NO SE ENCONTRARON MEDICIONES' );
    return $vacio;
  }


  public function encargado($id_camp){
    $this->db->select('SGC_USUARIO_ENCARGADO');
    $this->db->from('SGC_CAMPANHA');
    $this->db->where('CAMP_ID', $id_camp);
    $query=$this->db->get()->result()[0]->SGC_USUARIO_ENCARGADO;
    $this->db->select('USR_NOMBRE_APELLIDO');
    $this->db->from('SGC_USUARIO');
    $this->db->where('USR_CORREO', $query);
    $query1=$this->db->get();
    return $query1->result();
  }

  public function playa($id_camp){
    $this->db->select('PLA_ID');
    $this->db->from('SGC_CAMPANHA');
    $this->db->where('CAMP_ID', $id_camp);
    $query=$this->db->get()->result()[0]->PLA_ID;
    $this->db->select('PLA_NOMBRE');
    $this->db->from('SGC_PLAYA');
    $this->db->where('PLA_ID', $query);
    $query1=$this->db->get();
    return $query1->result();
  }


 public function fecha($id_camp){
    $this->db->select('DATE(CAMP_FECHA_HORA) AS FECHA');
    $this->db->from('SGC_CAMPANHA');
    $this->db->where('CAMP_ID',$id_camp);
    $query=$this->db->get();
    return $query->result();
  }


 public function avance1($id_camp){
    $this->db->select('BIT_ESTADO');
    $this->db->from('SGC_BITACORA');
    $this->db->where('SGC_CAMPANHA_CAMP_ID', $id_camp);
    $query=$this->db->get();
    return $query->result();
  }



 public function set_estado_bit($bit_id){
    $data = array(
            'BIT_ESTADO' => 'confirmado'

        );
        $this->db->where('BIT_ID', $bit_id);
        return $this->db->update('SGC_BITACORA', $data);
    }


  public function fincamp($idcamp){
    $data= array(
       'CAMP_ESTADO' => 'FINALIZADA' 
      );
    $this->db->where('CAMP_ID',$idcamp);
    return $this->db->update('SGC_CAMPANHA',$data);  


  }
}

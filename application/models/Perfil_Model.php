<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Perfil_model extends CI_Model {
  
  public function __construct() {
    parent::__construct();
  }
  public function set_perfil($id, $num, $foto_ref, $desc_med,$id_playa) {
    $data = array(
      'PERF_ID' => $id,
      'PERF_NUMERO' => $num
      'PERF_FOTO_REFERENCIA' => $foto_ref,
	'PERF_DESCRIPCION_MEDICION' => $desc_med,
	'PLA_ID' => $id_playa
    );
    $this->db->insert('SGC_PERFIL', $data);
  }
  public function delete_perfil($id) {
    $data = array(
      'PERF_ID' => $id
    );
    $this->db->delete('SGC_PERFIL', $data);
  }
  public function update_perfil($id, $num, $foto_ref, $desc_med,$id_playa) {
    $this->db->set('PERF_NUMERO', $num);
	$this->db->set('PERF_FOTO_REFERENCIA', $foto_ref);
	$this->db->set('PERF_DESCRIPCION_MEDICION', $desc_med);
    $this->db->where('PERF_ID', $id);
    $this->db->update('SGC_PERFIL');
  }
  public function get_perfil() {
    $this->db->select('*');
    $this->db->from('SGC.SGC_PERFIL');
    $this->db->order_by('PERFIL_NUMERO DESC');
    $query = $this->db->get();    
    if($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }
}
?>

<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Perfil_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function get_perfil($id_playa, $id_perfil) {
    $column_name = "B.BIT_FECHA_HORA, M.MED_ESTACION, M.MED_ESTACION_MEDICION, M.MED_DISTANCIA_VERTICAL, M.MED_DISTANCIA_HORIZONTAL";
    $tables = "SGC_PERFIL P INNER JOIN SGC_BITACORA B ON P.PERF_NUMERO = B.SGC_PERFIL_PERF_NUMERO INNER JOIN SGC_MEDICION M ON B.BIT_ID = M.SGC_BITACORA_BIT_ID";
    $condicion = "P.SGC_PLAYA_PLA_ID = ? AND P.PERF_NUMERO = ?";

    $sql = "SELECT " . $column_name . " FROM " . $tables . " WHERE " . $condicion . " ORDER BY B.BIT_ID ASC";
    $parametros = array((int) $id_playa, (int) $id_perfil);
    
    return $this->db->query($sql, $parametros)->result();
  }
}

<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Perfil_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }



  public function get_bitacoras($perfil_id) {
    $this->db->select('BIT_ID,BIT_FECHA_HORA');
    $this->db->from('SGC_BITACORA');
	  $this->db->where(' SGC_PERFIL_PERF_NUMERO', $perfil_id);
    $query = $this->db->get();    
    if($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  public function get_mediciones($bitacora_id) {
    $this->db->select('MED_DISTANCIA_HORIZONTAL,MED_DISTANCIA_VERTICAL');
    $this->db->from('SGC_MEDICION');
    $this->db->where('SGC_BITACORA_BIT_ID', $bitacora_id);
    $query = $this->db->get();    
    if($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

}



  public function get_bitacoras($id_playa, $id_perfil) {
    $sql = "SELECT B.BIT_ID AS id, DATE(B.BIT_FECHA_HORA) AS fecha FROM SGC_PERFIL P INNER JOIN SGC_BITACORA B ON P.PERF_NUMERO = B.SGC_PERFIL_PERF_NUMERO WHERE P.SGC_PLAYA_PLA_ID = ? AND P.PERF_NUMERO = ? ORDER BY B.BIT_ID ASC";
    $parametros = array((int) $id_playa, (int) $id_perfil);
    return $this->db->query($sql, $parametros)->result();
  }

  public function get_medicion($id_bitacora) {
    $sql = "SELECT MED_ESTACION as estacion_observacion, MED_ESTACION_MEDICION as estacion_medida, MED_DISTANCIA_HORIZONTAL as distancia_horizontal, MED_DISTANCIA_VERTICAL as distancia_vertical FROM SGC_MEDICION WHERE SGC_BITACORA_BIT_ID = ? ORDER BY MED_ID ASC";
    $parametros = array((int) $id_bitacora);
    return $this->db->query($sql, $parametros)->result();
  }

  public function interpolar($m_bitacora, $intervalo) {
    //Tabla auxiliar
    $tabla_aux = array();

    foreach ($m_bitacora as $key => $value) {
      if($key == 0) {
        $tabla_aux[$key] = (object) [
          'eo' => 0, //Estación de observación
          'em' => 0, // Estación medida
          'dh_sc' => 0, // Distancia horizontal sin corregir
          'dv_ee' => 0, // Distancia vertical entre estaciones
          'a_eo' => 0, // Altura de EObs respecto E0
          'dh_pe' => 0, // Distancia horizontal por estación
          'dh_e0' => 0, // Distancia horizontal respecto E0
          'dv_e0' => 0 // Distancia vertical respecto E0
        ];
      } else if ($key == 1) {
          $tabla_aux[$key] = (object) [
            'eo' => $value->estacion_observacion, //Estación de observación
            'em' => $value->estacion_medida, // Estación medida
            'dh_sc' => 0.0001, // Distancia horizontal sin corregir
            'dv_ee' => $value->distancia_vertical, // Distancia vertical entre estaciones
            'a_eo' => 0, // Altura de EObs respecto E0
            'dh_pe' => 0, // Distancia horizontal por estación
            'dh_e0' => 0, // Distancia horizontal respecto E0
            'dv_e0' => 0 // Distancia vertical respecto E0
          ];
          $tabla_aux[$key]->a_eo = (($tabla_aux[$key-1]->em == $tabla_aux[$key]->eo) ? ($tabla_aux[$key-1]->a_eo + $tabla_aux[$key-1]->dv_ee) : $tabla_aux[$key-1]->a_eo);
          $tabla_aux[$key]->dv_e0 = -($tabla_aux[$key]->dv_ee + $tabla_aux[$key]->a_eo);
          $tabla_aux[$key]->dh_pe = $tabla_aux[$key]->dh_sc;
          $tabla_aux[$key]->dh_e0 = $tabla_aux[$key]->dh_pe;
      } else {
        $tabla_aux[$key] = (object) [
          'eo' => $value->estacion_observacion, //Estación de observación
          'em' => $value->estacion_medida, // Estación medida
          'dh_sc' => $value->distancia_horizontal, // Distancia horizontal sin corregir
          'dv_ee' => $value->distancia_vertical, // Distancia vertical entre estaciones
          'a_eo' => 0, // Altura de EObs respecto E0
          'dh_pe' => 0, // Distancia horizontal por estación
          'dh_e0' => 0, // Distancia horizontal respecto E0
          'dv_e0' => 0 // Distancia vertical respecto E0
        ];
        $tabla_aux[$key]->a_eo = (($tabla_aux[$key-1]->em == $tabla_aux[$key]->eo) ? ($tabla_aux[$key-1]->a_eo + $tabla_aux[$key-1]->dv_ee) : $tabla_aux[$key-1]->a_eo);
        $tabla_aux[$key]->dv_e0 = -($tabla_aux[$key]->dv_ee + $tabla_aux[$key]->a_eo);
        $tabla_aux[$key]->dh_pe = round(sqrt(abs(pow($tabla_aux[$key]->dh_sc - $tabla_aux[$key-1]->dh_sc, 2) - pow($tabla_aux[$key]->dv_e0 - $tabla_aux[$key-1]->dv_e0, 2))), 2);
        $tabla_aux[$key]->dh_e0 = $tabla_aux[$key]->dh_pe + $tabla_aux[$key-1]->dh_e0;
      }
    }
    // Interpolacion
    $interpolacion = array();
    $pi = 0;
    $pf = $pi + 1;
    $dh = 0;
    $cont = 1;

    $interpolacion[] = 0;

    while(isset($tabla_aux[$pf]->dh_e0)) {
      if($tabla_aux[$pi]->dh_e0 <= $dh) {
        if($dh <= $tabla_aux[$pf]->dh_e0) {
          $dy = $tabla_aux[$pf]->dv_e0 - $tabla_aux[$pi]->dv_e0;
          $dx = $tabla_aux[$pf]->dh_e0 - $tabla_aux[$pi]->dh_e0;

          $y0 = $tabla_aux[$pi]->dv_e0;
          $x0 = $tabla_aux[$pi]->dh_e0;

          $m = $dy / $dx;
          $b = $y0 - $m * $x0;

          $y1 = $m * $dh + $b;
          $interpolacion[] = round($y1, 2);

          $dh = $dh + $intervalo;

        } else {
          $pi = $pi + 1;
          $pf = $pf + 1;
        }
      }
    }

    return $interpolacion;
  }
}
?>

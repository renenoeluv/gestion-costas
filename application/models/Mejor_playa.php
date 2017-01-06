<?php
class Mejor_playa extends CI_Model{

    public function __construct() {
    parent::__construct();
  }

public function getPlayas(){
        return $this->db->get('sgc_playa');
    }
    
public function getMejorplaya(){

    $this->db->query("SELECT * FROM SGC_PLAYA WHERE SGC_CIUDAD_CIU_ID IN (SELECT CIU_ID AS CIU_ID FROM SGC_CIUDAD WHERE SGC_REGION_REG_ID = 1)");
        return $result->row();
        $periodo = $this->db->query("SELECT OLE_PERIODO FROM SGC_OLEAJE_PLAYA WHERE SGC_PLAYA_PLA_ID = 9"); 
        //PLA_ID 9 = reñaca

        $altura = $this->db->query("SELECT MARE_ALTURA FROM SGC_MAREA WHERE SGC_CIUDAD_CIU_ID = 15");
        //CIU_ID 15 = VIÑA

        $pendiente = $this->db->query("SELECT PLA_PENDIENTE FROM SGC_PLAYA WHERE SGC_CIUDAD_CIU_ID = 15");

        $mejor = ($pendiente /sqrt($altura / $periodo));
    }



}
?>
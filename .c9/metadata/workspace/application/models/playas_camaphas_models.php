{"changed":true,"filter":false,"title":"playas_camaphas_models.php","tooltip":"/application/models/playas_camaphas_models.php","value":"<?php\nif(!defined('BASEPATH')) exit('No direct script access allowed');\n\nclass Playas_campahas_models extends CI_Model {\n  \n  public function __construct() {\n    parent::__construct();\n  }\n  public function get_paises() {\n    $query = $this->db->get('SGC_CAMPANHA');\n    if($query->num_rows() > 0) {\n      return $query;\n    } else {\n      return false;\n    }\n  }\n}","undoManager":{"mark":-2,"position":3,"stack":[[{"start":{"row":9,"column":4},"end":{"row":11,"column":43},"action":"remove","lines":["$this->db->select('*');","    $this->db->from('SGC.SGC_PAIS');","    $this->db->order_by('PAI_NOMBRE DESC');"],"id":2,"ignore":true}],[{"start":{"row":8,"column":32},"end":{"row":9,"column":4},"action":"remove","lines":["","    "],"id":3,"ignore":true}],[{"start":{"row":9,"column":4},"end":{"row":14,"column":5},"action":"remove","lines":["$query = $this->db->get();    ","    if($query->num_rows() > 0) {","      return $query;","    } else {","      return false;","    }"],"id":4,"ignore":true},{"start":{"row":9,"column":4},"end":{"row":14,"column":5},"action":"insert","lines":["$query = $this->db->get('pelicula');","    if($query->num_rows() > 0) {","      return $query;","    } else {","      return false;","    }"]}],[{"start":{"row":9,"column":29},"end":{"row":9,"column":37},"action":"remove","lines":["pelicula"],"id":5,"ignore":true},{"start":{"row":9,"column":29},"end":{"row":9,"column":41},"action":"insert","lines":["SGC_CAMPANHA"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":14,"column":5},"end":{"row":14,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1483455046984}
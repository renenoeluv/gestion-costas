'<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfiles extends CI_Controller {

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
		$perfil = $this->input->get('perfil');
    $playa = $this->input->get('playa');
	}

  public function json_placeholder() { 
    $mediciones = '{
  "perfil": 1,
  "cantidad_bitacoras": 4,
  "escala_dh": 0.2,
  "bitacoras": {
    "24-12-2016": [
      0,
      -0.1,
      -0.15,
      -0.17,
      -0.17,
      -0.18,
      -0.17,
      -0.19
    ],
    "25-12-2016": [
      0,
      -0.21,
      -0.25,
      -0.18,
      -0.15,
      -0.18,
      -0.15,
      -0.3,
      -0.22,
      -0.2
    ],
    "26-12-2016": [
      0,
      -0.3,
      -0.4,
      -0.35,
      -0.36,
      -0.39,
      -0.19
    ],
    "27-12-2016": [
      0,
      -0.12,
      -0.2,
      -0.23,
      -0.2,
      -0.22,
      -0.18
    ]
  }
}';
  return $mediciones;
  }

	public function json_medidas() {
    $jsonStr = $this->json_placeholder();
    $arrJson = array();
	  $arrJson = json_decode($jsonStr,true); //Despues se riene que cambiar con el metodo del model de DEV-2F (cuando se les ocurra subirlo)
    $fechas = array();
    
    $jsonData = array();
    $i = 0;
    $maxSize = 0;
    $j = 0;
    $alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $usedKeys = array();
    foreach($arrJson["bitacoras"] as $field => $value) {
        $fechas[] = $field;
        $i = 0;
        if(!in_array($alphabet[$j], $usedKeys)) {
          $usedKeys[] = $alphabet[$j];
        }
        foreach($value as $val) {
          if(!array_key_exists($i, $jsonData)) {
            $jsonData[$i] = array();
          }
          if(!array_key_exists('dh', $jsonData[$i])) {
            $jsonData[$i]['dh'] = (20*$i).'[cm]';
          }
          $jsonData[$i][$alphabet[$j]] = $val;
          $i = $i+1;
        }
        $j = $j+1;
    }

    $jsonPaMandar = "
    {element: 'mediciones-grafico',
    parseTime: false,
    hideHover: true,
    resize: true,
    data: ".json_encode($jsonData)."
    ,
    hoverCallback: function(index, options, content) {
        return(content);
    },
    xkey: 'dh',
    ykeys: ".json_encode($usedKeys).",
    postUnits:'[m]',
    labels: ".json_encode($fechas)."
    }";    

    /*$mediciones = "{
  element: 'mediciones-grafico',
  parseTime: false,
  hideHover: true,
  resize: true,
  data: [
    { dh: '0[cm]', a: 0, b: 0, c: 0, d: 0 },
    { dh: '10[cm]', a: -0.1,  b: -0.21 , c: -0.3, d: -0.12},
    { dh: '20[cm]', a: -0.15, b: -0.25 , c: -0.4, d: -0.2},
    { dh: '30[cm]', a: -0.17, b: -0.18 , c: -0.35, d: -0.23},
    { dh: '40[cm]', a: -0.17, b: -0.15 , c: -0.37, d: -0.2},
    { dh: '50[cm]', a: -0.19, b: -0.18 , c: -0.36, d: -0.22},
    { dh: '60[cm]', a: -0.18, b: -0.15 , c: -0.39, d: -0.18},
    { dh: '70[cm]', b: -0.18, c: -0.3, d: -0.19},
    { dh: '80[cm]', b: -0.17, d: -0.22},
    { dh: '90[cm]', b: -0.19, d: -0.2}
  ],
  hoverCallback: function(index, options, content) {
        return(content);
    },
  xkey: 'dh',
  ykeys: ['a', 'b', 'c', 'd'],
  postUnits:'[m]',
  labels: ['24-12-16', '25-12-16', '26-12-16', '27-12-16']
}";
*/

		return $jsonPaMandar;
	}	


	//json placeholder segun entrega jueves
	public function json_table() { 
    $arrJson = array();
    $arrJson = json_decode($this->json_placeholder(),true); //Despues se riene que cambiar con el metodo del model de DEV-2F (cuando se les ocurra subirlo)
    $fechas = array();
    
    $jsonData = array();
    $i = 0;
    $maxSize = 0;
    $j = 0;
    $alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $usedKeys = array();
    foreach($arrJson["bitacoras"] as $field => $value) {
        $fechas[] = $field;
        $i = 0;
        if(!in_array($alphabet[$j], $usedKeys)) {
          $usedKeys[] = $alphabet[$j];
        }
        foreach($value as $val) {
          if(!array_key_exists($i, $jsonData)) {
            $jsonData[$i] = array();
          }
          if(!array_key_exists('dh', $jsonData[$i])) {
            $jsonData[$i]['dh'] = (20*$i).'[cm]';
          }
          $jsonData[$i][$alphabet[$j]] = $val;
          $i = $i+1;
        }
        $j = $j+1;
    }
    $i = 0;
    $jsonPaMandar = "
    {
      columns: [
      {field: 'dh', title: 'Distancia Horizontal[cm]'}";
    foreach($usedKeys as $k) {
      $jsonPaMandar = $jsonPaMandar.",{field: '".$k."', title: '".$fechas[$i]." Distancia Vertical[m]'}";
      $i = $i+1;
    }		
    $jsonPaMandar = $jsonPaMandar."],
    data: ".json_encode($jsonData)."}";




    /*$mediciones = "{
    columns: [{
        field: 'dh',
        title: 'Distancia Horizontal[cm]'
    }, {
        field: 'a',
        title: '24-12-16 Distancia Vertical[m]'
    }, {
        field: 'b',
        title: '25-12-16 Distancia Vertical[m]'
    }, {
        field: 'c',
        title: '26-12-16 Distancia Vertical[m]'
    }, {
        field: 'd',
        title: '27-12-16 Distancia Vertical[m]'
    }
    ],
    data: [{ dh: '0', a: 0, b: 0, c: 0, d: 0 },
    { dh: '10', a: -0.1,  b: -0.21 , c: -0.3, d: -0.12},
    { dh: '20', a: -0.15, b: -0.25 , c: -0.4, d: -0.2},
    { dh: '30', a: -0.17, b: -0.18 , c: -0.35, d: -0.23},
    { dh: '40', a: -0.17, b: -0.15 , c: -0.37, d: -0.2},
    { dh: '50', a: -0.19, b: -0.18 , c: -0.36, d: -0.22},
    { dh: '60', a: -0.18, b: -0.15 , c: -0.39, d: -0.18},
    { dh: '70', b: -0.18, c: -0.3, d: -0.19},
    { dh: '80', b: -0.17, d: -0.22},
    { dh: '90', b: -0.19, d: -0.2}]
}";*/
	return $jsonPaMandar;
	}

	public function index() {
		$this->load->view('consulta_perfil');
	}

	
}

<?php
class Mejor_playa extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

 /* navigator.geolocation.getCurrentPosition(success, error);

        function success(position) {

            var GEOCODING = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + position.coords.latitude + '%2C' + position.coords.longitude + '&language=en';

            $.getJSON(GEOCODING).done(function(location) {
                $('#country').html(location.results[0].address_components[6].long_name);
                $('#state').html(location.results[0].address_components[5].long_name);

            })

        }

        function error(err) {
            console.log(err)
        }
*/



public function get_playas(){
    $pais=$_REQUEST['pais'];
    $region = $_REQUEST['region'];
    $this->db->select('p.PLA_NOMBRE');
    $this->db->from('SGC.SGC_PLAYA p', 'SGC.SGC_REGION r', 'SGC.SGC_PAIS ps');
    //$this->db->order_by('PLA_NOMBRE');
   // $this->db->join('SGC.SGC_CIUDAD c','r.REG_ID = c.SGC_REGION_REG_ID' );
    $this->db->where('ps.PAI_NOMBRE', $pais);
    $query = $this->db->get();
    if($query->num_rows() > 0){
      return $query;
    } else {
      return false;
    }
  }



















	}


?>
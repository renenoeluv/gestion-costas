
# CodeIgniter Geolocation Library

# gestion-costas
<<<<<<< HEAD
Sistema de Gestión de Costas - Desarrollo Web 2016 / Front Caso de Uso "Ver Perfil Playa"
## Actualizado 3-1-2017
###Cambios:
- Se finaliza Vista de Perfil. Los datos aún son placeholder
- Se agrega un archivon JSON de ejemplo para ver el formato necesario para procesar datos hacia la vista
=======
Sistema de Gestión de Costas - Desarrollo Web 2016
## Integrantes
- Alfonso Prado
- Francisca Georgue
- Bastian Toledo

## Ejemplos de uso

- Para obtener la interpolación del perfil id 2 de la playa id 1 se escribe en la url: /gestion-costas/index.php/perfil/get/1/2
- Para obtener la interpolación del perfil id 1 de la playa id 3 se escribe en la url: /gestion-costas/index.php/perfil/get/3/1
- La url /gestion-costas/index.php/perfil/get/ por predeterminado es el perfil id 1 de la playa id 1

## Retorno: Devuelve un JSON con el siguiente formato:
```
{
  "perfil": 1,
  "cantidad_bitacoras": 4,
  "escala_dh": 0.2,
  "bitacoras": {
    "24-12-2016": [0, -0.1, -0.15, -0.17, -0.17, -0.18, -0.17, -0.19],
    "25-12-2016": [0, -0.21, -0.25, -0.18, -0.15, -0.18, -0.15, -0.3, -0.22, -0.2],
    "26-12-2016": [0, -0.3, -0.4, -0.35, -0.36, -0.39, -0.19],
    "27-12-2016": [0, -0.12,-0.2, -0.23, -0.2, -0.22, -0.18]
  }
}
```
 
## Datos de prueba
-Hay una base de datos que tiene valores de prueba, está contenida en el archivo database_beta.sql.

## A tener en cuenta
- Cada bitacora como primer registro debe tener un registro con todos sus atributos inicializados en 0, de lo contrario no funciona bien la funcion de interpolacion.

## Actualización 06-12-2016
### Implementado:
- Se mejoró el CRUD, se agregaron las funciones get_bitacoras y get_medicion.
- Se implementó la función interpolar, que recibe una tabla y retorna una nueva tabla con los datos interpolados.
- Se creo un nuevo formato para el JSON que es retornado.


## Actualización 30-12-2016
### Implementado:
- Modelo para la obtención de las medidas de las bitacoras relacionado a un perfil de la playa.
- JSON para retorno de datos

### Falta:
- Implementar interpolación

<<<<<<< HEAD
>>>>>>> test
=======

CodeIgniter Geolocation library allows you to locate an IP Address using "ipinfodb" API.

# Installation

CodeIgniter Versoin >= 2.x.x

Copy the file `config/geolocation.php` to the `application/config` folder.

Copy the file `libraries/geolocation.php` to the `application/libraries` folder.

# Usage

You need to subscribe to http://ipinfodb.com/register.php to get your API KEY and then,

Open `application/config/geolocation.php` and put it there :

```php
$config['api_key'] = 'YOUR_API_KEY';
```

After that, you can call the library within your controller for instance like following :

```php
$this->load->library('Geolocation');
$this->load->config('geolocation', true);

$config = $this->config->config['geolocation'];

$this->geolocation->initialize($config);
$this->geolocation->set_ip_address($ip); // IP to locate
// $this->geolocation->set_format('json');
// OR you can change the format within `config/geolocation.php` config file
$country = $this->geolocation->get_country();
var_dump($country);

// For more precision
$city = $this->geolocation->get_city();
if($city === FALSE)
    var_dump($this->geolocation->get_error());
else
    var_dump($city);
```

# Additional parameters

You can change the result format within the config file,
or leave it empty to return a PHP Array

Open `application/config/geolocation.php` :

```php
$config['format'] = 'json'; // available format : xml|raw|json  or empty for php array
```

# IpInfoDb API :

<<<<<<< HEAD
# logincosta
=======
For more information about the API please visit : http://ipinfodb.com
>>>>>>> master
>>>>>>> master

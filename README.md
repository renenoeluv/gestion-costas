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

>>>>>>> test

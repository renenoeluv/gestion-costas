# gestion-costas
Sistema de Gestión de Costas - Desarrollo Web 2016
## Actualizado 22-12-2016
###Cambios:
- Se modifica modelo de base de datos par agregar nombre de esquema "sgc" (sistema de gestión de costas" en vez de "myDB")
- Se modifica archivo application/config/config.php para definir ruta base. **Este archivo lo deben definir según sus propias preferencias y no lo deben subir en sus commits (usar git ignore), porque si no le cambiarán las configuraciones a sus compañeros.**
- Se modifica application/config/database.php para definir conexión con base de datos de acuerdo al nuevo esquema (sgc) Yo definí un usuairo y contraseña específicos (no lo dejé con root).  **Este archivo lo deben definir según sus propias preferencias y no lo deben subir en sus commits (usar git ignore), porque si no le cambiarán las configuraciones a sus compañeros.**

###Novedades:
Agregué un recorrido de la arquitectura completa para mostrar todos los registros de una tabla usando ajax. Pueden ver esta funcionalidad en http://localhost:8888/gestion-costas/index.php/Paises
- Vista application/views/lista_paises.php : Agregué una vista muy sencilla con bootstrap:  la vista referencia a un javascript que hice para poder recoger los eventos ajax (algunos le dicen el Front Controller)
- Front Controller assets/js/ajax.js: tiene un listener para el botón guacho de la vista, y hace una llamada ajax al controller para recuperar la lista de países. Utilicé .ajax y no .get o .post para poder especificar el formato del retorno (JSON)
- Controller application/controller/Paises.php: tiene dos métodos: el index, que se llama al poner la url indicada más arriba y que carga a la vista, y otro método para poder listar paises, que invoca a un método del modelo, codifica la salida en json y luego hace un "echo" para generar la respuesta. Considerar que para poder acceder a este controller en la URL mencionada más arriba, lo tuve que agregar a application/config/routes.php
- Model application/controller/Pais_model.php: tiene un único método para sacar todos los datos de la tabla de países. Están comentados los métodos que permiten hacer las otrasoperaciones (Crear, Modificar, Eliminar) pues no se usan en este ejemplo.
- Pónganle un par de daos a la tabla de paises, pues no controlé el caso en que la query retorna cero registros.


###DEV-1F:
La vista espera el paso por metodo get del id de la campaña para poder cargar los perfiles y sus respectivos estados, ademas de el bloqueo de los botones sin ninguna medicion, cada vez que un perfil es confirmado, se modifica el estado de la bitacora correspondie y el boton confirmar tambien se bloquea para no ejecutar una accion inecesaria.
Cada vez que se hace click en un perfil se cargan sus mediciones correspondientes.
Falta el cargar completo de la pagina la primera vez, y el editar a las mediciones, y posibles modificaciones a la bd.


###DEV1-F NOVEDADES 06-01-2017:
Entrega final , con el editar agregado y el finalizar campaña, reconoce los perfiles y sus estados, ademas de la carga inicial de los datos al llamar la vista con el idcamp por get.




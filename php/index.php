<?php
#INDEX es el que mostraremos las salidas de las vistas al usuario
#y tambien a traves de el enviamos las distintas acciones que el usuario
# envie al controlador.

#REQUIRE
# Establece que el codigo del archivo invocado es requerido es decir obligatorio
# para el funcionamiento del programa si el archivo especificado no se encuentra 
# se mostrara el siguiente error: "fatal error y se detiene el programa"

require_once "mvc/controladores/controlador.plantilla.php";
require_once "mvc/controladores/controlador.formularios.php"; 
require_once "mvc/modelos/formularios.modelo.php";


$conexion = conexion::conectar();
echo '<pre>';print_r($conexion); echo'</pre>';
#Instanciamos la clase que se creo en el controlador de la plantilla
$plantilla= new ControladorPlantilla();
$plantilla->ctrTaerPlantilla();


?>


<?php 

class ControladorFormularios{

static public function ctrregistro(){

if (isset($_POST["formNombre"])){
    $tabla = "registro";
    $datos = array("nombre"=>$_POST["formNombre"],
                  // "email"=>$_POST["formCorreo"],
                   "pass"=>$_POST["formContraseña"]
);
$Respuesta =  modeloFormularios::mdlRegistro($tabla,$datos);
return $Respuesta;
                    }
}

#seleccionar registros (metodo)
static public function ctrSeleccionarRegistros($item,$valor){
    $tabla = "registro";
    $respuesta = modeloFormularios::mdlSeleccionarRegistros($tabla,$item,$valor);
    return $respuesta;
}

#metodo de ingreso

public function ctrIngreso(){
    if(isset($_POST["ingresoNombre"])){
  
    $tabla="registro";
    $item= "nombre"; #columna en la que quiero buscar coincidencias
    $valor= $_POST["ingresoNombre"];
    $respuesta = modeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

    #traigo todos los registros que hay en la base de datos
    #paso los parametros al metodo seleccionar registros
  
    #comparo lo que esta en la columna email con lo que viene escrito en el input
  if(is_array($respuesta)){
    if($respuesta["nombre"]==$_POST["ingresoNombre"]&& $respuesta["pass"] ==$_POST["ingresoPass"]){
      $_SESSION["listo"]="ok";
      echo '<script>
      if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
      }
        window.location ="index.php?pagina=inicio";
    </script>';
        
    }else{
      echo '<script>
                      if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                      }
                    
                    </script>';
                    echo '<div class="alert alert-danger">Usuario no registrado</div>';
    }
  
  }else{
    echo '<script>
                    if(window.history.replaceState){
                      window.history.replaceState(null, null, window.location.href);
                    }
                  
                  </script>';
                  echo '<div class="alert alert-danger">Usuario no registrado</div>';
  }


  }
  
  }
  #actualizar registros
public function ctrActualizarRegistros(){
  if(isset($_POST["actualizarNombre"])){
    if($_POST["actualizarPass"]!=""){
      $contra=$_POST["actualizarPass"];
    }else{
      $contra=$_POST["passActual"];
    }
    $tabla="registro";
    $datos = array("id"=>$_POST["idUsuario"],
                  "nombre"=>$_POST["actualizarNombre"],
                  // "email"=>$_POST["actualizarEmail"],
                  "pass"=>$contra );

    $Respuesta =  modeloFormularios::mdlActualizarRegistro($tabla,$datos);              
    
    if($Respuesta=="ok"){
      echo '<script>
                    if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                    }
    
                  </script>';
                 echo '<div class="alert alert-success">Usuario Actualizado</div>';
    }
  }
}

#eliminar registros
public function ctrEliminarRegistro(){
  if(isset($_POST["eliminar"])){
      
      $tabla = "dtbase";
      $valor = $_POST["eliminar"];
      $respuesta = ModeloFormularios::mdlEliminarRegistro($tabla,$valor);
      
      if ($respuesta == "ok"){
          echo '<script>
          if(window.history.replaceState){
              window.history.replaceState(null,null,window.location.href);
          }
          window.location = "index.php?pagina=inicio";
          </script>';
      }

   }
}

static public function ctrBuscarRegistros($datos){
  $tabla="registro";
  $datosiuuu= array("nombre" =>$_POST["nombre"]);
  $respuesta=modeloFormularios::mdlBuscarRegistro($tabla,$datos);
  return $respuesta;

}
  }
  
  ?>
<?php 
require_once  "conexion.php";

class modeloFormularios{
    #Metodo registrar
    static public function mdlRegistro($tabla,$datos){

        #realizo una declaracion o statement de la consulta a ejecutar
        $stmt=conexion::conectar()->prepare("INSERT INTO $tabla(nombre,pass
        )VALUES(:nombre,:pass)");

        $stmt->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
        // $stmt->bindParam(":email",$datos["email"],PDO::PARAM_STR);
        $stmt->bindParam(":pass",$datos["pass"],PDO::PARAM_STR);

          if($stmt->execute()){
            return "ok";
          }else{
            print_r(conexion::conectar()->errorInfo());
          }

    }

    #seleccionar registros 
    
    #seleccionar registros
    static public function mdlSeleccionarRegistros($tabla,$item,$valor){
      if ($item==null && $valor==null){
          $stmt= conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha,'%d/%m/%y') as fecha FROM $tabla");
          $stmt->execute();
          return $stmt -> fetchAll();

      }else{
          $stmt= conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha,'%d/%m/%y') as fecha FROM $tabla WHERE $item=:$item");
          $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
          $stmt->execute();
          return $stmt -> fetch();

      }

      
  }

  #Actualizar Registros
  static public function mdlActualizarRegistro($tabla,$datos){
    $stmt=conexion::conectar()->prepare("UPDATE $tabla 
    SET nombre=:nombre,pass=:pass WHERE id =:id");

      $stmt->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
      // $stmt->bindParam(":email",$datos["email"],PDO::PARAM_STR);
      $stmt->bindParam(":pass",$datos["pass"],PDO::PARAM_STR);
      $stmt->bindParam(":id",$datos["id"],PDO::PARAM_INT);
      if ($stmt->execute()){
          return "ok";
      }else{
        print_r(conexion::conectar()->errorInfo());
      }
  } 

#eliminar registros
static public function mdlEliminarRegistro($tabla,$valor){
  $stmt=conexion::conectar()->prepare("DELETE FROM $tabla WHERE id =:id");
  $stmt->bindParam(":id",$valor,PDO::PARAM_INT);
  if ($stmt->execute()){
    return "ok";
  }
  else{
    print_r(conexion::conectar()->errorInfo());
  }
}

  #Buscar Registros
  static public function mdlBuscarRegistro($tabla,$datos){
    if(strlen($datos)==0){
      $stmt= conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha,'%d/%m/%y') as fecha FROM $tabla");
      $stmt->execute();
      return $stmt -> fetchAll();

  }else{
      $stmt= conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha,'%d/%m/%y') as fecha FROM $tabla WHERE nombre LIKE CONCAT ('%',:nombre,'%')");
      $stmt->bindParam(":nombre",$datos, PDO::PARAM_STR);
      $stmt->execute();
      return $stmt -> fetchAll();

  }

    }

  }

?>
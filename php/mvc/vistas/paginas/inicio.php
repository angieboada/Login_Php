<!-- <h1 class="m-4">Inicio</h1>   

<#?php
$url = new PDO("mysql:host=localhost;dbname=php","root","");
?>

<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Fecha</th>
      </tr>
    </thead>
<#?php foreach($url->query("SELECT * from registro") as $row){?>


<tr>
  <td><#?php echo $row["id"]?></td>
  <td><#?php echo $row["nombre"]?></td>
  <td><#?php echo $row["email"]?></td>
  <td><#?php echo $row["fecha"]?></td>
  <td><a href=""><button type="button" class="btn btn-success">Editar</button></a></td>
  <td><a href=""><button type="button" class="btn btn-danger">Eliminar</button></a></td>
</tr>
<#?php } ?>
</table> -->


<?php
if(isset($_SESSION["listo"])){
  if($_SESSION["listo"]!="ok"){
    echo '<script> window.location ="index.php?pagina=ingreso";</script>';
    return;
  }
}
else{
  echo '<script> window.location ="index.php?pagina=ingreso";</script>';
  return;
}



$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null,null);

?>
<form role="form" method="POST">
  <div class="form-group">
    <input type="text" class=" form-control" name="nombre" id="nombre" 
    placeholder="Ingrese el nombre" require value="">
  </div>
<button type="submit" class="btn btn-primary">Buscar</button>

<?php
if($_POST){
  $usuarios=ControladorFormularios::ctrBuscarRegistros($_POST['nombre']);
  $_POST['nombre']='';
  unset($_POST['nombre']);
  require_once "mvc/modelos/conexion.php";
}

?>

</form>

<table class="m-4 table table-striped">
    <thead>
      <tr class="table-danger">
        <th>N°</th>
        <th>Nombre</th>
        <!-- <th>Email</th> -->
        <th>Fecha</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($usuarios as $key => $value): ?>

      <tr>
        <td> <?php echo ($key+1); ?></td>
        <td> <?php echo $value ["nombre"] ?></td>
        <!-- <td> <?php echo $value ["email"] ?></td> -->
        <td> <?php echo $value ["fecha"] ?></td>

        <div class="btn group">
        <td><a href="index.php?pagina=editar&id=<?php echo $value["id"] ?>" 
          class="btn btn-warning"><i class="fa-solid fa-user-pen"></i></a></td>
        <td><a href="index.php?pagina=eliminar&id=<?php echo $value["id"] ?>"
        class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
        
        <?php 
                  $eliminar = new ControladorFormularios();
                  $eliminar -> ctrEliminarRegistro();
                 
        ?>
      
      </tr>

      <?php endforeach ?>

    </tbody>

</table> 

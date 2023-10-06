<?php

if(isset($_GET["id"])){
  # me traigo ese usuario
  $item="id";
  $valor= $_GET["id"];
  $usuario=ControladorFormularios::ctrSeleccionarRegistros($item,$valor);
}

?>

<div class="d-flex justify-content-center text-center">


<form class="p-4 m-4" style="background-color: #D983FA;" method="post">



                  <div class="form-group">
              
                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa-sharp fa-solid fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control" value="<?php echo $usuario["nombre"];?>" 
                  placeholder="Ingrese su nombre" id="nombre" name="actualizarNombre">
                  </div>
   
                </div>

                <!-- <div class="form-group">
                 
                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa-sharp fa-solid fa-square-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" value="<?php echo $usuario["email"];?>"
                  placeholder="Escriba su email" id="email" name="actualizarEmail">
                  </div>

                </div> -->

                <div class="form-group">

                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa-solid fa-user-shield"></i></span>
                  </div>
                  <input type="password" class="form-control" placeholder="Escriba su contraseña nueva" id="contraseña" name="actualizarPass">
                  
                  <input type="hidden" name="passActual" value="<?php echo $usuario["pass"];?>">
                  <input type="hidden" name="idUsuario" value="<?php echo $usuario["id"];?>">
                </div>
                  
                </div>

           
                <?php

                $actualizar=new ControladorFormularios();
                $actualizar->ctrActualizarRegistros();
                ?>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>

</div>


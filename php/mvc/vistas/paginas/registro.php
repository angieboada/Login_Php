

<div class="d-flex justify-content-center text-center">


<form class="p-4 m-4" style="background-color: #D983FA;" method="post">



                  <div class="form-group">
                  <label for="Nombre">Nombre:</label>
                  
                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa-sharp fa-solid fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="..." id="nombre" name="formNombre" required>
                  </div>
   
                </div>

                <!-- <div class="form-group">
                  <label for="email">Correo Electronico:</label>

                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa-sharp fa-solid fa-square-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" placeholder="@..." id="email" name="formCorreo" required>
                  </div>

                </div> -->

                <div class="form-group">
                  <label for="pwd">Contraseña:</label>

                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa-solid fa-user-shield"></i></span>
                  </div>
                  <input type="password" class="form-control" placeholder="***" id="contraseña" name="formContraseña" required>
                  </div>
                  
                </div>
                <div class="form-group form-check">
                  <label for="form-check-label">
                    <input type="checkbox"> Recordar Datos
                  </label>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>

                
<?php
  $registro = ControladorFormularios ::ctrregistro();
  if($registro=="ok"){

    echo '<script>
    if(window.history.replaceState){ 

   window.history.replaceState(null,null,window.location.href);
    }

    
    </script>'; 

    echo '<div class="m-2 alert alert-success">usuario creado correctamente</div>';
  }
?>

        </form>

</div>


<div class="d-flex justify-content-center text-center">

  <form class="p-4 m-4" style="background-color: #D983FA;" method="post">
                  
                <div class="form-group">
                  <label for="email">Nombre:</label>

                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa-sharp fa-solid fa-square-envelope"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder=" "  name="ingresoNombre" required>
                  </div>

                </div>

                <div class="form-group">
                  <label for="pwd">Contraseña:</label>

                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa-solid fa-user-shield"></i></span>
                  </div>
                  <input type="password" class="form-control" placeholder="***" name="ingresoPass" required>
                  </div>
                  
                  
                </div>
                <div class="form-group form-check">
                  <label for="form-check-label">
                    <input type="checkbox"> Recordar Datos
                  </label>
                </div>


                <?php
                //el objeto de ingreso quiero que sea no estatico 
                //para quee la respuesta se la devuelva el controlador
                //llevandose a la pagina de incio donde se encuentra la table de registros.

                $ingreso = new ControladorFormularios();
                $ingreso -> ctrIngreso();
                ?>
                <button type="submit" class="btn btn-primary">Ingresar</button>
              </form>

</div>

<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/8d565cf3d8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>MVC</title>
  </head>
  <body>
    <div class="m-4 d-flex justify-content-center">
        <img src="logo2.png" alt="Logo sena" width="150px">
    </div>

    <div class="container-fuid" style="background-color: #A4F0FF;">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">

                <?php if(isset($_GET["pagina"])):?>
                    <?php if($_GET["pagina"]=="registro"):?>
                    
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?pagina=registro"><i class="fa-sharp fa-solid fa-pen"></i> Registro</a>
                    </li>

                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                        </li>
                    
                    <?php endif ?>

                    <?php if($_GET["pagina"]=="ingreso"):?>
                    
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=ingreso"><i class="fa-sharp fa-solid fa-check"></i> Ingreso</a>
                        </li>

                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                        </li>
                    
                    <?php endif ?>
                

                    <?php if($_GET["pagina"]=="inicio"):?>
                    

                        <li class="nav-item"> 
                            <a class="nav-link active" href="index.php?pagina=inicio"><i class="fa-sharp fa-solid fa-universal-access"></i> Inicio</a>
                        </li>
                    <?php else: ?>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                        </li>
                    
                    <?php endif ?>

                    <?php if($_GET["pagina"]=="salir"):?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=salir"><i class="fa-sharp fa-solid fa-circle-xmark"></i> Salir</a>
                        </li>
              
                    <?php else: ?>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                        </li>
                    
                    <?php endif ?>

                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                        </li>

                <?php endif ?>
                

            </ul>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <?php 
            #contenido
            #traigo a inicio en plantilla
            # ISSET: Determina si una variable esta contenida y no es nula
            if(isset($_GET["pagina"])){
                if($_GET["pagina"]=="registro" ||
                   $_GET["pagina"]=="ingreso" ||
                   $_GET["pagina"]=="inicio" ||
                   $_GET["pagina"]=="editar" ||
                   $_GET["pagina"]=="salir" 
                   ){
                     
                    include "paginas/".$_GET["pagina"].".php";

                   }else{
                    include"paginas/error404.php";
                   }


                   }else{
                    include"paginas/ingreso.php";
                   }


                   
            ?>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
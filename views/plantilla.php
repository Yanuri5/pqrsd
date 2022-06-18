<?php
/* 
    *Se incluye la conexión a la base de datos.
    *Se inicia sesion
    * autenticacion de inicio de sesion
    * obtener información del usuario loguiado
*/
require_once("../models/conexion.php");
session_start();
if(!isset($_SESSION['cedula'])){
    header("location: ../views/login.php");
}
    $cedula= $_SESSION['cedula'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PQRSD</title>
    <link rel="icon" href="../svg/pqrsd.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../css/bootstrap.css"> -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <div class="nave">
            <div class="row cabecera">
                <div class="col-1">
                    <a href="../controller/home.php" class="btn btn-outline-primary home">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                        </svg>
                        Home
                    </a>
                </div>
                <div class="col-2">
                    <center>
                        <img src="../img/alcaldía.jpg" id="alcaldia">
                    </center>
                </div>
                <div class="col-6">
                    <p id="h1">PORTAL OFICIAL DE PQRDS</p>
                    <p id="h2">DE LA ALCALDÍA DE PUERTO CONCORDIA - META</p>
                </div>
                <div class="col-2">
                    <center>
                        <img src="../img/pdet.png" id="alcaldia">
                    </center>
                </div>
                <div class="col-1">
                    <ul class="nav nav-tabs">
                        <li class="nav-item dropdown">
                            <a href="" data-toggle="dropdown" class="btn btn-outline-success usuario">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-square" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                    <path
                                        d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z">
                                    </path>
                                </svg> Usuario</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../controller/perfil.php">Perfil</a>
                                <a class="dropdown-item" href="../controller/contrasena.php">Actualizar contraseña</a>
                                <div class="dropdown-divider"></div>
                                <button class="dropdown-item exit" onclick="location.href='salir.php'">Salir</button>
                            </div>
                        </li>
                    </ul>
    
                </div>

                
            </div>
            <center>
                <div class="row botones col-3">
                    <a class="btn col normal" href="../controller/entidades.php"><img src="../svg/apartment.svg"></a>
                    <a href="../controller/user.php" class="btn col normal"><img src="../svg/user.svg"></a>
                    <a href="../controller/pqr.php" class="btn col normal"><img src="../svg/plus.svg"></a>


                    <a href="../controller/search.php" class="btn col normal"><img src="../svg/search.svg"></a>


                </div>
            </center>
        </div>



        <div class="secciones">
            <?php
            include($sesion); //Se incluyen las variables $sesion creada en los archvos de la carpeta controll
            ?>

        </div>

    </div>
    
   
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/code.js"></script>
</body>

</html>
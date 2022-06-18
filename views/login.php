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

  <div class="container col-md-8" id="login">
    <div class="row cabecera">
      <div class="col-md-2">
        <img src="../img/alcaldía.jpg" id="alcaldia">
      </div>
      <div class="col-md-8">
        <p id="h1"> PORTAL OFICIAL DE PQRDS</p>
        <p id="h2">DE LA ALCALDÍA DE PUERTO CONCORDIA - META</p>
      </div>
      <div class="col-md-2">
        <img src="../img/pdet.png" id="alcaldia">
      </div>

    </div>
    <center>

      <div class="contenido col-md-4">

        <form action="" method="post" autocomplete="off">
          <?php
          if (!empty($_POST)) {
            include_once("../models/login.php");
          }
          ?>
          <input type="text" name="cedula" class="form-control login" placeholder="Ingrese su cédula.">
          
          <input type="password" name="contrasena" id="con" class="form-control login" placeholder="Ingrese su contraseña.">
          

          <input type="submit" class="btn btn-primary" value="Ingresar">

        </form>

      </div>
    </center>

  </div>
  
  <script src="../js/code.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>
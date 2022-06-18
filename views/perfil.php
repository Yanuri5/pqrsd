<?php
$datos = "SELECT cedula, nombre, apellido, correo, celular 
    FROM `admin` WHERE cedula = '$cedula';";
$resultado = $conexion->query($datos);
$row = $resultado->fetch_assoc();
?>
<article id="datos">
    <center>
        <div class="datos col-10">
            <div class="col-10">
                
                    <div class="row">
                        <div class="col-6">
                            <p>Cédula:</p>
                            <div class="form-control" id="ced"> 
                                <?php echo utf8_decode($row['cedula']); ?>
                            </div>
                        </div>

                    </div><br>
                    <div class="row">
                        <div class="col-6">
                            <p>Nombres:</p>
                            <div class="form-control" id="ced"> 
                                <?php echo utf8_decode($row['nombre']); ?>
                            </div>
                        </div>
                        <div class="col-6">
                            <p>Apellidos:</p>
                            <div class="form-control" id="ced"> 
                                <?php echo utf8_decode($row['apellido']); ?>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-6">
                            <p>Correo:</p>
                            <div class="form-control" id="ced"> 
                                <?php echo utf8_decode($row['correo']); ?>
                            </div>
                        </div>
                        <div class="col-6">
                            <p>Celular:</p>
                            <div class="form-control" id="ced"> 
                                <?php echo utf8_decode($row['celular']); ?>
                            </div>
                        </div>
                    </div><br>

                    <br>
                    <div class="form-row">
                    <div class="col">
                        <a href="datos.php" class="btn btn-success col-8">Editar</a>
                    </div>
                    <div class="col">
                        <a href="home.php" class="btn btn-danger col-8">Volver</a>
                    </div>

                </div>

                

            </div>
    </center>
</article>
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
                <form action="" method="post" autocomplete="off">
                <?php
                if (!empty($_POST)) {
                    include_once("../models/datos.php");
                }
                ?>
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
                            <input type="text" name="nombre" class="form-control" value="<?php echo utf8_decode($row['nombre']); ?>">
                        </div>
                        <div class="col-6">
                            <p>Apellidos:</p>
                            <input type="text" name="apellido" class="form-control" value="<?php echo utf8_decode($row['apellido']); ?>">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-6">
                            <p>Correo:</p>
                            <input type="email" name="correo" class="form-control" value="<?php echo utf8_decode($row['correo']); ?>">
                        </div>
                        <div class="col-6">
                            <p>Celular:</p>
                            <input type="text" name="celular" class="form-control" value="<?php echo utf8_decode($row['celular']); ?>">
                        </div>
                    </div><br>

                    <br>
                    <div class="form-row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary col-8">Guardar</button>
                    </div>
                    <div class="col">
                        <a href="perfil.php" class="btn btn-danger col-8">Cancelar</a>
                    </div>

                </div>

                </form>

            </div>
    </center>
</article>
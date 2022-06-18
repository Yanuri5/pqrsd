<?php
if (!isset($_GET['nit'])) {
    echo " <script>
                alert('Ingreso denegado');
                window.location.href='entidades.php';
                </script>
                ";
}

$nit_ent = $_GET['nit'];
$ver_entidades = "SELECT * FROM `entidades_ext` WHERE nit= '$nit_ent';";
$resultado = mysqli_query($conexion, $ver_entidades);
$row = mysqli_fetch_assoc($resultado);
?>
<article id="user">
    <center>
        <div class="col-5 usuarios">
            <h3>Editar entidad.</h3><br>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>?nit=<?php echo $nit_ent;  ?>" method="post" id="newentidad" autocomplete="off">
                <?php
                if (!empty($_POST)) {
                    include_once("../models/edit_ent.php");
                }
                ?>
                <br>
                <p id="label">NIT:</p>
                <input type="number" name="nit" value="<?php echo $row['nit']; ?>" class="form-control"><br>
                <p id="label">Nombre de la entidad:</p>
                <input type="text" name="nombre_ent" value="<?php echo $row['nombre_ent']; ?>" class="form-control"><br>
                <p id="label">Correo de la entidad:</p>
                <input type="email" name="correo_ent" value="<?php echo $row['correo_ent']; ?>" class="form-control"><br><br>
                <div class="form-row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    <div class="col">
                        <a href="entidades.php" class="btn btn-danger">Cancelar</a>
                    </div>

                </div>
            </form>
        </div>
    </center>
</article>
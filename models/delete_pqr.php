<?php
$id = $_GET['id'];
$s = $_GET['s'];
$delete = $_GET['delete'];

if ($s == 1) {
    $sql = "SELECT titulo, descripcion FROM tramites_usuarios WHERE id='$id';";
    $resultado = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_assoc($resultado);?>
    <div class="verpqr col-8">
        <h4>⚠ ¿Seguro que quiere borrar esta Pqrsd?</h4><br>
        <p id="label">Titulo:</p>
        <p class="cont"><?php echo utf8_decode($row['titulo']) ?></p><br>
        <p id="label">Descripción:</p>
        <p class="cont"><?php echo utf8_decode($row['descripcion']) ?></p>
        <center>
            <button class='btn btn-danger' onclick='window.location.href="?s=1&id=<?php echo $id; ?>&delete=Yes"'>Borrar</button>
            <button class='btn btn-success' onclick="window.location.href='search.php'">Cancelar</button>
        </center>
    
    </div>

<?php } 
    if($delete=='Yes'){

            

        $quitar_pqr = "DELETE FROM `tramites_usuarios` WHERE `tramites_usuarios`.`id` = '$id';"; //Se le borran las pqrsd de este usuario.
        $ped= $conexion->query("$quitar_pqr");


        echo "<script>
        window.location.href='search.php';
        </script>";

    }
?>
<?php
if ($s == 2) {
    $sql = "SELECT titulo, descripcion FROM tramites_entidades WHERE id='$id';";
    $resultado = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_assoc($resultado);?>
    <div class="verpqr col-8">
        <h4>⚠ ¿Seguro que quiere borrar esta Pqrsd?</h4><br>
        <p id="label">Titulo:</p>
        <p class="cont"><?php echo utf8_decode($row['titulo']) ?></p><br>
        <p id="label">Descripción:</p>
        <p class="cont"><?php echo utf8_decode($row['descripcion']) ?></p>
        <center>
            <button class='btn btn-danger' onclick='window.location.href="?s=2&id=<?php echo $id; ?>&delete=Yes"'>Borrar</button>
            <button class='btn btn-success' onclick="window.location.href='search.php'">Cancelar</button>
        </center>
    
    </div>

<?php } 
    if($delete=='Yes'){

            

        $quitar_pqr = "DELETE FROM `tramites_entidades` WHERE `tramites_entidades`.`id` = '$id';"; //Se le borran las pqrsd de este usuario.
        $ped= $conexion->query("$quitar_pqr");


        echo "<script>
        window.location.href='search.php';
        </script>";

    }
?>
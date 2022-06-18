<?php
$mysqli = new mysqli('localhost', 'root', '', 'pqrsd');
if (!isset($_GET['ced_user'])) {
    echo " <script>
                alert('Ingreso denegado');
                window.location.href='user.php';
                </script>
                ";
}

$ced_user = $_GET['ced_user'];



$ver_usuarios = "SELECT cedula, nombre, apellido, celular, id_vereda, vereda, id_zona, id_municipio
FROM usuarios u INNER JOIN veredas v on u.id_vereda=v.id 
JOIN municipios m ON v.id_municipio= m.id WHERE cedula='$ced_user';";
$resultado = mysqli_query($conexion, $ver_usuarios);

$row = mysqli_fetch_assoc($resultado);


?>
<article id="user">
    <div class="col usuarios">
        <h2>Edición de usuario </h2><br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>?ced_user=<?php echo $ced_user;  ?>" method="post">
         <?php
             if(!empty($_POST)){
               include('../models/edit_user.php'); 
           }
             
         ?>
            <div class="form-row">
                <div class="col">
                    <p id="label">Cédula:</p>
                    <input type="text" name="cedula" value="<?php echo $row['cedula'];  ?>" class="form-control" placeholder="Nombre:">
                </div>
                <div class="col">
                    <p id="label">Nombre:</p>
                    <input type="text" name="nombre" value="<?php echo $row['nombre'];  ?>" class="form-control" placeholder="Cédula:">
                </div>
            </div><br>
            <div class="form-row">
                <div class="col">
                    <p id="label">Apellido:</p>
                    <input type="text" name="apellido" value="<?php echo $row['apellido'];  ?>" class="form-control" placeholder="Nombre:">
                </div>
                <div class="col">
                    <p id="label">Celular:</p>
                    <input type="text" name="celular" value="<?php echo $row['celular'];  ?>" class="form-control" placeholder="Cédula:">
                </div>
            </div><br>

            
            <div class="form-row">
                <div class="col">
                    <p id="label">Municipio:</p>
                    <select class="form-control" id="municipios">
                    
                    <?php
                    $query = $mysqli -> query ("SELECT * FROM municipios ORDER BY municipio");
                       while ($valores = mysqli_fetch_assoc($query)) { ?>
                    <!-- echo '<option value="'.$valores['id'].'">'.$valores['departamento'].'</option>'; -->
                    <option value="<?php echo$valores['id']; ?>" 
                        class="form-control" <?php if ($row['id_municipio']==$valores['id']){ echo 'selected';}; ?>> <!-- Se comparan los cargos con el cardo del usuario -->
                        <?php echo $valores['municipio']; ?>
                    </option>
                   <?php } 
                    ?>
                    </select>
                </div>
                <div class="col">
                    <p id="label">Vereda o Barrio:</p>
                    <select class="form-control" name="id_vereda" id="veredas">
                        <option selected hidden value="<?php echo $row['id_vereda'];  ?>"><?php echo $row['vereda'];  ?></option>

                    </select>
                </div>
            </div><br>
            <div class="form-row">
                <div class="col-6">
                    <p id="label">Zona:</p>
                    <select class="form-control" name="id_zona">
                         <?php
                        $query = $mysqli -> query ("SELECT * FROM zonas ORDER BY zona");
                        while ($valores = mysqli_fetch_assoc($query)) { ?>
                        <!-- echo '<option value="'.$valores['id'].'">'.$valores['departamento'].'</option>'; -->
                        <option value="<?php echo$valores['id']; ?>" 
                            class="form-control" <?php if ($row['id_zona']==$valores['id']){ echo 'selected';}; ?>> <!-- Se comparan los cargos con el cardo del usuario -->
                            <?php echo $valores['zona']; ?>
                        </option>
                    <?php } 
                        ?>
                    </select>
                </div>
            </div><br>
            <center>
            <div class="form-row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary col-5">Guardar</button>
                    </div>
                    <div class="col">
                        <a href="user.php" class="btn btn-danger col-5">Cancelar</a>
                    </div>

                </div>
            </center>
        </form>

</article>
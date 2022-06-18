<?php

//DATOS OBTENIDOS A TRAVÉS DE POST
$user_ent = $_POST['user_ent'];
$n_radicado = $_POST['n_radicado'];
$fecha = $_POST['fecha'];
$sec_rec = $_POST['sec_rec'];
$tipo = $_POST['tipo'];
$ced_nit = $_POST['ced_nit'];
/* FILTROS PARA LA BUSQUEDA DE INFORMACION */
include('filtros.php');


    
/* Condiciones para saber cual información quiere ver el admin */
if ($user_ent == 1) { //Se verifica si se quieren ver pqrsd de usuarios
    $pqr_user = "SELECT t.id, n_radicado, fecha, nombre, apellido, cedula, nombre_sec as secretaria, tipo 
    FROM tramites_usuarios t JOIN usuarios u ON t.cedula_env= u.cedula
    JOIN secretarias s on t.sec_rec= s.id JOIN tipo_tramites ti ON t.id_tipo= ti.id $filtro;";
    $resultado = mysqli_query($conexion, $pqr_user); ?>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr class="bg-info">
                    <th scope="col">N° radicado</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Secretaría</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
                    <tr>
                        <th scope="row"><?php echo $row['n_radicado']; ?></th>
                        <td><?php echo $row['fecha']; ?></td>
                        <td><?php echo $row['nombre'] . " " . $row['apellido']; ?></td>
                        <td><?php echo $row['cedula']; ?></td>
                        <td><?php echo $row['secretaria']; ?></td>
                        <td><?php echo $row['tipo']; ?></td>
                        <td>
                            <a href="../pdf/report_user.php?id=<?php  echo $row['id']; ?>" target="_blank">🖨</a>
                            <a href="?s=1&id=<?php  echo $row['id']; ?>&delete=No">🗑</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php } ?>
<?php
/* ------------------------------------------------------------- */
if ($user_ent == 2) { //Se verifica si se quieren ver pqrsd de entidades

    $pqr_user = "SELECT t.id, n_radicado, fecha, nombre_ent, nit, nombre_sec as secretaria, tipo 
    FROM tramites_entidades t JOIN entidades_ext e ON t.nit_env= e.nit
    JOIN secretarias s on t.sec_rec= s.id JOIN tipo_tramites ti ON t.id_tipo= ti.id $filtro;";
    $resultado = mysqli_query($conexion, $pqr_user); ?>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr class="bg-info">
                    <th scope="col">N° radicado</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Nit</th>
                    <th scope="col">Secretaría</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
                    <tr>
                        <th scope="row"><?php echo $row['n_radicado']; ?></th>
                        <th scope="row"><?php echo $row['n_radicado']; ?></th>
                        <td><?php echo $row['fecha']; ?></td>
                        <td><?php echo $row['nombre_ent']; ?></td>
                        <td><?php echo $row['nit']; ?></td>
                        <td><?php echo $row['secretaria']; ?></td>
                        <td><?php echo $row['tipo']; ?></td>
                        <td>
                            <a href="../pdf/report_ent.php?id=<?php  echo $row['id']; ?>" target="_blank">🖨</a>
                            <a href="?s=2&id=<?php  echo $row['id']; ?>&delete=No">🗑</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php } ?>
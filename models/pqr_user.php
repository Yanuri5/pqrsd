<?php
    /* Variables recibidas por medio de post desde views/datos.php */
    $n_radicado = $_POST['n_radicado'];
    $cedula_env = $_POST['cedula_env'];
    $sec_rec = $_POST['sec_rec'];
    $titulo = $_POST['titulo'];
    $descripcion = $_REQUEST['descripcion'];
    $id_tipo = $_POST['id_tipo'];
    $C_admin = $cedula;



if ($n_radicado == "" || $cedula_env == "" || $sec_rec == "" || $titulo == "" || $descripcion == "" || $id_tipo == "") {
    //Verifico que ninguna variable venga vacia.
    echo "<div class='error'> 
        <li>Algun campo está vacío.</li> </div>";
} else {
    $pqr_user = "INSERT INTO `tramites_usuarios`(`n_radicado`, `fecha`, `cedula_env`, `sec_rec`, `titulo`, `descripcion`, `id_tipo`, `C_admin`) 
    VALUES ('$n_radicado',now(),'$cedula_env','$sec_rec','$titulo','$descripcion','$id_tipo','$C_admin');";

   


    $guardar = $conexion->query("$pqr_user"); //Se envía la orden de $pqr_user a la base de datos
    if (mysqli_affected_rows($conexion) > 0) {  //para saber si la orden fue ejecutada

        echo "<div class='correcto'> 
            Se guardó correctamente! <br>
            </div> <br>";
    } else {
        echo "<div class='error'> 
        <li>No se pudo guardar.</li> </div>";
    }


    mysqli_close($conexion);
}

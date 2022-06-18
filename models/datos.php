<?php
    /* Variables recibidas por medio de post desde views/datos.php */
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];

    if($nombre=="" || $apellido=="" || $correo=="" || $celular==""){ //Verifico que ninguna variable venga vacia.
        echo "<div class='error'> 
        <li>Algun campo está vacío.</li> </div>";
    }else{
        $act_datos="UPDATE `admin` SET `nombre`='$nombre',
        `apellido`='$apellido',`correo`='$correo',`celular`='$celular' 
        WHERE `cedula`= '$cedula';"; //Esta variable $cedula se crea en views/plantilla.php
        
        $actualizar = $conexion->query("$act_datos"); //Se envía la orden de $act_datos a la base de datos

        if (mysqli_affected_rows($conexion)>0){ //para saber si la orden fue ejecutada
            echo "<script>
            alert('Se guardó correctamente');
            window.location.href='perfil.php';
            </script>";
        }else{
            echo "<div class='error'> 
            No se guardó el cambio o no huvo cambios. </div>";
        }

        mysqli_close($conexion);
    }

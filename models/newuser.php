<?php
    /* Variables recibidas por medio de post desde views/newuser.php */
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $celular = $_POST['celular'];
    $id_vereda = $_POST['id_vereda'];
    $id_zona = $_POST['id_zona'];

    if($cedula=="" || $nombre=="" || $apellido=="" || $celular=="" || $id_vereda=="" || $id_zona==""){
        //Verifico que ninguna variable venga vacia.
        echo "<div class='error'> 
        <li>Algun campo está vacío.</li> </div>";
    }else{
    
        $guardar_ent="INSERT INTO `usuarios`(`cedula`, `nombre`, `apellido`, `celular`, `id_vereda`, `id_zona`) 
        VALUES ('$cedula','$nombre','$apellido','$celular','$id_vereda','$id_zona')";

        $guardar = $conexion -> query("$guardar_ent"); //Se envía la orden de $guardar_ent a la base de datos
        if (mysqli_affected_rows($conexion)>0){  //para saber si la orden fue ejecutada
            echo " <script>
            alert('Se guardó correctamente');
            window.location.href='user.php';
            </script>
            ";
        }else{
            echo "<div class='error'> 
            <li>No se pudo guardar.</li> </div>";
        }


        mysqli_close($conexion);
    }
?>
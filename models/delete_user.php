<?php
    $cedula= $_GET['ced_user']; //Saber cuan es el usuario que van a eliminar
    $delete = $_GET['delete'];  //Variable para saber si acepta o no la eliminación
    
    $sql = "SELECT nombre, apellido FROM usuarios where cedula = $cedula;"; //Traer datos de el usuario, solo para hacer la pregunta
     $resultado = mysqli_query($conexion , $sql);
     $row= mysqli_fetch_assoc($resultado)


        ?>
        <div class='delete col-5'> <!-- La pregunta -->
<!-- botones --><p id='label'>¿Seguro que deseas borrar el usuario <?php echo utf8_decode($row['nombre'])." ".utf8_decode($row['apellido']); ?>?<br>
                Sí lo borra, también se borrarán todas las PQRSD hechas por este usuario.</p>
            <center>
                <button class='btn btn-danger'  onclick='window.location.href="?ced_user=<?php echo $cedula; ?>&delete=Yes"'>Borrar</button>
                <button class='btn btn-success' onclick="window.location.href='user.php'">Cancelar</button>
            </center>
        </div>
        <?php
        //Verificar si se acepto la eliminación del usuario
        if($delete=='Yes'){

            

            $quitar_pqr = "DELETE FROM `tramites_usuarios` WHERE `tramites_usuarios`.`cedula_env` = '$cedula';"; //Se le borran las pqrsd de este usuario.
            $ped= $conexion->query("$quitar_pqr");

            $delet_usuario="DELETE FROM `usuarios` WHERE `usuarios`.`cedula` = '$cedula'; "; //se borra el usuario
            $eliminado= mysqli_query($conexion, $delet_usuario);


            echo "<script>
            window.location.href='user.php';
            </script>";

        }
       
        

 
        

        mysqli_close($conexion); 
    
?>
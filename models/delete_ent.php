<?php
    $nit= $_GET['nit']; //Saber cuan es el usuario que van a eliminar
    $delete = $_GET['delete'];  //Variable para saber si acepta o no la eliminación
    
    $sql = "SELECT nombre_ent FROM entidades_ext WHERE nit='$nit';"; //Traer datos de el usuario, solo para hacer la pregunta
     $resultado = mysqli_query($conexion , $sql);
     $row= mysqli_fetch_assoc($resultado)


        ?>
        <div class='delete col-5'> <!-- La pregunta -->
<!-- botones --><p id='label'>¿Seguro que deseas borrar la entidad <?php echo utf8_decode($row['nombre_ent']); ?>?<br>
                Sí la borra, también se borrarán todas las PQRSD hechas por esta entidad.</p>
            <center>
                <button class='btn btn-danger'  onclick='window.location.href="?nit=<?php echo $nit; ?>&delete=Yes"'>Borrar</button>
                <button class='btn btn-success' onclick="window.location.href='user.php'">Cancelar</button>
            </center>
        </div>
        <?php
        //Verificar si se acepto la eliminación del usuario
        if($delete=='Yes'){

            

            $quitar_pqr = "DELETE FROM `tramites_entidades` WHERE `nit_env` = '$nit';"; //Se le borran las pqrsd de este usuario.
            $ped= $conexion->query("$quitar_pqr");

            $delet_usuario="DELETE FROM `entidades_ext` WHERE `nit` = '$nit'; "; //se borra el usuario
            $eliminado= mysqli_query($conexion, $delet_usuario);


            echo "<script>
            window.location.href='entidades.php';
            </script>";

        }
       
        

 
        

        mysqli_close($conexion); 
    
?>
<?php
    /* Variables recibidas por medio de post desde views/edit_user.php */
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
        $sql="UPDATE `usuarios` SET `cedula` = '$cedula', `nombre` = '$nombre', 
        `apellido` = '$apellido', `celular` = '$celular', `id_vereda` = '$id_vereda', 
        `id_zona` = '$id_zona' WHERE `usuarios`.`cedula` = '$ced_user';";
        
        
        $resultado= $conexion->query("$sql"); //Se envía la orden de $sql a la base de datos
 
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
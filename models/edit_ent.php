<?php
    /* Variables recibidas por medio de post desde views/edit_ent.php */
     $nit = $_POST['nit'];
     $nombre_ent = $_POST['nombre_ent'];
     $correo_ent = $_POST['correo_ent'];
 
 
     if($nit=="" || $nombre_ent=="" || $correo_ent==""){ //Verifico que ninguna variable venga vacia.
         echo "<div class='error'> 
         <li>Algun campo está vacío.</li> </div>";
     }else{
        $sql="UPDATE `entidades_ext` SET `nit` = '$nit', `nombre_ent` = '$nombre_ent', 
        `correo_ent` = '$correo_ent' WHERE `entidades_ext`.`nit` = '$nit_ent'";
         $guardar = $conexion -> query("$sql"); //Se envía la orden de $sql a la base de datos
         if (mysqli_affected_rows($conexion)>0){  //para saber si la orden fue ejecutada
             echo " <script>
             alert('Se guardó correctamente');
             window.location.href='entidades.php';
             </script>
             ";
         }else{
             echo "<div class='error'> 
             <li>No se pudo guardar.</li> </div>";
         }
     }
 
 
     mysqli_close($conexion);
 ?>
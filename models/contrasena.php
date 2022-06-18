<?php
    $contra= $_POST['contra']; //Contraseña actual
    $contra1= $_POST['contra1']; //Contraseña nueva
    $contra2= $_POST['contra2']; //confirmacion de contraseña nueva

    $obtener_pass = "SELECT contrasena FROM `admin` WHERE cedula= '$cedula';"; //Consulta para saber cual es la contraseña actual
    $mostrar= $conexion -> query("$obtener_pass");
    $pass = $mostrar->fetch_assoc(); // se guarda la contraseña en $pass

    if ($contra == $pass['contrasena']) { //verifica si la contraseña que ingreso ($contra) es igual a la que tiene ($pass)
        if ($contra1 == $contra2) { //Se verifica si la contraseña nueva y su verificación son iguales

            $act_pass = "UPDATE `admin` SET `contrasena`='$contra2'
            WHERE `cedula`= '$cedula';"; //Esta variable $cedula se crea en views/plantilla.php


            $act = $conexion->query("$act_pass"); //se envía la orden hacha en $act_pass a la base de datos
            if (mysqli_affected_rows($conexion)>0){ //para saber si la orden fue ejecutada
                echo " <script>
                alert('Se actualizó correctamente la contraseña, Vuelve a iniciar sesión.');
                window.location.href='salir.php';
                </script>
                ";
            }
        } else {
            echo "<div class='error'>
                    Deben ser iguales las dos contraseñas nuevas. 
                </div><br>
                ";
        }
    } else {
        echo "<div class='error'>
                La contraseña actual es incorrecta.
            </div><br>
            ";
    }
    mysqli_close($conexion);
?>
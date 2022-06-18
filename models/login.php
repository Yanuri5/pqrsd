<?php

    require_once("../models/conexion.php");

    $cedula = $_POST['cedula'];
    $contrasena = $_POST['contrasena'];

    
        $sql="SELECT COUNT(*) AS contar FROM `admin` WHERE cedula='$cedula'; "; //Mi metodo para saber si el admin existe
        $resultado= mysqli_query($conexion, $sql);
        
        $filas=mysqli_fetch_array($resultado);
        
        if($filas['contar']>0){
            $sql="SELECT contrasena FROM `admin` WHERE cedula='$cedula';";  //para saber la contraseña
        
            $resultado1= mysqli_query($conexion, $sql);
        
            $filas=mysqli_fetch_array($resultado1); // la contraseña se almacena en el array $filas[0]
        
            if (/* password_verify($contraseña, $filas[0]) */ $contrasena == $filas[0]){ // proceso de verificación
               
                    session_start(); 
                    $_SESSION['cedula']=$cedula;
                    header("location: ../controller/home.php");
               
               
            }else{
                echo "<div class='error'>
                La contraseña es incorrecta.
                </div><br>
                ";
            }
        
        }else {
            echo "<div class='error'>
            No existe usuario con esta cedula.
            </div> <br>";
        
        } 
        
        mysqli_free_result($resultado);
        mysqli_close($conexion);
     
     
  

?>
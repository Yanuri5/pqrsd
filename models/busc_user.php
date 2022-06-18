<?php
    
        $mysqli = new mysqli('localhost', 'root', '', 'pqrsd');

        $salida = "";
    if (!empty($_POST)) {
        
   
        $consulta = $_POST['consulta'];
        $query = "SELECT nombre, apellido FROM usuarios WHERE cedula='$consulta';"; //Se consulta nombre y apellido del usuario buscado
        $usuario = $mysqli->query($query);
        if($usuario -> num_rows > 0){
            while($fill= $usuario-> fetch_assoc()){
                $salida= "✅".$fill['nombre']." ". $fill['apellido']; //Se muestra la consulta obtenida
    
            }
        }else{
            $salida="⚠ No hay usuarios con esta cedula.🚫"; //No se encontraron usuarios
        }
    
        
    }else{
        $salida="⬅ Ingrese datos para buscar"; //No an ingresado datos para buscar
    }
    echo $salida;

    $mysqli->close();

<?php
    
        $mysqli = new mysqli('localhost', 'root', '', 'pqrsd');

        $salida = "";
    if (!empty($_POST)) {
        
   
        $consulta = $_POST['consulta'];
        $query = "SELECT nombre_ent FROM entidades_ext WHERE nit='$consulta';"; // Obtenemos el nombre de la entidad
        $usuario = $mysqli->query($query);
        if($usuario -> num_rows > 0){
            while($fill= $usuario-> fetch_assoc()){
                $salida= "✅".$fill['nombre_ent']; //Se imprime el nombre de la entidad encontrada
    
            }
        }else{ 
            $salida="⚠ No hay entidades con este Nit.🚫"; //No se ancontraron entidades con ese nit
        }
    
        
    }else{
        $salida="⬅ Ingrese datos para buscar"; //No se ha ingresado ningun nit
    }
    echo $salida;

    $mysqli->close();

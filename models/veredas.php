<?php

require ('../models/conexion.php'); //enlace a la base de datos.

//var_dump($_POST);

$mun=$_POST['municipios']; // id del municipio del cual voy a buscar sus veredas

$sql="SELECT id, vereda FROM veredas WHERE id_municipio='$mun' ORDER BY vereda;";
$result=$conexion->query($sql); //Se envía la orden de $sql a la base de datos
$exit=$result->fetch_all(MYSQLI_ASSOC);

//var_dump($exit);
echo json_encode($exit);


?>
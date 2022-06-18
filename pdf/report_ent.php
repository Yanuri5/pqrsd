<?php
require_once("../models/conexion.php");
session_start();
if (!isset($_SESSION['cedula'])) {
    header("location: ../views/login.php");
}
$id = $_GET['id'];

$sql = "SELECT fecha, nit_env as nit, nombre_ent as nombre, correo_ent as correo, nombre_sec as secretaria, titulo, descripcion, tipo 
FROM tramites_entidades t JOIN entidades_ext e ON t.nit_env = e.nit 
JOIN secretarias s ON t.sec_rec = s.id JOIN tipo_tramites ti ON t.id_tipo= ti.id 
WHERE t.id='$id';";
$resultado = mysqli_query($conexion, $sql);
$row = mysqli_fetch_assoc($resultado);

if ($row['tipo'] == 'Peticiones') {
    $tipo = "petición";
    $con = "Petición para:";
    $ayu = "pedirles la ayuda correspondiente.";
}
if ($row['tipo'] == 'Quejas') {
    $tipo = "queja";
    $con = "Queja por:";
    $ayu = "dar a conocer mi queja.";
}
if ($row['tipo'] == 'Reclamos') {
    $tipo = "reclamo";
    $con = "Reclamo por:";
    $ayu = "hacer reclamo por una inconformidad.";
}
if ($row['tipo'] == 'Solicitudes') {
    $tipo = "solicitud";
    $con = "Solicitud de:";
    $ayu = "solicitar la ayuda deseada.";
}
if ($row['tipo'] == 'Denuncias') {
    $tipo = "denuncia";
    $con = "Denuncia:";
    $ayu = "denuciar incongruencias notadas.";
}

ob_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../svg/pqrsd.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <link rel="stylesheet" href="../css/bootstrap.css"> -->
    <title>Reporte</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
            text-align: justify;
        }
        body
        {
            padding-top: 1cm;
            padding-left: 2cm;
            padding-right: 2cm;
        }
        .titulo {
            text-align: center;
        }

        .fecha {
            text-align: right;
        }

    </style>
</head>

<body>
    <h3 class="titulo">Carta de <?php echo $tipo; ?>.</h3>
    <p class="fecha">Fecha de radicado: <?php echo $row['fecha']; ?></p><br><br>
    <p>Dirigido a: <?php echo $row['secretaria']; ?>.</p><br>

    <p><?php echo $con;
        echo " " . $row['titulo'] . "."; ?></p>
    
        Conociendo su labor y las actívidades que realiza(n), nos dirigimos a usted(es)
        muy respetuosamente para exponerles nuestro caso y <?php echo $ayu; ?> <br><br>
        <?php echo $row['descripcion']; ?> <br><br>
        Asi pues le(s) pidimos la mayor diligencia posible para agilizar este(a) <?php echo $tipo; ?>,
        de forma que no nos retrase en la consecución de nuestros objetivos.
        En caso de cualquier duda o inquietud, ponemos a disposición el correo oficial de la empresa. <br><br>
        Sin otro asunto a que hacer referencia, nos despimos agradeciendole(s) sus buenos oficios.
        <br><br><br><br>
        
            Atentamente. <br><br><br>
            <p class="titulo">
                <?php echo $row['nombre']?><br>
                <?php echo $row['nit']; ?><br>
                <?php echo $row['correo']; ?>
            </p>

            


        
    


</body>

</html>

<?php
$html = ob_get_clean();
//echo $html;

require_once '../library/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$dompdf->loadHtml($html);
$dompdf->setPaper('letter');
/* $dompdf -> setPaper('A4', 'landscape'); */ //Para poner la hoja en horizontal
$dompdf->render();
$dompdf->stream("pqrsd.pdf", array("Attachment" => false));

?>
<?php
if($n_radicado=="" && $fecha == "" && $sec_rec=="" && $tipo=="" && $ced_nit==""){ //Si no se llenó ningun campo
    $filtro="";
}elseif($n_radicado!="" && $fecha == "" && $sec_rec=="" && $tipo=="" && $ced_nit==""){
    $filtro="WHERE n_radicado= '$n_radicado'";
}elseif($n_radicado=="" && $fecha != "" && $sec_rec=="" && $tipo=="" && $ced_nit==""){
    $filtro="WHERE fecha= '$fecha'";
}elseif($n_radicado=="" && $fecha == "" && $sec_rec!="" && $tipo=="" && $ced_nit==""){
    $filtro="WHERE sec_rec= '$sec_rec'";
}elseif($n_radicado=="" && $fecha == "" && $sec_rec=="" && $tipo!="" && $ced_nit==""){
    $filtro="WHERE id_tipo= '$tipo'";
}elseif($n_radicado=="" && $fecha == "" && $sec_rec=="" && $tipo=="" && $ced_nit!="" && $user_ent=="1"){
    $filtro="WHERE cedula_env= '$ced_nit'";
}elseif($n_radicado=="" && $fecha == "" && $sec_rec=="" && $tipo=="" && $ced_nit!="" && $user_ent=="2"){
    $filtro="WHERE nit_env= '$ced_nit'";
}elseif($n_radicado!="" && $fecha != "" && $sec_rec=="" && $tipo=="" && $ced_nit==""){
    $filtro="WHERE n_radicado= '$n_radicado' AND fecha='$fecha'";
}elseif($n_radicado!="" && $fecha == "" && $sec_rec!="" && $tipo=="" && $ced_nit==""){
    $filtro="WHERE n_radicado= '$n_radicado' AND sec_rec='$sec_rec'";
}elseif($n_radicado!="" && $fecha == "" && $sec_rec=="" && $tipo!="" && $ced_nit==""){
    $filtro="WHERE n_radicado= '$n_radicado' AND id_tipo='$tipo'";
}elseif($n_radicado!="" && $fecha == "" && $sec_rec=="" && $tipo=="" && $ced_nit!="" && $user_ent=="1"){
    $filtro="WHERE n_radicado= '$n_radicado' AND cedula_env='$ced_nit'";
}elseif($n_radicado!="" && $fecha == "" && $sec_rec=="" && $tipo=="" && $ced_nit!="" && $user_ent=="2"){
    $filtro="WHERE n_radicado= '$n_radicado' AND nit_env='$ced_nit'";
}elseif($n_radicado=="" && $fecha != "" && $sec_rec!="" && $tipo=="" && $ced_nit==""){
    $filtro="WHERE fecha= '$fecha' AND sec_rec='$sec_rec'";
}elseif($n_radicado=="" && $fecha != "" && $sec_rec=="" && $tipo!="" && $ced_nit==""){
    $filtro="WHERE fecha= '$fecha' AND id_tipo='$tipo'";
}elseif($n_radicado=="" && $fecha != "" && $sec_rec=="" && $tipo=="" && $ced_nit!="" && $user_ent=="1"){
    $filtro="WHERE fecha= '$fecha' AND cedula_env='$ced_nit'";
}elseif($n_radicado=="" && $fecha != "" && $sec_rec=="" && $tipo=="" && $ced_nit!="" && $user_ent=="2"){
    $filtro="WHERE fecha= '$fecha' AND nit_env='$ced_nit'";
}elseif($n_radicado=="" && $fecha == "" && $sec_rec!="" && $tipo!="" && $ced_nit==""){
    $filtro="WHERE sec_rec='$sec_rec' AND id_tipo='$tipo'";
}elseif($n_radicado=="" && $fecha == "" && $sec_rec!="" && $tipo=="" && $ced_nit!="" && $user_ent=="1"){
    $filtro="WHERE sec_rec='$sec_rec' AND cedula_env='$ced_nit'";
}elseif($n_radicado=="" && $fecha == "" && $sec_rec!="" && $tipo=="" && $ced_nit!="" && $user_ent=="2"){
    $filtro="WHERE sec_rec='$sec_rec' AND nit_env='$ced_nit'";
}elseif($n_radicado=="" && $fecha == "" && $sec_rec=="" && $tipo!="" && $ced_nit!="" && $user_ent=="1"){
    $filtro="WHERE id_tipo='$tipo' AND cedula_env='$ced_nit'";
}elseif($n_radicado=="" && $fecha == "" && $sec_rec=="" && $tipo!="" && $ced_nit!="" && $user_ent=="2"){
    $filtro="WHERE id_tipo='$tipo' AND nit_env='$ced_nit'";
}elseif($n_radicado!="" && $fecha != "" && $sec_rec!="" && $tipo=="" && $ced_nit==""){
    $filtro="WHERE n_radicado= '$n_radicado' AND fecha='$fecha' AND sec_rec='$sec_rec'";
}elseif($n_radicado!="" && $fecha != "" && $sec_rec!="" && $tipo=="" && $ced_nit==""){
    $filtro="WHERE n_radicado= '$n_radicado' AND fecha='$fecha' AND sec_rec='$sec_rec'";
}elseif($n_radicado=="" && $fecha != "" && $sec_rec!="" && $tipo!="" && $ced_nit==""){
    $filtro="WHERE id_tipo= '$tipo' AND fecha='$fecha' AND sec_rec='$sec_rec'";
}elseif($n_radicado=="" && $fecha == "" && $sec_rec!="" && $tipo!="" && $ced_nit!="" && $user_ent=="1"){
    $filtro="WHERE n_radicado= '$n_radicado' AND cedula_env='$ced_nit' AND sec_rec='$sec_rec'";
}elseif($n_radicado=="" && $fecha == "" && $sec_rec!="" && $tipo!="" && $ced_nit!="" && $user_ent=="2"){
    $filtro="WHERE n_radicado= '$n_radicado' AND nit_env='$ced_nit' AND sec_rec='$sec_rec'";
}elseif($n_radicado!="" && $fecha != "" && $sec_rec=="" && $tipo!="" && $ced_nit==""){
    $filtro="WHERE n_radicado= '$n_radicado' AND fecha='$fecha' AND id_tipo='$tipo'";
}elseif($n_radicado!="" && $fecha != "" && $sec_rec=="" && $tipo=="" && $ced_nit!="" && $user_ent=="1"){
    $filtro="WHERE n_radicado= '$n_radicado' AND fecha='$fecha' AND cedula_env='$user_ent'";
}elseif($n_radicado!="" && $fecha != "" && $sec_rec=="" && $tipo=="" && $ced_nit!="" && $user_ent=="2"){
    $filtro="WHERE n_radicado= '$n_radicado' AND fecha='$fecha' AND nit_env='$user_ent'";
}elseif($n_radicado!="" && $fecha == "" && $sec_rec!="" && $tipo!="" && $ced_nit==""){
    $filtro="WHERE n_radicado= '$n_radicado' AND id_tipo='$tipo' AND sec_rec='$sec_rec'";
}elseif($n_radicado!="" && $fecha == "" && $sec_rec=="" && $tipo!="" && $ced_nit!="" && $user_ent=="1"){
    $filtro="WHERE n_radicado= '$n_radicado' AND id_tipo='$tipo' AND cedula_env='$user_ent'";
}elseif($n_radicado!="" && $fecha == "" && $sec_rec=="" && $tipo!="" && $ced_nit!="" && $user_ent=="2"){
    $filtro="WHERE n_radicado= '$n_radicado' AND id_tipo='$tipo' AND nit_env='$user_ent'";
}elseif($n_radicado!="" && $fecha == "" && $sec_rec!="" && $tipo=="" && $ced_nit!="" && $user_ent=="1"){
    $filtro="WHERE n_radicado= '$n_radicado' AND sec_rec='$sec_rec' AND cedula_env='$user_ent'";
}elseif($n_radicado!="" && $fecha == "" && $sec_rec!="" && $tipo=="" && $ced_nit!="" && $user_ent=="2"){
    $filtro="WHERE n_radicado= '$n_radicado' AND sec_rec='$sec_rec' AND nit_env='$user_ent'";
}elseif($n_radicado=="" && $fecha != "" && $sec_rec=="" && $tipo!="" && $ced_nit!="" && $user_ent=="1"){
    $filtro="WHERE fecha='$fecha' AND id_tipo='$tipo' AND cedula_env='$user_ent'";
}elseif($n_radicado=="" && $fecha != "" && $sec_rec=="" && $tipo!="" && $ced_nit!="" && $user_ent=="2"){
    $filtro="WHERE fecha='$fecha' AND id_tipo='$tipo' AND nit_env='$user_ent'";
}elseif($n_radicado!="" && $fecha != "" && $sec_rec!="" && $tipo!="" && $ced_nit==""){
    $filtro="WHERE n_radicado= '$n_radicado' AND fecha='$fecha' AND sec_rec='$sec_rec' AND id_tipo='$tipo'";
}elseif($n_radicado!="" && $fecha != "" && $sec_rec!="" && $tipo=="" && $ced_nit!="" && $user_ent=="1"){
    $filtro="WHERE n_radicado= '$n_radicado' AND fecha='$fecha' AND sec_rec='$sec_rec' AND cedula_env='$user_ent'";
}elseif($n_radicado!="" && $fecha != "" && $sec_rec!="" && $tipo=="" && $ced_nit!="" && $user_ent=="2"){
    $filtro="WHERE n_radicado= '$n_radicado' AND fecha='$fecha' AND sec_rec='$sec_rec' AND nit_env='$user_ent'";
}elseif($n_radicado!="" && $fecha != "" && $sec_rec=="" && $tipo!="" && $ced_nit!="" && $user_ent=="1"){
    $filtro="WHERE n_radicado= '$n_radicado' AND id_tipo='$tipo' AND sec_rec='$sec_rec' AND cedula_env='$user_ent'";
}elseif($n_radicado!="" && $fecha != "" && $sec_rec=="" && $tipo!="" && $ced_nit!="" && $user_ent=="2"){
    $filtro="WHERE n_radicado= '$n_radicado' AND id_tipo='$tipo' AND sec_rec='$sec_rec' AND nit_env='$user_ent'";
}elseif($n_radicado!="" && $fecha == "" && $sec_rec!="" && $tipo!="" && $ced_nit!="" && $user_ent=="1"){
    $filtro="WHERE n_radicado= '$n_radicado' AND id_tipo='$tipo' AND sec_rec='$sec_rec' AND cedula_env='$user_ent'";
}elseif($n_radicado!="" && $fecha == "" && $sec_rec!="" && $tipo!="" && $ced_nit!="" && $user_ent=="2"){
    $filtro="WHERE n_radicado= '$n_radicado' AND id_tipo='$tipo' AND sec_rec='$sec_rec' AND nit_env='$user_ent'";
}elseif($n_radicado=="" && $fecha != "" && $sec_rec!="" && $tipo!="" && $ced_nit!="" && $user_ent=="1"){
    $filtro="WHERE fecha= '$fecha' AND id_tipo='$tipo' AND sec_rec='$sec_rec' AND cedula_env='$user_ent'";
}elseif($n_radicado=="" && $fecha != "" && $sec_rec!="" && $tipo!="" && $ced_nit!="" && $user_ent=="2"){
    $filtro="WHERE fecha= '$fecha' AND id_tipo='$tipo' AND sec_rec='$sec_rec' AND nit_env='$user_ent'";
}elseif($n_radicado!="" && $fecha != "" && $sec_rec=="" && $tipo!="" && $ced_nit!="" && $user_ent=="1"){
    $filtro="WHERE n_radicado= '$n_radicado' AND id_tipo='$tipo' AND fecha='$fecha' AND cedula_env='$user_ent'";
}elseif($n_radicado!="" && $fecha != "" && $sec_rec=="" && $tipo!="" && $ced_nit!="" && $user_ent=="2"){
    $filtro="WHERE n_radicado= '$n_radicado' AND id_tipo='$tipo' AND fecha='$fecha' AND nit_env='$user_ent'";
}elseif($n_radicado!="" && $fecha != "" && $sec_rec!="" && $tipo!="" && $ced_nit!="" && $user_ent=="1"){
    $filtro="WHERE n_radicado= '$n_radicado' AND fecha='$fecha' AND id_tipo='$tipo' AND sec_rec='$sec_rec' AND cedula_env='$user_ent'";
}elseif($n_radicado!="" && $fecha != "" && $sec_rec!="" && $tipo!="" && $ced_nit!="" && $user_ent=="2"){
    $filtro="WHERE n_radicado= '$n_radicado' AND fecha='$fecha' AND id_tipo='$tipo' AND sec_rec='$sec_rec' AND nit_env='$user_ent'";
}



?>
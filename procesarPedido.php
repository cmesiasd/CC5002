<?php

require_once('validaciones.php');
require_once('db_config.php');
require_once('consultas.php');
require_once('diccionario.php');

$errores = array();

if(!checkNombreDisfraz($_POST)){
    $errores[] = "<p>Campo obligatorio vacío o formato incorrecto: Nombre Disfraz</p><br>";
}

if(!checkCategoriaSolicitante($_POST)){
    $errores[] = "<p>Campo obligatorio vacío o formato incorrecto: Categoria</p><br>";
}

if(!checkTallaSolicitante($_POST)){
    $errores[] = "<p>Campo obligatorio vacío o formato incorrecto: Talla</p><br>";
}

if(!checkNombreSolicitante($_POST)){
    $errores[] = "<p>Campo obligatorio vacío o formato incorrecto: Nombre Solicitante</p><br>";
}

if(!checkEmailSolicitante($_POST)){
    $errores[] = "<p>Campo obligatorio vacío o formato incorrecto: Email Solicitante</p><br>";
}

if(!checkRegionSolicitante($_POST)){
    $errores[] = "<p>Campo obligatorio vacío o formato incorrecto: Región</p><br>";
}

if(!checkComunaSolicitante($_POST)){
    $errores[] = "<p>Campo obligatorio vacío o formato incorrecto: Comuna</p><br>";
}


if(count($errores)>0){//Si el arreglo $errores tiene elementos, debemos mostrar el error.
	header("Location: index.php?errores=".implode($errores, "<br>")); //Redirigimos al formulario inicio con los errores encontrados
	
	return; //No dejamos que continue la ejecución
}

//Si llegamos aqui, las validaciones pasaron
$nombre_disfraz = $_POST['nombre-disfraz'];
$comuna_solicitante = getComuna($_POST['comuna-solicitante']);
$categoria_solicitante = getCategoria($_POST['categoria-solicitante']);
$talla_solicitante = getTalla($_POST['talla-solicitante']);
$nombre_solicitante = $_POST['nombre-solicitante'];
$email_solicitante = $_POST['email-solicitante'];

if(isset($_POST['descripcion-disfraz'])){
	$descripcion_disfraz = $_POST['descripcion-disfraz'];
}
else{
	$descripcion_disfraz = NULL;
}	
if(isset($_POST['celular-solicitante'])){
	$celular_solicitante = $_POST['celular-solicitante'];
}
else{
	$celular_solicitante = NULL;
}


// Guardamos en BD
$db = DbConfig::getConnection();
$res = savePedido($db, $nombre_disfraz, $descripcion_disfraz, $categoria_solicitante, $talla_solicitante, $nombre_solicitante, $email_solicitante, $celular_solicitante, $comuna_solicitante);
$db->close();
if($res){
    header("Location: index.php");
}
else{
    echo "<h1>Ha ocurrido un error </h1>";
}

?>

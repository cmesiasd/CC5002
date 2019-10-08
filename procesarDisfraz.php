<?php

require_once('validaciones.php');
require_once('db_config.php');
require_once('consultas.php');
require_once('diccionario.php');

$errores = array();

if(!checkRegion($_POST)){
    $errores[] = "<p>Campo obligatorio vacío o formato incorrecto: Región</p><br>";
}

if(!checkComuna($_POST)){
    $errores[] = "<p>Campo obligatorio vacío o formato incorrecto: Comuna</p><br>";
}

if(!checkNombreDisfraz($_POST)){
    $errores[] = "<p>Campo obligatorio vacío o formato incorrecto: Nombre Disfraz</p><br>";
}

if(!checkCategoria($_POST)){
    $errores[] = "<p>Campo obligatorio vacío o formato incorrecto: Categoria</p><br>";
}

if(!checkTalla($_POST)){
    $errores[] = "<p>Campo obligatorio vacío o formato incorrecto: Talla</p><br>";
}

if(!checkNombre($_POST)){
    $errores[] = "<p>Campo obligatorio vacío o formato incorrecto: Nombre</p><br>";
}

if(!checkEmail($_POST)){
    $errores[] = "<p>Campo obligatorio vacío o formato incorrecto: Email</p><br>";
}

if(count($errores)>0){//Si el arreglo $errores tiene elementos, debemos mostrar el error.
	header("Location: index.php?errores=".implode($errores, "<br>")); //Redirigimos al formulario inicio con los errores encontrados
	
	return; //No dejamos que continue la ejecución
}

//Si llegamos aqui, las validaciones pasaron
$comuna = getComuna($_POST['comuna']);
$nombre_disfraz = $_POST['nombre-disfraz'];
$categoria = getCategoria($_POST['categoria']);
$talla = getTalla($_POST['talla']);
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$foto_disfraz = $_FILES['foto-disfraz'];

if(isset($_POST['descripcion-disfraz'])){
	$descripcion_disfraz = $_POST['descripcion-disfraz'];
}
else{
	$descripcion_disfraz=NULL;
}	
if(isset($_POST['celular'])){
	$celular = $_POST['celular'];
}
else{
	$celular=NULL;
}


// Guardamos en BD
$db = DbConfig::getConnection();
$res = saveDisfraz($db, $foto_disfraz, $comuna, $nombre_disfraz, $descripcion_disfraz, $categoria, $talla, $nombre, $email, $celular);
$db->close();

if($res){
    header("Location: index.php");
}
else{
    echo "<h1>Ha ocurrido un error </h1>";
}

?>
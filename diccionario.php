<?php
require_once('db_config.php');
require_once('consultas.php');

function getComuna($id){
    $db = DbConfig::getConnection();
    $comunas = getComunas($db);
    $db->close();
    foreach($comunas as $comuna){
        if ($comuna['nombre']==$id){
            return $comuna['id'];
        }
    }
}

function getCategoria($id){
    $db = DbConfig::getConnection();
    $categorias = getCategorias($db);
    $db->close();
    foreach($categorias as $categoria){
        if ($categoria['descripcion']==strtolower($id)){
            return $categoria['id'];
        }
    }
}

function getTalla($id){
    $db = DbConfig::getConnection();
    $tallas = getTallas($db);
    $db->close();
    foreach($tallas as $talla){
        if ($talla['descripcion']==$id){
            return $talla['id'];
        }
    }
}


?>
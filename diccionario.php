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

function getComunaNombre($id){
    $db = DbConfig::getConnection();
    $comunas = getComunas($db);
    $db->close();
    foreach($comunas as $comuna){
        if ($comuna['id']==$id){
            return $comuna['nombre'];
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

function getCategoriaNombre($id){
    $db = DbConfig::getConnection();
    $categorias = getCategorias($db);
    $db->close();
    foreach($categorias as $categoria){
        if ($categoria['id']==strtolower($id)){
            return $categoria['descripcion'];
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

function getTallaNombre($id){
    $db = DbConfig::getConnection();
    $tallas = getTallas($db);
    $db->close();
    foreach($tallas as $talla){
        if ($talla['id']==$id){
            return $talla['descripcion'];
        }
    }
}

function getInfoPedido($id){
    $db = DbConfig::getConnection();
    $pedidos = getPedidos($db);
    $db->close();
    foreach($pedidos as $pedido){
        if ($pedido['id']==$id){
            return $pedido;
        }
    }
}

function getInfoDisfraz($id){
    $db = DbConfig::getConnection();
    $disfraces = getDisfraces($db);
    $db->close();
    foreach($disfraces as $disfraz){
        if ($disfraz['id']==$id){
            return $disfraz;
        }
    }
}

function getFotoDisfraz($id){
    $db = DbConfig::getConnection();
    $fotos = getFotos($db);
    $db->close();
    $res = array();
    foreach($fotos as $foto){
        if ($foto['disfraz_id']==$id){
            $res[] = $foto;
        }
    }
    return $res;
}


?>
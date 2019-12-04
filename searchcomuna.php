<?php

require_once('db_config.php');

function search(){
    $mysqli = DbConfig::getConnection();
    $infocomuna = array();
    $query = "SELECT DISTINCT COUNT(*) as count_img, C.nombre as comuna, D.nombre_disfraz, Cat.descripcion as categoria, T.descripcion as talla, D.nombre_contacto, D.email_contacto, D.id  FROM comuna C, disfraz D, foto_disfraz F, categoria Cat, talla T WHERE F.disfraz_id = D.id AND D.comuna = C.id AND D.categoria = Cat.id AND D.talla = T.id GROUP BY id";
    $result = $mysqli->query($query);

    if($result){
        while( $datos = $result->fetch_array()){
            $id = $datos['id'];
            $nombre_disfraz = $datos['nombre_disfraz'];
            $categoria = $datos['categoria'];
            $talla = $datos['talla'];
            $nombre_contacto = $datos['nombre_contacto']; 
            $comuna = $datos['comuna'];
            $count_img = $datos['count_img'];
        
            $info = array(
                "nombre_comuna"=>$comuna,
                "nombre_disfraz" => $nombre_disfraz,
                "categoria" => $categoria,
                "talla" => $talla,
                "nombre_contacto" => $nombre_contacto,
                "count_img" => $count_img,
                "id" => $id,
            );
            

        if(!array_key_exists($comuna, $infocomuna)){
                $infocomuna[$comuna] = array();
                $infocomuna[$comuna][] = $info;
            }
        if(array_key_exists($comuna, $infocomuna)){
                $infocomuna[$comuna][] = $info;
            }
            
        }
   
    
    echo json_encode(utf8_converter($infocomuna));
}}

function utf8_converter($array)
{
    array_walk_recursive($array, function(&$item, $key){
        if(!mb_detect_encoding($item, 'utf-8', true)){
                $item = utf8_encode($item);
        }
    });
 
    return $array;
}
search();
?>
<?php
function saveDisfraz($db, $foto_disfraz, $comuna, $nombre_disfraz, $descripcion, $categoria, $talla, $nombre_contacto, $email_contacto, $celular_contacto){
	$stmt = $db->prepare("INSERT INTO disfraz (comuna, nombre_disfraz, descripcion, categoria, talla, fecha_ingreso, nombre_contacto, email_contacto, celular_contacto) VALUES (?,?,?,?,?,?,?,?,?);");
	$stmt->bind_param("issiissss", $comuna_db, $nombre_disfraz_db, $descripcion_db, $categoria_db, $talla_db, $fecha_ingreso_db, $nombre_contacto_db, $email_contacto_db, $celular_contacto_db);
	
	$comuna_db = limpiar($db,$comuna);
	$nombre_disfraz_db = limpiar($db,$nombre_disfraz);
	$descripcion_db = limpiar($db,$descripcion);
	$categoria_db = limpiar($db,$categoria);
	$talla_db = limpiar($db,$talla);
	$nombre_contacto_db = limpiar($db,$nombre_contacto);
	$email_contacto_db = limpiar($db,$email_contacto); 
	$celular_contacto_db = limpiar($db,$celular_contacto);
	$fecha_ingreso_db = date("Y-m-d H:i:s");

	if($stmt->execute()){
		$last_id = $db->insert_id;
        $uploadDir = './uploads/';
        $stmt2 = $db->prepare("INSERT INTO foto_disfraz (ruta_archivo, nombre_archivo, disfraz_id) VALUES (?, ?, ?)");
        $stmt2->bind_param("ssi",$ruta_archivo_bd,$nombre_archivo_bd,$disfraz_id_bd);
        for ($x = 0; $x < 5; $x++) {
            if(isset($_FILES["foto-disfraz-".(string)$x])){
                if($_FILES["foto-disfraz-".(string)$x]['name']!=""){
                    $uploadedFile = $uploadDir . strval($x) . strval($last_id) . basename($_FILES["foto-disfraz-".strval($x)]['name']);
                    move_uploaded_file($_FILES["foto-disfraz-".strval($x)]['tmp_name'], $uploadedFile);
                    $ruta_archivo_bd = $uploadDir;
                    $nombre_archivo_bd = strval($x) . strval($last_id) . $_FILES["foto-disfraz-".strval($x)]['name'] ;
                    $disfraz_id_bd = $last_id;
                    $stmt2->execute();
                }
            }

        }
        $uploadedFile = $uploadDir . "0". strval($last_id) . basename($foto_disfraz['name']);
        move_uploaded_file($foto_disfraz['tmp_name'], $uploadedFile);
        $ruta_archivo_bd = $uploadDir;
        $nombre_archivo_bd = "0". strval($last_id) . $foto_disfraz['name'] ;
		$disfraz_id_bd = $last_id;
		
        return $stmt2->execute();
	}
	return false;
	
}

function savePedido($db, $nombre_disfraz, $descripcion, $categoria, $talla, $nombre_solicitante, $email_solicitante, $celular_solicitante, $comuna_solicitante){
	$stmt = $db->prepare("INSERT INTO pedido (nombre_disfraz, descripcion, categoria, talla, fecha_ingreso, nombre_solicitante, email_solicitante,celular_solicitante, comuna_solicitante) VALUES (?,?,?,?,?,?,?,?,?);");
	$stmt->bind_param("ssssssssi", $nombre_disfraz_db, $descripcion_db, $categoria_db, $talla_db, $fecha_ingreso_db, $nombre_solicitante_db, $email_solicitante_db, $celular_solicitante_db, $comuna_solicitante_db);
	
	$nombre_disfraz_db = limpiar($db,$nombre_disfraz);
	$categoria_db = limpiar($db,$categoria);
	$talla_db = limpiar($db,$talla);
	$nombre_solicitante_db = limpiar($db,$nombre_solicitante);
	$email_solicitante_db = limpiar($db,$email_solicitante);
	$comuna_solicitante_db = limpiar($db,$comuna_solicitante);
	$fecha_ingreso_db = date("Y-m-d H:i:s");
	$descripcion_db = limpiar($db,$descripcion);
	$celular_solicitante_db = limpiar($db,$celular_solicitante);
	

	if($stmt->execute()){
		return true;
	}
	return false;
	
}


function limpiar($db, $str){
	return htmlspecialchars($db->real_escape_string($str));
}

function getComunas($db){
	$sql = "SELECT id, nombre FROM comuna";
	$result = $db->query($sql);
	$res = array();
	while ($row = $result->fetch_assoc()){
		$res[]=$row;
	}
	return $res;
}

function getCategorias($db){
	$sql = "SELECT id, descripcion, edad FROM categoria";
	$result = $db->query($sql);
	$res = array();
	while ($row = $result->fetch_assoc()){
		$res[]=$row;
	}
	return $res;
}

function getTallas($db){
	$sql = "SELECT id, descripcion, edad FROM talla";
	$result = $db->query($sql);
	$res = array();
	while ($row = $result->fetch_assoc()){
		$res[]=$row;
	}
	return $res;
}

function getPedidos($db){
	$db = DbConfig::getConnection();
	$sql = "SELECT id, nombre_disfraz, descripcion, categoria, talla, fecha_ingreso, nombre_solicitante, email_solicitante,celular_solicitante, comuna_solicitante FROM pedido ORDER BY id DESC";
	$result = $db->query($sql);
	$res = array();
	while($row = $result->fetch_assoc()){
		$res[]=$row;
	}
	return $res;
}

function getDisfraces($db){
	$db = DbConfig::getConnection();
	$sql = "SELECT id, comuna, nombre_disfraz, descripcion, categoria, talla, fecha_ingreso, nombre_contacto, email_contacto, celular_contacto FROM disfraz ORDER BY id";
	$result = $db->query($sql);
	$res = array();
	while($row = $result->fetch_assoc()){
		$res[]=$row;
	}
	return $res;
}

function getFotos($db){
	$db = DbConfig::getConnection();
	$sql = "SELECT * FROM foto_disfraz;";
	$result = $db->query($sql);
	$res = array();
	while($row = $result->fetch_assoc()){
		$res[]=$row;
	}
	return $res;
}

?>

<?php

/**
 * Validación tipo de region.
 */
function checkRegion($post){
	if(isset($post['region'])){
		return true;
	}
	return false;
}

/**
 * Validación tipo de region solicitante.
 */
function checkRegionSolicitante($post){
	if(isset($post['region-solicitante'])){
		return true;
	}
	return false;
}

/**
 * Validación tipo de comuna.
 */
function checkComuna($post){
	if(isset($post['comuna'])){
		return true;
	}
	return false;
}

/**
 * Validación tipo de comuna solicitante.
 */
function checkComunaSolicitante($post){
	if(isset($post['comuna-solicitante'])){
		return true;
	}
	return false;
}

/**
 * Validación nombre de disfraz.
 */
function checkNombreDisfraz($post){
	if(isset($post['nombre-disfraz'])){
        $regexp = "/^[A-Za-záéíóú\ ]+$/";
        if(preg_match($regexp, $post['nombre-disfraz'])){
            return true;
        }
	}
	return false;
}

/**
 * Validación tipo de Categoria.
 */
function checkCategoria($post){
	if(isset($post['categoria'])){
		return true;
	}
	return false;
}

/**
 * Validación tipo de Categoria solicitante.
 */
function checkCategoriaSolicitante($post){
	if(isset($post['categoria-solicitante'])){
		return true;
	}
	return false;
}

/**
 * Validación tipo de Talla.
 */
function checkTalla($post){
	if(isset($post['talla'])){
		return true;
	}
	return false;
}

/**
 * Validación tipo de Talla solicitante.
 */
function checkTallaSolicitante($post){
	if(isset($post['talla-solicitante'])){
		return true;
	}
	return false;
}

/**
 * Validación fotos de disfraz con php (no sé si funciona aún :c )
 */

function checkFotoDisfraz($files){
	if (isset($_FILES['foto-disfraz'])) {
		$uploadDir = './uploads/'; 
		$uploadedFile = $uploadDir . basename($_FILES['foto-mascota']['name']);
		if(move_uploaded_file($_FILES['foto-mascota']['tmp_name'], $uploadedFile)) {
			return true;
		} 
	} 
	return false;
}

/**
 * Validación nombre.
 */
function checkNombre($post){
	if(isset($post['nombre'])){
		$regexp = "/^[A-Za-záéíóú\ ]+$/";
		if(preg_match($regexp, $post['nombre'])){
			return true;
		}
	}
	return false;
}

/**
 * Validación nombre solicitante.
 */
function checkNombreSolicitante($post){
	if(isset($post['nombre-solicitante'])){
		$regexp = "/^[A-Za-záéíóú\ ]+$/";
		if(preg_match($regexp, $post['nombre-solicitante'])){
			return true;
		}
	}
	return false;
}



/**
 * Validación tipo de email.
 */
function checkEmail($post){
	if(isset($post['email'])){
        if(filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
            return true;
        }
   }
	return false;
}

/**
 * Validación tipo de email solicitante.
 */
function checkEmailSolicitante($post){
	if(isset($post['email-solicitante'])){
        if(filter_var($post['email-solicitante'], FILTER_VALIDATE_EMAIL)) {
            return true;
        }
   }
	return false;
}

?>
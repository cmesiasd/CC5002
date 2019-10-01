/**
 * Valida que el largo del nombre-disfraz no posea más de 30 carácteres y no sea vacío.
 */

function nameCostumeValidator(container) {
	var nombreDisfraz = document.getElementsByName("nombre-disfraz")[0].value;
	var regex = /^[a-zA-Z]*$/;
	//var regex = /^[a-zA-Z]\d+(([',. -][a-zA-Z ]\d)?[a-zA-Z]\d*)*$/;
	if (nombreDisfraz.length > 30 || nombreDisfraz.length === 0) {
		alert("Su nombre de disfraz no debe exceder más de 30 carácteres y no puedo ser vacío");
		return false;
	}
	if (!regex.test(nombreDisfraz)) {
		alert("Su nombre de disfraz solo puede contener letras");
		return false;
	}
	return true;
}

/**
 * Valida que el se adjunte al menos una foto
 */
function fileValidator(container) {
	var file = document.getElementsByName("foto-disfraz")[0].value
	if (file.length == 0) {
		alert("Debe adjuntar un archivo");
		return false;
	}
	return true;
}

/**
 * Valida que la descripción sea correcta
 */
function descriptionValidator(container) {
	var description = document.getElementsByName("descripcion-disfraz")[0].value;
	if (description.length == 0){
		return true;
	}
	if (description.length > 500) {
		alert("Descripción del disfraz no debe exceder más de 500 carácteres");
		return false;
	}
	return true;
}

/**
 * Valida que el largo del nombre del contacto no tenga más de 80 carácteres y no sea vacío.
 */
function nameValidator(container) {
	var nombre = document.getElementsByName("nombre-solicitante")[0].value;
	var regex = /^[a-zA-Z]*$/;
	console.log(nombre)
	//var regex = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
	if (nombre.length > 80 || nombre.length < 3) {
		alert("Su nombre debe tener al menos 3 carácteres y menos de 30 carácteres");
		return false;
	}
	if (!regex.test(nombre)) {
		alert("Ingrese un nombre válido");
		return false;
	}
	return true;
}
/**
 * Válidar que el campo teléfono no puede ser mayor a 10 carácteres y
 * sólo puede contener carácteres numéricos
 */

function phoneValidator(container) {
	var telefono = document.getElementsByName("celular-solicitante")[0].value;
	var regex = /^\d+$/;
	if (telefono.length == 0){
		return true;
	}
	if (telefono.length > 15) {
		console.log("largo telefono = " + telefono);
		alert("Su teléfono no debe exceder más de 15 carácteres ");
		return false;
	}
	if (!regex.test(telefono)) {
		alert(("Su teléfono solo puede contener carácteres numéricos"));
		return false;
	}
	return true;
}

/**
 * Valida que el email del contacto sea correcto
 */
function emailValidator(container) {
	var email = document.getElementsByName("email-solicitante")[0].value;
	var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if (email.length > 30) {
		alert("Su email no debe exceder más de 30 carácteres ");
		return false;
	}
	if (!regex.test(email)) {
		alert("Ingrese email valido");
		return false;
	}
	return true;
}

/**
 * Valida que región sea correcta
 */
function regionValidator(container) {
	var region = document.getElementsByName("region-solicitante")[0].value;
	if (region == 'sin-region') {
		alert("Debe seleccionar una region");
		return false;
	}
	
	return true;
}

/**
 * Valida que la comuna sea correcta
 */
function comunaValidator(container) {
	var comuna = document.getElementsByName("comuna-solicitante")[0].value;
	if (comuna == 'sin-comuna') {
		alert("Debe seleccionar una comuna");
		return false;
	}
	
	return true;
}

/**
 * Valida que categoría sea correcta
 */
function categoriaValidator(container) {
	var categoria = document.getElementsByName("categoria-solicitante")[0].value;
	if (categoria == 'sin-categoria') {
		alert("Debe seleccionar una categoria");
		return false;
	}
	return true;
}

/**
 * Valida que la comuna sea correcta
 */
function tallaValidator(container) {
	var talla = document.getElementsByName("talla-solicitante")[0].value;
	if (talla == 'sin-talla') {
		alert("Debe seleccionar una talla");
		return false;
	}
	
	return true;
}

/**
 * Validación de datos formulario.
 */

function dataValidator() {
	container = document.getElementById("container");

	if (nameCostumeValidator(container) && descriptionValidator(container) &&
		categoriaValidator(container) && tallaValidator(container) &&
		nameValidator(container) && emailValidator(container) &&
        phoneValidator(container) &&
        regionValidator(container) && comunaValidator(container)) {
		return true;
	}
	
	return false;

}

/**
 * Limpiar datos del formulario
 */

function cleanForm() {
	document.getElementById("myForm").reset();
}
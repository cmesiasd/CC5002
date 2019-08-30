 /**
  * Válidar que el largo del nombre-disfraz no sea más de 30 carácteres y no vacío.
  * Solo puede contener letras
  */

 function nameCostumeValidator(container) {
     var nombreDisfraz = document.getElementsByName("nombre-disfraz")[0].value;
     var regex = /^[a-zA-Z]*$/;
     if (nombreDisfraz.length > 30 || nombreDisfraz.length == 0) {
         alert("Su nombre de disfraz no debe exceder más de 30 carácteres y no puedo ser vacío");
         return false;
     }
     if (!regex.test(nombreDisfraz)) {
         alert("Su nombre de disfraz solo puede contener letras");
         return false;
     }
     return true;
 }

 function fileValidator(container) {
     var file = document.getElementById("foto-disfraz").files;
     if (file.length == 0) {
         alert("Debe adjuntar un archivo");
     }
 }

 function descriptionValidator(container) {
     var description = document.getElementsByName("descripcion-disfraz")[0].value;

     if (description.length > 500) {
         alert("Descripción del disfraz no debe exceder más de 500 carácteres");
         return false;
     }
     return true;
 }

 function nameValidator(container) {
     var nombre = document.getElementsByName("nombre")[0].value;
     var regex = /^[a-zA-Z]*$/;
     if (nombre.length > 30 || nombre.length < 3) {
         alert("Su nombre de disfraz debe tener al menos 3 carácteres y menos de 30 carácteres");
         return false;
     }
     if (!regex.test(nombre)) {
         alert("Su nombre de disfraz solo puede contener letras");
         return false;
     }
     return true;
 }
 /**
  * Válidar que el campo teléfono no puede ser mayor a 10 carácteres y
  * sólo puede contener carácteres numéricos
  */

 function phoneValidator(container) {
     var telefono = document.getElementsByName("celular")[0].value;
     var regex = /^\d+$/;
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

 function emailValidator(container) {
     var email = document.getElementsByName("email")[0].value;
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
  * Cambiar foto de ingredientes de acuerdo a la selección
  */

 function changeIngredients() {
     var ingrediente = document.getElementById("ingrediente").value;
     var carne = document.getElementById("carne");
     var pepperoni = document.getElementById("pepperoni");
     var aceitunas = document.getElementById("aceitunas");
     console.log(typeof ingrediente);
     if (ingrediente === '3') {
         carne.style.display = "";
         aceitunas.style.display = "none";
         pepperoni.style.display = "none";
     } else if (ingrediente === '1') {
         carne.style.display = "none";
         aceitunas.style.display = "none";
         pepperoni.style.display = "";
     } else if (ingrediente === '2') {
         carne.style.display = "none";
         aceitunas.style.display = "";
         pepperoni.style.display = "none";
     } else {
         carne.style.display = "none";
         aceitunas.style.display = "none";
         pepperoni.style.display = "none";
     }
 }

 /**
  * Validación de datos formulario.
  */

 function dataValidator() {
     container = document.getElementById("container");

     if (nameCostumeValidator(container) && phoneValidator(container) &&
         emailValidator(container) && nameValidator(container) &&
         descriptionValidator(container) && fileValidator(container)) {

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
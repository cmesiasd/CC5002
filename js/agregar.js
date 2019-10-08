/**
 *  Script para agregar más imagenes con un boton
 */
var countImage = 0;

function add_image() {
    let cantidad = document.querySelectorAll('input.archivos').length;
    if (cantidad < 5) {
        var lastPhoto = "foto-disfraz-" + countImage;
        countImage++;      
        var fotoDisfraz = document.getElementById(lastPhoto);
        fotoDisfraz.insertAdjacentHTML("afterend", "<br><input type='file' class='archivos' id='foto-disfraz-" + countImage + "' name='foto-disfraz-" + countImage + "'>");
        return false;
    }
    return false;

}


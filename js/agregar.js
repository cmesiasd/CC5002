var contadorR = 1;
var contador1 = 0;
var contador2 = 0;
var contador3 = 0;
var contador4 = 0;
var contador5 = 0;
var Vcontador1 = 0;
var Vcontador2 = 0;
var Vcontador3 = 0;
var Vcontador4 = 0;
var Vcontador5 = 0;

function add_image() {
    let cantidad = document.querySelectorAll('input.archivos').length;
    if (cantidad < 5) {
        var fotoDisfraz = document.getElementById("foto-disfraz");
        fotoDisfraz.insertAdjacentHTML("afterend", "<br><input type='file' class='archivos' id='foto-disfraz' name='foto-disfraz'>");
        return false;
    }
    return false;

}


function add_image() {
    let cantidad = document.querySelectorAll('input.archivos').length;
    if (cantidad < 5) {
        var fotoDisfraz = document.getElementById("foto-disfraz");
        fotoDisfraz.insertAdjacentHTML("afterend", "<br><input type='file' class='archivos' id='foto-disfraz' name='foto-disfraz'>");
        return false;
    }
    return false;

}


function loadJSON() {

    var data_file = "js/chile.json";
    var xhr = new XMLHttpRequest();
    try {
        xhr = new XMLHttpRequest();
    } catch (e) {
        try {
            xhr = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                alert("Your browser broke!");
                return false;
            }
        }
    }


    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            var container = document.getElementById("menu");
            var jsonObj = JSON.parse(xhr.responseText);
            console.log(jsonObj.length);

            jsonObj.forEach(element => {
                $.ajax({
                    url: "php/search2.php",
                    success: function (result) {
                        var jsonObj2 = JSON.parse(result);

                        for (element2 in jsonObj2) {
                            var a = element.name.toLowerCase();
                            var b = element2.toLowerCase();

                            if (b == a) {

                                var popup = "<table >";
                                var c = 0;
                                for (var i in jsonObj2[element2]) {
                                    var mostar_info = "<td>"
                                    info = jsonObj2[element2][i];
                                    var name = info['nombre_contacto'];
                                    var pet = info['tipo_mascota'];
                                    var date = info['fecha_viaje'];
                                    var imagenes = info["imagenes"];
                                    var mostar_img = '<i>'
                                    for (var j in imagenes) {
                                        mostar_img += "<a href='" + '/cc5002-T2' +
                                            imagenes[j] + "'>link</a>"
                                    }
                                    c += imagenes.length
                                    mostar_info += " Contacto: " + name + " mascota: " +
                                        pet + " Fecha: " + date + '</td>';

                                    popup += mostar_info + mostar_img + '</i>';
                                }
                                popup = popup + "</table>";

                                var marker = L.marker([element.lat, element.lng], {
                                            draggable: true, // Make the icon dragable
                                            title: c, // Add a title
                                        } // Adjust the opacity
                                    ).addTo(mymap).bindPopup(popup)
                                    .openPopup();
                            }
                        }
                    }
                })
            });
        }
    }

    xhr.open("GET", data_file);
    xhr.send();

}
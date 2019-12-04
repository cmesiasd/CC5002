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
                    url: "searchcomuna.php",
                    success: function (result) {
                        var jsonObj2 = JSON.parse(result);

                        for (element2 in jsonObj2) {
                            var a = element.name.toLowerCase();
                            var b = element2.toLowerCase();

                            if (b == a) {

                                var popup = "<table >";
                                var count_img = 0;
                                for (var i in jsonObj2[element2]) {
                                    var mostrar_info = "<td>"
                                    info = jsonObj2[element2][i];
                                    var nombre_comuna = info['nombre_comuna'];
                                    var nombre_disfraz = info["nombre_disfraz"];
                                    var nombre_contacto = info["nombre_contacto"];
                                    var categoria = info["categoria"];
                                    var talla = info["talla"];
                                    var id = info["id"];                           
                                    count_img = info['count_img']
                                    mostrar_info += "<a href='fichaDisfraz.php?id=" + id + "'>" + 
                                                    "<b>Comuna:</b> " + nombre_comuna + 
                                                    "<br><b>Nombre Disfraz: </b>" + nombre_disfraz +
                                                    "<br><b>Categoria: </b>" + categoria +
                                                    "<br><b>Talla: </b> " + talla +
                                                    "<br><b>Nombre Contacto: </b>" + nombre_contacto + '</a></td>';
                                    popup += mostrar_info;
                                    
                                }
                                popup = popup + "</table>";

                                var marker = L.marker([element.lat, element.lng], {
                                            draggable: true, // Make the icon dragable
                                            title: count_img, // Add a title
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
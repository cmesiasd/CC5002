<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/agregarDisfraz.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/boostrapw3c.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin=""></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/loadJSON.js"></script>
    <title>Reciclador de Disfraces</title>
</head>

<body>
    <div class="container-fluid bg-dark">
        <div class="row bg-dark p-0">
            <div class="col-8 py-0 bg-dark justify-content-center">
                <h1 class="titulo">Recicla tu disfraz</h1>
            </div>
            <div class="col-4 p-0 bg-dark float-right">
                <form class="form-inline md-form form-sm active-cyan-2 mt-2">
                    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Buscar..."
                        aria-label="Search" id="search">
                    <i class="fa fa-search fa-2x icono" aria-hidden="true"></i>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-transparent" id="content-result">
        <div class="row justify-content-center bg-transparent">
            <h3> Resultados de busqueda: </h3>
            <div id="result"></div>
        </div>
    </div>

    <div class="container bg-dark justify-content-center" id="menu">
        <!-- Botones menu principal -->
        <div class="row bg-dark">
            <button class="btn-primary" onclick="location.href='agregarDisfraz.php'">Agregar disfraz</button>
        </div>
        <div class="row bg-dark">
            <button class="btn-primary" onclick="location.href='verDisfraces.php'">Ver disfraces</button>
        </div>
        <div class="row bg-dark">
            <button class="btn-primary" onclick="location.href='publicarPedido.php'">Publicar pedido</button>
        </div>
        <div class="row bg-dark">
            <button class="btn-primary" onclick="location.href='verPedidos.php'">Ver pedidos</button>
        </div>

        <div class="row bg-dark justify-content-center">
            <div id="map">
                <script>
                    var mymap = L.map('map').setView([-33.44, -70.65], 10);
                    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1Ijoia3JpaXpub2l6ZSIsImEiOiJjazIxYmpxM2cxaHY5M2Nxb215a2NyY3lkIn0.kammgVmhXHD07YbB9doxig', {
                        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                        maxZoom: 18,
                        id: 'mapbox.streets'
                    }).addTo(mymap);

                </script>
            </div>
        </div>
    </div>
    
    <script src="js/search.js"></script>
</body>

</html>
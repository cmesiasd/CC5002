<?php 
require_once('db_config.php');
require_once('consultas.php');
require_once('diccionario.php');
$id_disfraz = $_GET['id'];
$value = getInfoDisfraz($id_disfraz);
$fotos = getFotoDisfraz($id_disfraz);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/agregarDisfraz.css">
    <link rel="stylesheet" href="css/boostrapw3c.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <script src="js/jquery-3.4.1.min.js"></script>
    <title>Reciclador de Disfraces</title>
</head>

<body>
    <div class="container-fluid bg-dark">
        <div class="row bg-dark p-0">
            <div class="col-8 py-0 bg-dark justify-content-center">
                <h1 class="titulo">Ficha del disfraz</h1>
            </div>
            <div class="col-4 p-0 bg-dark float-right">
                <form class="form-inline md-form form-sm active-cyan-2 mt-2">
                    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Buscar..."
                        aria-label="Search" id="search">
                    <i class="fa fa-search icono fa-2x icono" aria-hidden="true"></i>
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

    <div class="container">
        <!-- Nombre disfraz -->
        <div class="row">
            <h2 class="titulo">Nombre disfraz:  <?php echo $value['nombre_disfraz'] ?> </h2>
        </div>

        <!-- Comuna -->
        <div class="row">
            <b>Comuna:</b>
            <br>  <?php echo getComunaNombre($value['comuna']) ?>
        </div>

        <!-- Categoria -->
        <div class="row">
            <b>Categoria: </b>
            <br>  <?php echo getCategoriaNombre($value['categoria']) ?>
        </div>

        <!-- Talla -->
        <div class="row">
            <b>Talla: </b>
            <br>  <?php echo getTallaNombre($value['talla']) ?>
        </div>

        <!-- Descripción -->
        <div class="row">
            <b>Descripción:</b>
            <?php echo $value['descripcion'] ?>
        </div>

        <!-- Fotos -->
        <div class="row">
            <h4 class="titulo">Fotos</h4>
        </div>
        <div class="row">
            <ul class="galeria" id=galeria>
                <?php foreach ($fotos as $foto => $key) {?>
                    <li class="galeria_item"><img src="<?php echo $key["ruta_archivo"] . $key["nombre_archivo"] ?>" alt="" class="galeria_img"></li>
                <?php } ?>
            </ul>
        </div>

        <!-- Datos de contacto -->
        <div class="row pb-0">
            <h4 class="titulo">Datos de contacto</h4>
        </div>
        <div class="row py-0">
            <div class="col-4 text-left" id="nombre">
                <b>Nombre</b>:  <?php echo $value['nombre_contacto'] ?>
            </div>
            <div class="col-4 text-center" id="email">
                <b>Email</b>:  <?php echo $value['email_contacto'] ?>
            </div>
            <div class="col-4 text-right" id="celular">
                <b>Telefono:</b>  <?php echo $value['celular_contacto'] ?>
            </div>
        </div>

        <!-- Botones -->
        <div class="row justify-content-center">
            <div class="col-4"></div>
            <div class="col-2">
                <a href="index.php"><i class="fa fa-home fa-4x"></i></a>
            </div>
            <div class="col-2">
                <a href="verDisfraces.php"><i class="fa fa-arrow-left fa-4x"></i></a>
            </div>
            <div class="col-4"></div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="js/modal.js"></script>
    <script src="js/search.js"></script>

</body>

</html>
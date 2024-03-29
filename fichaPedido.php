<?php 
require_once('db_config.php');
require_once('consultas.php');
require_once('diccionario.php');
$id_disfraz = $_GET['id'];
$value = getInfoPedido($id_disfraz);
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
        <h1 class="titulo">Ficha de pedido!</h1>
    </div>

    <div class="container">
        <!-- Nombre disfraz -->
        <div class="row">
            <h2 class="titulo">Nombre disfraz: <?php echo $value['nombre_disfraz'] ?></h2>
        </div>

        <!-- Categoría -->
        <div class="row">
            <b>Categoria: </b>
            <br> <?php echo ucwords(getCategoriaNombre($value['categoria'])) ?>
        </div>

        <!-- Talla -->
        <div class="row">
            <b>Talla: </b>
            <br> <?php echo getTallaNombre($value['talla']) ?>
        </div>

        <!-- Comuna -->
        <div class="row">
            <b>Comuna:</b>
            <br> <?php echo getComunaNombre($value['comuna_solicitante']) ?>
        </div>

        <!-- Descripción -->
        <div class="row">
            <b>Descripción:</b>
            <?php echo $value['descripcion'] ?>
        </div>

        <!-- Datos solicitante -->
        <div class="row pb-0">
            <h4 class="titulo">Datos del solicitante</h4>
        </div>
        <div class="row py-0">
            <div class="col-4 text-left" id="nombre">
                <b>Nombre</b>: <?php echo $value['nombre_solicitante'] ?>
            </div>
            <div class="col-4 text-center" id="email">
                <b>Email</b>: <?php echo $value['email_solicitante'] ?>
            </div>
            <div class="col-4 text-right" id="celular">
                <b>Telefono:</b> <?php echo $value['celular_solicitante'] ?>
            </div>
        </div>

        <!-- Botones -->
        <div class="row justify-content-center">
            <div class="col-4"></div>
            <div class="col-2">
                <a href="index.php"><i class="fa fa-home fa-4x"></i></a>
            </div>
            <div class="col-2">
                <a href="verPedidos.php"><i class="fa fa-arrow-left fa-4x"></i></a>
            </div>
            <div class="col-4"></div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="js/modal.js"></script>

</body>

</html>
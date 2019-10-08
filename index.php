<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/agregarDisfraz.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/boostrapw3c.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <script src="js/jquery-3.4.1.min.js"></script>
    <title>Reciclador de Disfraces</title>
</head>

<body>
    <div class="container-fluid bg-dark">
        <h1 class="titulo">Recicla tu disfraz</h1>
    </div>

    <div class="container-fluid bg-transparent"></div>

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
    </div>

</body>

</html>
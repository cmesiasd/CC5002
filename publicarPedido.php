<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="css/agregarDisfraz.css">
	<link rel="stylesheet" href="css/boostrapw3c.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">


	<script src="js/jquery-3.4.1.min.js"></script>
	<title>Reciclador de Disfraces</title>
</head>

<body>
	<div class="container-fluid bg-dark">
		<h1 class="titulo">Publicar pedido</h1>
	</div>

	<div class="container">
		<form id="myform" method="post" action="procesarPedido.php" onsubmit="return dataValidator();">

			<!-- Nombre disfraz -->
			<div class="form-group">
				<label for="nombre-disfraz" class="text-field">Nombre disfraz</label>
				<input type="text" id="nombre-disfraz" name="nombre-disfraz" size="20" class="form-control"
					placeholder="Nombre disfraz">
			</div>

			<!-- Descripcion disfraz -->
			<div class="form-group">
				<label for="descripcion-disfraz" class="text-field">Descripción disfraz</label>
				<input type="text" id="descripcion-disfraz" name="descripcion-disfraz" class="form-control"
					placeholder="Descripción del disfraz">
			</div>

			<!--Categoria solicitante-->
			<div class="form-group">
				<label for="categoria-solicitante" class="text-field">Categoria</label>
				<select id="categoria-solicitante" name="categoria-solicitante"></select>
			</div>

			<!--Talla solicitante-->
			<div class="form-group">
				<label for="talla-solicitante" class="text-field">Talla</label>
				<select id="talla-solicitante" name="talla-solicitante"></select>
			</div>

			<!-- Nombre solicitante -->
			<div class="form-group">
				<label for="nombre-solicitante" class="text-field">Nombre solicitante</label>
				<input type="text" id="nombre-solicitante" name="nombre-solicitante" class="form-control" size="20"
					placeholder="Nombre contacto">
			</div>

			<!-- Email solicitante -->
			<div class="form-group">
				<label for="email-solicitante" class="text-field">Email solicitante</label>
				<input type="email" class="form-control" name="email-solicitante" id="email-solicitante"
					placeholder="user@mail.com">
			</div>

			<!-- Celular solicitante -->
			<div class="form-group">
				<label for="celular-solicitante" class="text-field">Numero celular solicitante</label>
				<input type="text" class="form-control" name="celular-solicitante" id="celular-solicitante"
					placeholder="987654321">
			</div>

			<!-- Region solicitante-->
			<div class="form-group">
				<label for="region-solicitante" class="text-field">Región</label>
				<select id="region-solicitante" name="region-solicitante"></select>
			</div>

			<!-- Comuna solicitante-->
			<div class="form-group">
				<label for="comuna-solicitante" class="text-field">Comuna</label>
				<select id="comuna-solicitante" name="comuna-solicitante"></select>
			</div>

			<div class="row">
				<div class="col-6">
					<input class="btn-success" type="submit" value="Publicar pedido">
				</div>
				<div class="col-6">
					<button class="btn-danger mt-2" onclick="cleanForm();">Limpiar</button>
				</div>
			</div>
		</form>
	</div>

	<!-- Scripts -->
	<script src="js/regiones.js"></script>
	<script src="js/categorias.js"></script>
	<script src="js/validatorPedido.js"></script>
	<script src="js/regiones.js"></script>
</body>

</html>
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
		<h1 class="titulo">Agrega tu disfraz</h1>
	</div>

	<div class="container" id="container">
		<form enctype="multipart/form-data" id="myform" method="post" action="procesarDisfraz.php" onsubmit="return dataValidator();">

			<!-- Region -->
			<div class="form-group">
				<label for="region" class="text-field">Región</label>
				<select id="region" name="region"></select>
			</div>

			<!-- Comuna -->
			<div class="form-group">
				<label for="comuna" class="text-field">Comuna</label>
				<select id="comuna" name="comuna"></select>
			</div>

			<!-- Nombre disfraz -->
			<div class="form-group">
				<label for="nombre-disfraz" class="text-field">Nombre disfraz</label>
				<input type="text" id="nombre-disfraz" name="nombre-disfraz" class="form-control"
					placeholder="Nombre disfraz">
			</div>

			<!-- Descripcion disfraz -->
			<div class="form-group">
				<label for="descripcion-disfraz" class="text-field">Descripción disfraz</label>
				<textarea name="descripcion-disfraz" id="descripcion-disfraz" cols="40" rows="8"
					placeholder="Descripción disfraz"></textarea>
			</div>

			<!--Categoria-->
			<div class="form-group">
				<label for="categoria" class="text-field">Categoria</label>
				<select id="categoria" name="categoria"></select>
			</div>

			<!--Talla-->
			<div class="form-group">
				<label for="talla" class="text-field">Talla</label>
				<select id="talla" name="talla"></select>
			</div>

			<!--Foto-->
			<div class="form-group">
				<label for="foto-disfraz-0" class="text-field">Foto Disfraz</label>
				<br>
				<div class="row">
					<div class="col-lg-9 col-md-12">
						<input type="file" class="archivos" id="foto-disfraz-0" name="foto-disfraz">
					</div>
					<div class="col-lg-3 col-md-12">
						<button class="btn-small btn-light" id="button-add" onclick="return add_image()">Agregar otra
							foto</button>
					</div>
				</div>
			</div>

			<!-- Nombre contacto -->
			<div class="form-group">
				<label for="nombre" class="text-field">Nombre contacto</label>
				<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre contacto">
			</div>

			<!-- Email contacto -->
			<div class="form-group">
				<label for="email" class="text-field">Email contacto</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="user@mail.com">
			</div>

			<!-- Celular contacto -->
			<div class="form-group">
				<label for="celular" class="text-field">Numero celular contacto</label>
				<input type="text" class="form-control" name="celular" id="celular" placeholder="987654321">
			</div>

			<!-- Botones -->
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
	<script src="js/agregar.js"></script>
	<script src="js/regiones.js"></script>
	<script src="js/categorias.js"></script>
	<script src="js/validatorDisfraz.js"></script>
</body>

</html>
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

	<script src="js/jquery-3.4.1.min.js"></script>
	<title>Reciclador de Disfraces</title>
</head>

<body>
	<div class="container-fluid bg-dark">
		<h1 class="titulo">Listado de disfraces!</h1>
	</div>

	<div class="container">
		<table class="table table-hover">
			<!-- Cabecera de la tabla -->
			<thead class="thead bg-dark">
				<tr class="table-head">
					<th scope="col">Nombre disfraz</th>
					<th scope="col">Región</th>
					<th scope="col">Comuna</th>
					<th scope="col">Categoría</th>
					<th scope="col">Talla</th>
					<th scope="col">Nombre contacto</th>
				</tr>
			</thead>
			<!-- Datos de la tabla -->
			<tbody>
				<tr>
					<th scope="row"> <a href="fichaDisfraz.php"> Spider-Man </a></th>
					<td>Metropolitana</td>
					<td>Santiago</td>
					<td>Hombre</td>
					<td>M</td>
					<td>Gabriel Iturra</td>
				</tr>
				<tr>
					<th scope="row"> <a href="fichaDisfraz.php"> Jack Sparrow </a></th>
					<td>Maule</td>
					<td>Talca</td>
					<td>Hombre</td>
					<td>L</td>
					<td>Jose Urzua</td>
				</tr>
				<tr>
					<th scope="row"> <a href="fichaDisfraz.php">Chavo del 8</a></th>
					<td>Maule</td>
					<td>Talca</td>
					<td>Infantil niño</td>
					<td>12-14 años</td>
					<td>Pablo Pizarro</td>
				</tr>
				<tr>
					<th scope="row"> <a href="fichaDisfraz.php">Cenicienta</a></th>
					<td>Valparaíso</td>
					<td>Viña del Mar</td>
					<td>Mujer</td>
					<td>S</td>
					<td>Valentina Gonzalez</td>
				</tr>
				<tr>
					<th scope="row"><a href="fichaDisfraz.php">Blancanieves </a></th>
					<td>Valparaíso</td>
					<td>Viña del Mar</td>
					<td>Infantil niña</td>
					<td>10-11 años</td>
					<td>Rocío Díaz</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>

</html>
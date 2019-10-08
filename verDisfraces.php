<?php
require_once('db_config.php');
require_once('consultas.php');
require_once('diccionario.php');
$db = DbConfig::getConnection();
// $infoXpagina = 5;
// $contar = $db->query("SELECT count(*) AS cuenta FROM pedido");
// $cuenta = $contar->fetch_assoc()['cuenta'];
// $paginas = ceil($cuenta/$infoXpagina);
$disfraces = getDisfraces($db);
$db->close();
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
					<th scope="col">Comuna</th>
					<th scope="col">Categoría</th>
					<th scope="col">Talla</th>
					<th scope="col">Nombre contacto</th>
				</tr>
			</thead>
			<!-- Datos de la tabla -->
			<tbody>

				<?php foreach ($disfraces as $disfraz => $value) {?>
				<tr>
					<th scope="row"> <a href="fichaDisfraz.php?id=<?php echo $value['id'] ?> "><?php echo $value['nombre_disfraz']?></a></th>
					<td><?php echo getComunaNombre($value['comuna'])?></td>
					<td><?php echo getCategoriaNombre($value['categoria'])?></td>
				 	<td><?php echo getTallaNombre($value['talla'])?></td>
					<td><?php echo $value['nombre_contacto']?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>

</html>
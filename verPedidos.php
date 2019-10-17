

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
	<?php
		if(!$_GET){
            header('Location:verPedidos.php?pagina=1');
        }

		require_once('db_config.php');
		require_once('consultas.php');
		require_once('diccionario.php');
		$db = DbConfig::getConnection();
		$datosXpagina = 5;
		$contar = $db->query("SELECT count(*) AS cuenta FROM pedido");
		$cuenta = $contar->fetch_assoc()['cuenta'];
		$paginas = ceil($cuenta/$datosXpagina);
		$pagina = (int)$_GET['pagina'];
		if($pagina ==1){
			$pedidos = getPedidos($db);
		} else {
			$pagina--;
			$pedidos = getXPedidos($db,$datosXpagina * $pagina);
		}
		$db->close();
	?>
            
	<div class="container-fluid bg-dark">
		<h1 class="titulo">Listado de pedidos!</h1>
	</div>


	<div class="container">
		<table class="table table-hover">
			<!--  Cabecera de la tabla -->
			<thead class="thead bg-dark">
				<tr class="table-head">
					<th scope="col">Nombre disfraz</th>
					<th scope="col">Categoría</th>
					<th scope="col">Talla</th>
					<th scope="col">Comuna</th>
					<th scope="col">Nombre Solicitante</th>
				</tr>
			</thead>
			<!-- Datos de la tabla -->
			<tbody>

				<?php foreach ($pedidos as $pedido => $value) {?>
				<tr>
					<th scope="row"><a
							href="fichaPedido.php?id=<?php echo $value['id'] ?> "><?php echo $value['nombre_disfraz']?></a>
					</th>
					<td><?php echo getCategoriaNombre($value['categoria'])?></td>
					<td><?php echo getTallaNombre($value['talla'])?></td>
					<td><?php echo getComunaNombre($value['comuna_solicitante'])?></td>
					<td><?php echo $value['nombre_solicitante']?></td>
				</tr>
				<?php } ?>

			</tbody>
		</table>

		<nav>
			<ul class="pagination">
				<li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>">
					<a class="page-link"
						href="verPedidos.php?pagina=<?php echo $_GET['pagina'] >= 1? 1: $_GET['paginas'] - 1 ?>">
						Anterior
					</a>

				</li>

				<?php for($i = 0; $i < $paginas; $i++){ ?>
				<li class="page-item
                            <?php echo $_GET['pagina'] == $i+1 ? 'active' : '' ?>">
					<a class="page-link" href="verPedidos.php?pagina=<?php echo $i+1 ?>"><?php echo $i+1 ?></a>

				</li>
				<?php } ?>
				<li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?>">
					<a class="page-link"
						href="verPedidos.php?pagina=<?php echo $_GET['pagina'] >= $paginas ? $paginas : $_GET['pagina'] + 1?>">
						Siguiente
					</a>
				</li>
		</nav>
	</div>

</body>

</html>
<?php 
if(!isset($_POST['search'])) exit('No se recibió el valor a buscar');

require_once('db_config.php');

function search()
{
  $mysqli = DbConfig::getConnection();
  $search = $mysqli->real_escape_string($_POST['search']);
  $query = "SELECT id, comuna, nombre_disfraz FROM disfraz WHERE nombre_disfraz LIKE '%$search%'";
  $res = $mysqli->query($query);
  if($res->num_rows == 0){
    echo "No hay resultados para <b>" . ($_POST['search']) . "</b>";
  }
  while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
    echo "<p><a href='fichaDisfraz.php?id=$row[id]' target='_blank'>"." $row[nombre_disfraz]</a></p>";
  }
}

search();
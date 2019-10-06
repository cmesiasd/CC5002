<?php

function limpiar($db, $str){
	return htmlspecialchars($db->real_escape_string($str));
}

?>
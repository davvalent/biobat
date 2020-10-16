<?php

include 'vars.php';

// Au cas où affichage.php est appelée par la liste (index.php)
if (!isset($numero)) {
	include('mysql.inc.php');
	$numero = $_POST["id"];
} 

$query = "SELECT bmf_nom, bmf_games, bmf_cash, bmf_solde, bmf_solde_cash, bmf_note
			FROM ".$table."
			WHERE bmf_id = $numero";

$result = mysqli_query($link,$query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($link);

if ($row[bmf_solde] == 1) $afficher_solde = $row[bmf_solde_cash]." $";
else $afficher_solde = "non";
	
$page = $affichage;

include $bmf;
include $page;

?>
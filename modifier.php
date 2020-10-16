<?php

include 'vars.php';

$numero = $_POST["id"];
$n_note_a_rmplcr = $_POST["note"];
$n_note = str_replace("'", "’", $n_note_a_rmplcr);

include('mysql.inc.php');

// Extraction des données à partir de l'id passé par affichage.php
// au lieu de passer l'ensemble des données par le tableau $_POST.
$query = "SELECT bmf_nom, bmf_games, bmf_solde, bmf_solde_cash
			FROM ".$table."
			WHERE bmf_id = $numero";

$result = mysqli_query($link,$query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

mysqli_free_result($result);

$nom = $row[bmf_nom];
$argent_solde = $row[bmf_solde_cash];

if (isset($_POST["ajouter"])) {

	$ajout = ++$row[bmf_games];
	$n_cash = $ajout*5;
	$n_solde_cash = $argent_solde-5;
	
	if ($n_solde_cash <= 0) {
		$n_solde_cash = 0;
		$afficher_solde = "non";
		$n_solde = 0;
		
		if ($row[bmf_solde] == 1) {
			$supprimer = "[]";
			$n_nom = trim($nom,$supprimer);
		}

		else $n_nom = $nom;
	}

	else {
		$afficher_solde = $n_solde_cash." $";
		$n_solde = 1;
		$n_nom = $nom;
	}
}

if (isset($_POST["ajouter_solde"])) {
	
	$ajout = $row[bmf_games];
	$n_cash = $ajout*5;
	$n_solde_cash = $argent_solde+5;
	$n_solde = 1;
	$afficher_solde = $n_solde_cash." $";
	
	if ($row[bmf_solde] == 0) $n_nom = "[".$nom."]"; // Puisque $n_solde == 1
	else $n_nom = $nom;
}

$requete = "UPDATE ".$table."
			SET bmf_nom = '$n_nom',
				bmf_games = $ajout,
				bmf_cash = $n_cash,
				bmf_solde = $n_solde,
				bmf_solde_cash = $n_solde_cash,
				bmf_note = '$n_note'
			WHERE bmf_id = $numero";
			
$resultats = mysqli_query($link,$requete);

include 'affichage.php';
//include $bmf;
//include $page;
	
?>
<?php

include 'vars.php';

if ( isset($_POST["nom"]) ) {

	$nom_a_rmplcr = $_POST["nom"];
	$nom = str_replace("'", "’", $nom_a_rmplcr);
	$solde = $_POST["solde"];
	$note_a_rmplcr = $_POST["note"];
	$note = str_replace("'", "’", $note_a_rmplcr);
	
	if (empty($solde)) {
		$games = 1;
		$cash = $games*5;
		$solde = 0;
		$argent_solde = 0;
	}
	else {
		$games = 0;
		$cash = 0;
		$argent_solde = 5;
	}
	
	if (empty($nom)) {
//		header("Location: ".$index);
		echo "AUCUN NOM SAISI";
		exit();
		}
	else
	{
		include('mysql.inc.php');
		
		$recherche = "SELECT bmf_nom
						FROM ".$table."
						WHERE bmf_nom = '$nom' OR bmf_nom = '[$nom]'";
		$result = mysqli_query($link,$recherche);
		$row_cnt = mysqli_num_rows($result);
		
		if ($row_cnt > 0) {
			echo 'Erreur : le nom existe déjà dans la base de données, BANAAANE (réponse élégante à venir)';
			mysqli_free_result($result);
			mysqli_close($link);
			exit();
		}
		else {
			if ($solde == 1) $nom = "[".$nom."]";
			
			$requete = "INSERT INTO ".$table." (bmf_nom, bmf_games, bmf_cash, bmf_solde, bmf_solde_cash, bmf_note)
						VALUES ('$nom', $games, $cash, $solde, $argent_solde, '$note')";
			$result = mysqli_query($link,$requete);
			
			$recherche_numero = "SELECT bmf_id
						FROM ".$table."
						WHERE bmf_nom = '$nom'";
			$result = mysqli_query($link,$recherche_numero);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			$numero = $row[bmf_id];

			mysqli_free_result($result);

/*			Pour des requêtes SELECT, SHOW, DESCRIBE ou EXPLAIN
			réussies, mysqli_query() retournera un objet
			mysqli_result. Pour les autres types de requêtes
			ayant réussies, mysqli_query() retournera TRUE
			(d'où le warning concerant la valeur booléenne). 	*/	
			
			include 'affichage.php';
		}
	}
}

else { 
	$page = $nouveau;
	include $bmf;
	include $page;
}

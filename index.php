<?php
include 'vars.php';
include 'mysql.inc.php';

$query = "SELECT bmf_id, bmf_games, bmf_nom, bmf_cash, bmf_solde
			FROM ".$table."
			GROUP BY bmf_solde DESC, bmf_nom";
			
if ($result = mysqli_query($link,$query)) {

	$row_cnt = mysqli_num_rows($result);

	include $bmf;
	include $boutons_liste;
	
	$i = 0;
	
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {	
		include $liste;
		++$i;
	}
	echo '<tr><td>'.$i.' résultats affichés</td></tr>'; // À placer dans liste.fin éventuellement
    mysqli_free_result($result);
}

mysqli_close($link);
include $liste_fin;
?>
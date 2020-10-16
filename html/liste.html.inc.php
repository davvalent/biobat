<?php

$affichage_liste =
			'<tr class="rangee" id="'.$row[bmf_id].'">
				<td>'.$row[bmf_nom].'</td>
				<td>'.$row[bmf_games].':'.$row[bmf_cash].'</td>
			</tr>';
			
echo $affichage_liste;

?>
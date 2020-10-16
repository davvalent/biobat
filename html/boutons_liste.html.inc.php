<?php

$entete = '
		<section>
		<div id="bb">
				<button class="btn" onclick="window.location.href=\'nouveau.php\'">+</button>			
				<button class="btn" onclick="window.location.href=\'index.php\'">R</button>
				<button class="btn" onclick="window.location.href=\'index.php\'">$</button>			
				<button class="btn" onclick="window.location.href=\'index.php\'">&#10006;</button>
		</div>
		<table>
			<tr>
				<th>NOM ('.$row_cnt.')</th>
				<th>P:$</th>
			</tr>';

echo $entete;

?>
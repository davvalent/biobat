<?php

if ($row[bmf_games] == 1) $pj = "partie jouée";
else $pj = "parties jouées";

$affichage_section = '<section>
		<div>
			 <ul>
				<li class="ident-solde">'.$row[bmf_nom].'</li>
				<li class="part-arg">'.$row[bmf_games].' '.$pj.'</li>
				<li class="part-arg">'.$row[bmf_cash].' $ sur '.$max_saison.' $</li>
				<li class="ident-solde">Solde : '.$afficher_solde.'</li>
			</ul> 
		</div>';

$modifier ='
		<div id="divform">
				<form name="modifier" id="modifier" method="post" action="modifier.php" autocomplete="on">
					<input name="note" type="text" placeholder="Prendre une note..." value="'.$row[bmf_note].'">
					<input class="cacher" name="id" type="text" value="'.$numero.'">
				</form>
		</div>
		<div id="bb"><!-- Peut-être que ça prend l\'input. -->
			<button class="btn" type="submit" form="modifier" name="ajouter" value="1">+</button>			
			<button class="btn" type="submit" form="modifier" name="ajouter_solde" value="1">!</button>
			<button class="btn" onclick="window.location.href=\'index.php\'">-</button>			
			<button class="btn" onclick="window.location.href=\'index.php\'">&#10006;</button>
		</div>
	</section>
</body>
</html>';

echo $affichage_section;
echo $modifier;

?>
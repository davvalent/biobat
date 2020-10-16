<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex,nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BMF - Suivi de la participation</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<script src="jquery-3.2.1.min.js"></script>
	<script src="jquery.redirect.js"></script>
	<script>
	$(document).ready(function(){
		$("tr.rangee").click(function(){
			$.redirect("affichage.php", {id: $(this).attr("id")});
		});
	});
</script>
</head>
<body>	
	<header>
		<img src="BMF-carre.png" onclick="location.href='index.php'">
	</header>
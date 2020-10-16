	<section>
			<div id="divform">
				<form name="nouveau" id="nouveau" method="post" action="nouveau.php">
					<input type="text" name="nom" autofocus autocomplete="on" required placeholder="Saisir le nom..."><br>
					<div id="box">Solde :
						<input type="checkbox" id="solde" name="solde" value="1" checked />
						<label for="solde"><span class="ui"></span>Foo bar stiiiii</label>
					</div>
					<input name="note" class="test" type="text" placeholder="Prendre une note...">
				</form>
			</div>
		<div id="bb"><!-- Peut-être que ça prend l'input. -->
				<button class="btn" type="submit" form="nouveau" value="Submit"><span class="check">&#9989;</span></button>			
				<button class="btn" onclick="window.location.href='index.php'">&#10006;</button>
		</div>
	</section>
</body>
</html>
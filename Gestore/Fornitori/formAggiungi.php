<html>
	<body>
		<h1>Inserisci il codice del fornitore da aggiungere</h1>
		
		<form action="./modifica.php" method="GET">
			<input type='hidden' id='option' name='option' value='add'>
			<label for="code">Codice del fornitore: </label>
			<input type="text" id="code" name="code">
			<br><br>
			<input type="submit">
			<input type="reset">
		</form>
	</body>
</html>
<html>
	<body>
		<h1>Inserisci il codice del prodotto da aggiungere</h1>
		
		<form action="./modifica.php" method="GET">
			<input type='hidden' id='option' name='option' value='add'>
			<label for="code">Codice del prodotto: </label>
			<input type="text" id="code" name="code">
			<br><br>
			<input type="submit">
			<input type="reset">
		</form>
	</body>
</html>
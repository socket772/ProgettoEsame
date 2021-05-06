<html>
	<body>
		<h1>Inserisci il codice del prodotto da ordinare</h1>
		
		<form action="./modifica.php" method="GET">
			<label for="code">Codice prodotto: </label>
			<input type="text" id="code" name="code">
			<input type='hidden' id='add' name='option' value='add'>
			<br><br>
			<input type="submit">
			<input type="reset">
		</form>
	</body>
</html>
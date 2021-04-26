<html>
	<body>
		<h1>Inserisci il codice del prodotto</h1>
		
		<form action="./modifica.php" method="GET">
			<label for="code">Codice prodotto: </label>
			<input type="text" id="code" name="code">
			<br><br>
			<input type="radio" id="upt" name="option" value="upt" checked>
			<label for="upt">Modifica</label><br>
			<input type="radio" id="add" name="option" value="add">
			<label for="add">Aggiungi</label>
			<br><br>
			<input type="submit">
			<input type="reset">
		</form>
	</body>
</html>
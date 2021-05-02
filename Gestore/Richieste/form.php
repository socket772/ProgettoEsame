<html>
	<body>
		<h1>Inserisci il codice del prodotto</h1>
		
		<form action="./modifica.php" method="GET">
			<label for="codice">Numero richiesta: </label>
			<input type="text" id="codice" name="codice">
			<br><br>
			<label for="codeProd">Codice prodotto: </label>
			<input type="text" id="codeProd" name="codeProd">
			<br><br>
			<label for="codeUff">Codice ufficio: </label>
			<input type="text" id="codeUff" name="codeUff">
			<br><br>
			<label for="data">Data: </label>
			<input type="text" id="data" name="data" value="yyyy/MM/dd">
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
<html>
	<style><?php include '../stili/css/bootstrap-italia.min.css'; ?></style>
	<body>
		<h1>Inserisci il codice del prodotto da aggiungere</h1>
		
		<form action="./modifica.php" method="GET">
			
				<input type='hidden' id='option' name='option' value='add'>

				<label for="code">Codice del oggetto</label>
				<div class="form-group">
					<input type="text" id="code" name="code" class='form-control' placeholder="Codice">
					<br>
					<input type="submit" class="btn btn-outline-secondary">
					<input type="reset" class="btn btn-outline-secondary">
				</div>
			</form>
			<a href="./" class="go-back"><svg class="icon icon-sm icon-primary mr-2"><use xlink:href="../stili/svg/sprite.svg#it-arrow-left"></use></svg> Torna indietro</a>
		<script src="../stili/js/bootstrap-italia.bundle.min.js"></script>
	</body>
</html>
<html>
<style><?php include '../stili/css/bootstrap-italia.min.css'; ?></style>

	<body>
		<div class="it-header-slim-wrapper">
			<div class="container">
				<div class="row">
				<div class="col-12">
					<div class="it-header-slim-wrapper-content">
					<a class="d-none d-lg-block navbar-brand" href="../"><img src="../stili/assets/stemma.png"> Menu Principale</a>
					<div class="nav-mobile">
						<nav>
						<a class="it-opener d-lg-none" data-toggle="collapse" href="../" role="button" aria-expanded="false" aria-controls="menu1">
							<span>Menu principale</span>
							<svg class="icon">
							<use xlink:href="../stili/svg/sprite.svg#it-expand"></use>
							</svg>
						</a>
						<div class="link-list-wrapper collapse" id="menu1">
							<ul class="link-list">
							<li><a class="list-item" href="#"></a></li>
							<li><a class="list-item active" href="../Inventario">Inventario</a></li>
                        	<li><a class="list-item active" href="../Fornitori">Fornitori</a></li>
                        	<li><a class="list-item active" href="../Ordini">Ordini</a></li>
							<li><a class="list-item" href="#"></a></li>
							</ul>
						</div>
						</nav>
					</div>
					</div>
				</div>
				</div>
			</div>
		</div>

		<h2 class="display-2">Inserisci il codice del fornitore da aggiungere</h2>
		
			<form action="./modifica.php" method="GET">
			
				<input type='hidden' id='option' name='option' value='add'>

				<label for="code">Codice del fornitore </label>
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
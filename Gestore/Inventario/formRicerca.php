<?php
// Create connection
$conn = mysqli_database();
?>

<html>
	<body>

		<div class="it-header-slim-wrapper">
			<div class="container">
				<div class="row">
				<div class="col-12">
					<div class="it-header-slim-wrapper-content">
					<a class="d-none d-lg-block navbar-brand" href="../">Menu Principale</a>
					<div class="nav-mobile">
						<nav>
						<a class="it-opener d-lg-none" data-toggle="collapse" href="../" role="button" aria-expanded="false" aria-controls="menu1">
							<span>Menu principale</span>
							<svg class="icon">
							<use xlink:href="/bootstrap-italia/dist/svg/sprite.svg#it-expand"></use>
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
		
		<h1>Inserisci il codice dell'oggetto da modificare</h1>
		
		<form action="./modifica.php" method="GET">
			<label for="code">Codice fornitore: </label>
			<?php
				$sqlInventario = "SELECT codice FROM Inventario ORDER BY codice";
				$resultInventario = mysqli_query($conn, $sqlInventario);
				echo "<select name='code' id='code'>";
				while($tmp = mysqli_fetch_assoc($resultInventario))
				{
					echo "<option value='".$tmp["codice"]."'>".$tmp["codice"]."</options>";
				}
				echo "</select>";
				mysqli_close($conn);
			?>
			<br><br>
			<input type="submit">
			<input type="reset">
		</form>
	</body>
</html>
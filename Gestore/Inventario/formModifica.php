<?php
// Create connection
$conn = mysqli_connect("localhost", "root", "", "Inventario");
// Check connection
if (!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}
?>

<html>
	<?php include './Gestore/libs.php'; ?>
	<style><?php include '../stili/css/bootstrap-italia.min.css'; ?></style>
	
	<body>
		<h1>Inserisci il codice dell'oggetto da modificare</h1>
		<form action="./modifica.php" method="GET">
			
		<label for='code'>Codice oggetto</label>
			<div class='bootstrap-select-wrapper'>
			
				<select title='Scegli una opzione' data-live-search='true' data-live-search-placeholder='Cerca codice' name='code' id='code'>
				<?php
					$sqlInventario = "SELECT codice FROM Inventario ORDER BY codice";
					$resultInventario = mysqli_query($conn, $sqlInventario);
					while($tmp = mysqli_fetch_assoc($resultInventario))
					{
						echo "<option value='".$tmp["codice"]."'>".$tmp["codice"]."</options>";
						
					}
					mysqli_close($conn);
				?>
				</select>
			</div>

			<br>
			<input type='submit' class='btn btn-outline-secondary'>
			<input type='reset' class='btn btn-outline-secondary'>
		</form>
		<a href='./' class='go-back'><svg class='icon icon-sm icon-primary mr-2'><use xlink:href='../stili/svg/sprite.svg#it-arrow-left'></use></svg> Torna indietro</a>
		<script src='../stili/js/bootstrap-italia.bundle.min.js'></script>
	</body>
	
</html>
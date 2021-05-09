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
	<body>
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
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
	<body>
		<h1>Inserisci il codice del fornitore da modificare</h1>
		<form action="./modifica.php" method="GET">
			<label for="code">Codice fornitore: </label>
		
			<?php
				$sqlFornitore = "SELECT codice FROM Fornitori ORDER BY codice";
				$resultFornitore = mysqli_query($conn, $sqlFornitore);
				echo "<select name='code' id='code'>";
				while($tmp = mysqli_fetch_assoc($resultFornitore))
				{
					echo "<option value='".$tmp["codice"]."'>".$tmp["codice"]."</options>";
					
				}
				echo "</select>";
				mysqli_close($conn);
			?>
			<br><br>
			echo "<input type='submit'>";
			echo "<input type='reset'>";
		</form>
	</body>
</html>
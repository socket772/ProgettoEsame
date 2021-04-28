<html>
<style><?php include '../stili/style.css'; ?></style>
<?php

	
	// Create connection
	$conn = mysqli_connect("localhost", "root", "", "Inventario");
	// Check connection
	if (!$conn)
	{
	  die("Connection failed: " . mysqli_connect_error());
	}
	
	
	$code= $_GET['code'];
	$option= $_GET['option'];

	if($option == "add")
	{
		$sql = "INSERT INTO Ordini(codiceOggetto) VALUES('".$code."')";
		$result = mysqli_query($conn, $sql);
	}


	$sql = "SELECT * FROM Ordini WHERE codiceOggetto='".$code."'";
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)==0)
	{
		echo "<h1>Il codice inserito non è valido (elemento mancante)</h1>";
		exit();
	}

	$row = mysqli_fetch_assoc($result);
		echo "<table class='blueTable'><form action='./modificaExec.php'>";
		echo "<th>Riga</th><th>Dati inseriti</th>";
		echo "<input type='hidden' id='code' name='code' value='".$code."'>";

		echo "<tr>";
		echo "<td>Codice</td>";
		echo "<td>".$row["codiceOggetto"]."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='quantita'>Quantita oggetto: text (32)</label></td>";
		echo "<td><input type='text'id='quantita'name='quantita' value='".$row["quantita"]."'></td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td>Descrizione</td>";
		echo "<td>".$row["descrizione"]."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td>Prezzo Totale</td>";
		echo "<td>".$row["prezzoTot"]."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td>Codice fornitore</td>";
		echo "<td>".$row["codiceFornitore"]."</td>";
		echo "</tr>";

		echo "</table>";

		echo"<br><br>";
		echo "<input type='submit' class='alto'>";
		echo"<br><br>";
		echo "<input type='reset' class='alto'>";
		echo "</form>";

	mysqli_close($conn);
?>
</html>
<html>
<style><?php include '../stili/style.css'; ?></style>
<?php
	
	include '../libs.php';
	// Create connection
	$conn = mysqli_connect("localhost", "root", "", "Inventario");
	// Check connection
	if (!$conn)
	{
	  die("Connection failed: " . mysqli_connect_error());
	}

	$code= remove_injections($_GET['code']);
	$option= remove_injections($_GET['option']);
	

	if($option == "add")
	{
		$sql = "INSERT INTO Fornitori(codice) VALUES('".$code."')";
		$result = mysqli_query($conn, $sql);
	}


	$sql = "SELECT * FROM Fornitori WHERE codice='".$code."'";
	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);
		echo "<pre><table class='blueTable'><form action='./modificaExec.php'>";
		echo "<th>Riga</th><th>Dati inseriti</th>";
		echo "<input type='hidden' id='code' name='code' value='".$code."'>";

		echo "<tr>";
		echo "<td>Codice</td>";
		echo "<td>".$row["codice"]."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='nome'>Nome fornitore: text (32)</label></td>";
		echo "<td><input type='text'id='nome'name='nome' value='".$row["nome"]."'></td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='mail'>Mail fornitore: text (64)</label></td>";
		echo "<td><input type='text'id='mail'name='mail' value='".$row["mail"]."'></td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='impegnoDiSpesa'>Impegno di spesa: decimal (8 cifre tot, 2 dopo punto)</label></td>";
		echo "<td><input type='text'id='impegnoDiSpesa'name='impegnoDiSpesa' value='".$row["impegnoDiSpesa"]."'></td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='determina'>Determina fornitore: int (4)</label></td>";
		echo "<td><input type='text'id='determina'name='determina' value='".$row["determina"]."'></td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='dataDetermina'>Data determina fornitore: date</label></td>";
		echo "<td><input type='date'id='dataDetermina'name='dataDetermina' value='".$row["dataDetermina"]."'></td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='cig'>CIG fornitore: text (32)</label></td>";
		echo "<td><input type='text'id='cig'name='cig' value='".$row["cig"]."'></td>";
		echo "</tr>";

		echo "</select></td>";
		echo "</tr></table>";

		echo"<br><br>";
		echo "<input type='submit' class='alto'>";
		echo"<br><br>";
		echo "<input type='reset' class='alto'>";
		echo "</form></pre>";

	mysqli_close($conn);
?>
</html>
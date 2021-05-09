<html>
<style><?php include '../stili/css/bootstrap-italia.min.css'; ?></style>

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
		echo "<table class='table'><form action='./modificaExec.php' method='POST'>";
		echo "<th>Riga</th><th>Dati inseriti</th>";
		echo "<input type='hidden' id='code' name='code' value='".$code."'>";

		echo "<tr>";
		echo "<td>Codice</td>";
		echo "<td>".$row["codice"]."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='nome'>Nome fornitore: text (32)</label></td>";
		echo "<td><input type='text' id='nome'name='nome' class='form-control' value='".$row["nome"]."'></td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='mail'>Mail fornitore: text (64)</label></td>";
		echo "<td><input type='text' id='mail' name='mail' class='form-control' value='".$row["mail"]."'></td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='impegnoDiSpesa'>Impegno di spesa: decimal (8 cifre tot, 2 dopo punto)</label></td>";
		echo "<td><input type='text' id='impegnoDiSpesa' name='impegnoDiSpesa' class='form-control' value='".$row["impegnoDiSpesa"]."'></td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='determina'>Determina fornitore: int (4)</label></td>";
		echo "<td><input type='text' id='determina' name='determina' class='form-control' value='".$row["determina"]."'></td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='dataDetermina'>Data determina fornitore: date</label></td>";
		echo "<td><input type='date' id='dataDetermina' name='dataDetermina' class='form-control' value='".$row["dataDetermina"]."'></td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='cig'>CIG fornitore: text (32)</label></td>";
		echo "<td><input type='text' id='cig' name='cig' class='form-control' value='".$row["cig"]."'></td>";
		echo "</tr>";

		echo "</select></td>";
		echo "</tr></table>";

		echo"<br>";
		echo "<input type='submit' class='btn btn-outline-secondary'><br><br>";
		echo "<input type='reset' class='btn btn-outline-secondary'><br><br>";
		echo "</form>";

	mysqli_close($conn);
?>
	<a href="./" class="go-back"><svg class="icon icon-sm icon-primary mr-2"><use xlink:href="../stili/svg/sprite.svg#it-arrow-left"></use></svg> Torna indietro</a>
	<script src="../stili/js/bootstrap-italia.bundle.min.js"></script>
</html>
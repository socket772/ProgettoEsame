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
	
	$sql = "SELECT * FROM Inventario";
	
	$result = mysqli_query($conn, $sql);
	
	

	if (mysqli_num_rows($result) > 0)
	{
	  // output data of each row
	  //$row["dato"]
	  echo "<table class='blueTable'>";
	  echo "<tr>";
	  echo "<th>Codice</th> <th>Descrizione</th> <th>Pezzi per unita</th> <th>Scorta</th> <th>Scorta minima</th> <th>Tipo</th> <th>Prezzo unitario</th> <th>Ordine</th> <th>Consumo Annuo</th> <th>Codice fornitore</th>";
	  echo "</tr>";
	  while($row = mysqli_fetch_assoc($result))
	  {
		echo "<tr>";
		echo "<td>".$row["codice"]."</td>";
		echo "<td>".$row["descrizione"]."</td>";
		echo "<td>".$row["pezziPerUnita"]."</td>";
		echo "<td>".$row["scorta"]."</td>";
		echo "<td>".$row["scortaMinima"]."</td>";
		echo "<td>".$row["tipo"]."</td>";
		echo "<td>".$row["prezzoUnitario"]."</td>";
		echo "<td>".$row["ordine"]."</td>";
		echo "<td>".$row["consumoAnnuo"]."</td>";
		echo "<td>".$row["codiceFornitore"]."</td>";
		echo "</tr>";
	  }
	  echo "</table>";
	}
	
	else
	{
	  echo "La tabella e vuota";
	}

	mysqli_close($conn);
?>
</html>
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
	
	$sql = "SELECT * FROM Ordini";
	
	$result = mysqli_query($conn, $sql);
	
	

	if (mysqli_num_rows($result) > 0)
	{
	  // output data of each row
	  //$row["dato"]
	  echo "<table class='blueTable'>";
	  echo "<tr>";
	  echo "<th>Quantita</th> <th>Codice oggetto</th> <th>Descrizione</th> <th>Prezzo totale</th> <th>Codice fornitore</th>";
	  echo "</tr>";
	  while($row = mysqli_fetch_assoc($result))
	  {
		echo "<tr>";
		echo "<td>".$row["quantita"]."</td>";
		echo "<td>".$row["codiceOggetto"]."</td>";
		echo "<td>".$row["descrizione"]."</td>";
		echo "<td>".$row["prezzoTot"]."</td>";
		echo "<td>".$row["codiceFornitore"]."</td>";
		echo "</tr>";
	  }
	  echo "</table>";
	}
	
	else
	{
	  echo "Tabella vuota<br>";
	}
	if(mysqli_affected_rows($conn)>0)
		echo "<br /><button onclick='window.location.href=\"./index.php\";'>Conferma ordine</button>";
	mysqli_close($conn);
?>
</html>
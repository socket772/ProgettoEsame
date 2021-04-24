<html>
<style><?php include '../stili/style.css'; ?></style>
<?php
	
	$username = $_POST["usr"];
	$password = $_POST["psw"];
	
	// Create connection
	$conn = mysqli_connect("localhost", "root", "", "Inventario");
	// Check connection
	if (!$conn)
	{
	  die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "SELECT * FROM Temp";
	
	$result = mysqli_query($conn, $sql);
	
	

	if (mysqli_num_rows($result) > 0)
	{
	  // output data of each row
	  //$row["dato"]
	  echo "<pre><table class='blueTable'>";
	  echo "<tr>";
	  echo "<th>Quantita</th> <th>Codice oggetto</th> <th>Descrizione</th> <th>Prezzo totale</th> <th>Fornitore</th> <th>Data</th>";
	  echo "</tr>";
	  while($row = mysqli_fetch_assoc($result))
	  {
		echo "<tr>";
		echo "<td>".$row["quantita"]."</td>";
		echo "<td>".$row["codiceOgetto"]."</td>";
		echo "<td>".$row["descrizione"]."</td>";
		echo "<td>".$row["prezzoTot"]."</td>";
		echo "<td>".$row["codiceFornitore"]."</td>";
		echo "<td>".$row["data"]."</td>";
		echo "</tr>";
	  }
	  echo "</table></pre>";
	}
	
	else
	{
	  echo "0 results";
	}

	mysqli_close($conn);
?>
</html>
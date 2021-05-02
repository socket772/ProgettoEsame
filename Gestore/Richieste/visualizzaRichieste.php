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
	
	$sql = "SELECT * FROM Richieste";
	
	$result = mysqli_query($conn, $sql);
	
	

	if (mysqli_num_rows($result) > 0)
	{
	  // output data of each row
	  //$row["dato"]
	  echo "<pre><table class='blueTable'>";
	  echo "<tr>";
	  echo "<th>Nome ufficio</th> <th>Codice oggetto</th> <th>Descrizione oggetto</th> <th>Data</th>";
	  echo "</tr>";
	  while($row = mysqli_fetch_assoc($result))
	  {
		echo "<tr>";
		echo "<td>".$row["codice"]."</td>";
		echo "<td>".$row["nomeUfficio"]."</td>";
		echo "<td>".$row["codiceOggetto"]."</td>";
		echo "<td>".$row["descrizioneOgetto"]."</td>";
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
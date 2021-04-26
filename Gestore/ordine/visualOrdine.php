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


	$sql = "SELECT * FROM Ordini";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)==0)
	{
		echo "Tabella vuota";
		exit();
	}

    echo "<form action='./uptOrdine.php'><table class='blueTable'>";
	echo "<tr><th>Quantita</th> <th>Codice oggetto</th> <th>Descrizione</th> <th>Prezzo Totale</th> <th>Codice fornitore</th> <th>Data</th></tr>";

	$conta = 0;

	while($row = mysqli_fetch_assoc($result));
    {
		$conta = $conta+1;

		echo $conta;

		echo "<tr>";
		echo "<td><input type='text' name='quantita".$conta."' value='".$row['quantita']."'></td>";
		
		echo "<td>".$row['codiceOggetto']."</td>";
		echo "<td>".$row['descrizione']."</td>";
		echo "<td>".$row['prezzoTot']."</td>";
		echo "<td>".$row['codiceFornitore']."</td>";
		echo "<td>".$row['data']."</td>";
        echo "</tr>";
    }
		echo "</table>";

		echo"<br><br>";
		echo "<input type='submit' class='alto'>";
		echo"<br><br>";
		echo "<input type='reset' class='alto'>";
		echo "</form>";

	mysqli_close($conn);
?>
</html>

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
		echo "<h1>La tabella e vuota</h1>";
		exit();
	}

    echo "<pre><table class='blueTable'><form action='./modificaExec.php'>";
	echo "<th>Riga</th><th>Dati inseriti</th>";
	echo "<input type='hidden' id='code' name='code' value='".$code."'>";

	while($row = mysqli_fetch_assoc($result));
    {

		echo "<tr>";
		echo "<td><label for='quantita'>Quantita Ordinata: int (4)</label></td>";
		echo "<td><input type='text'id='quantita'name='quantita' value='".$row["quantita"]."'></td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='codiceOgetto'>Codice dell'oggetto: varchar (22)</label></td>";
		echo "<td>".$row["codiceOgetto"]."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='descrizione'>Descrizione oggetto: text</label></td>";
		echo "<td>".$row["descrizione"]."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='prezzoTot'>Prezzo totale: decimal (8,2)</label></td>";
		echo "<td>".$row["prezzoTot"]."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='codiceFornitore'>Codice fornitore: varchar (16)</label></td>";
		echo "<td>".$row["codiceFornitore"]."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='data'>Data: date</label></td>";
		echo "<td>".$row["data"]."</td>";
		echo "</tr>";
        echo "</select></td>";
    }
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

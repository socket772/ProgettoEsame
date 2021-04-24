<html>
	<body>
<style><?php include '../stili/style.css'; ?></style>
<?php
	

	// Create connection
	$conn = mysqli_connect("localhost", "root", "", "Inventario");
	// Check connection
	if (!$conn)
	{
	  die("Connection failed: " . mysqli_connect_error());
	}

	$sqlTruncate = "TRUNCATE TABLE Ordini";
	$resultTruncate = mysqli_query($conn, $sqlTruncate);

	$sqlInventario = "SELECT * FROM Inventario WHERE (scorta+ordine)<scortaMinima";
	$resultInventario = mysqli_query($conn, $sqlInventario);
	
//	$sqlOrdine = "SELECT codiceOggetto FROM Ordini";
//	$resultOrdine = mysqli_query($conn, $sqlOrdine);
	
	while($row = mysqli_fetch_assoc($resultInventario))
	{
//		$quantitaRichiesta = $row['scortaMinima']-$row['scorta']+$row['ordine']+0;
//		$prezzo = $quantitaRichiesta*$row['prezzoUnitario'];
		$sql = "INSERT INTO Ordini (quantita, codiceOggetto, descrizione, prezzoTot, codiceFornitore, data) VALUES ('".$quantitaRichiesta."', '".$row['codice']."', '".$row['descrizione']."', '".$prezzo."', '".$row['codiceFornitore']."')";
		$result = mysqli_query($conn, $sql);

		if(mysqli_fetch_assoc($result)>0)
		{
			echo "Riga generata<br><br>";
		}
		else
		{
			echo "Generazione fallita<br><br>";
		}
	}
	
	
	if(mysqli_fetch_assoc($result)>0)
	{
		echo "Tabella generata<br><br>";
	}
	else
	{
		echo "Generazione fallita<br><br>";
	}
	


	mysqli_close($conn);
?>
		
		<button onclick='window.location.href="../visualizza/visualizzaInventario.php";'>Visualizza inventario</button>
	</body>
</html>

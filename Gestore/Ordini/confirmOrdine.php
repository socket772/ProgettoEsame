<html>
<body>
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

	$sqlGET = "SELECT * FROM Ordini";
	$resultGET = mysqli_query($conn, $sqlGET);
	while($row = mysqli_fetch_assoc($resultGET))
	  {
		$quantita = $row["quantita"];
		$codiceOggetto = $row["codiceOggetto"];
		$desc = $row["descrizione"];
		$prezzoTot = $row["prezzoTot"];
		$codiceFornitore = $row["codiceFornitore"];
		$data = date("Y/m/d");
		

		//Inserimento nello storico
		$sqlMove = "INSERT INTO StoricoOrdini(quantita, codiceOggetto, descrizione, prezzoTot, codiceFornitore, data) VALUES ('".$quantita."', '".$codiceOggetto."', '".$desc."', '".$prezzoTot."', '".$codiceFornitore."', '".$data."')"; //Query di inserimento
		$resultMove = mysqli_query($conn, $sqlMove);
		if(mysqli_affected_rows($conn)>0)
		{
			echo "Inserimento di ".$codiceOggetto." riuscito<br>";
		}
		else
		{
			echo "Inserimento di ".$codiceOggetto." fallito<br>";
		}
		
		//Aggionamento inventario
		$sqlUpdate = "UPDATE Inventario SET ordine='".$quantita."' WHERE codice='".$codiceOggetto."'";
		$resultUpdate= mysqli_query($conn, $sqlUpdate);
		if(mysqli_affected_rows($conn)>0)
		{
			echo "Aggiornamento di ".$codiceOggetto." riuscito<br><br>";
		}
		else
		{
			echo "Aggiornamento di ".$codiceOggetto." fallito<br><br>";
		}
	  }

	$sqlReset = "TRUNCATE Ordini";
	$resultReset = mysqli_query($conn, $sqlReset);
	
	echo "Dati aggiornati<br><br>";

	mysqli_close($conn);
?>
		<button onclick='window.location.href="./index.php";'>Visualizza ordini</button>
	</body>
</html>
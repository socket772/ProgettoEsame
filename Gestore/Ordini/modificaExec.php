<html>
<body>
<style><?php include '../stili/css/bootstrap-italia.min.css'; ?></style>
<?php
	
	include '../libs.php';
	$code = remove_injections($_GET["code"]);
	$quantita = remove_injections($_GET["quantita"]);
	
	// Create connection
	$conn = mysqli_connect("localhost", "root", "", "Inventario");
	// Check connection
	if (!$conn)
	{
	  die("Connection failed: " . mysqli_connect_error());
	}

	$sqlPrezzo = "SELECT * FROM Inventario WHERE codice='".$code."'"; //Richiesta del prezzo unitario per aggiornare quello totale
	$resultPrezzo = mysqli_query($conn, $sqlPrezzo);
	$row = mysqli_fetch_assoc($resultPrezzo);
	$prezzoTot = $quantita*$row["prezzoUnitario"]; // Ricalcolo prezzo totale


	$sqlFinal = "UPDATE Ordini SET quantita='".$quantita."', prezzoTot='".$prezzoTot."' WHERE codiceOggetto='".$code."'"; //Query di aggiornamento
	$resultFinal = mysqli_query($conn, $sqlFinal);
	
	echo "Tabella aggiornata<br><br>";

	mysqli_close($conn);
?>
		<button class="btn btn-primary" onclick='window.location.href="./visualizzaOrdini.php";'>Visualizza ordini</button>
		<script src="../stili/js/bootstrap-italia.bundle.min.js"></script>
	</body>
</html>
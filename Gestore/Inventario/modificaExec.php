<html>
<body>
<style><?php include '../stili/style.css'; ?></style>
<?php
	

	$code = $_GET["code"];
	$descrizione = $_GET["descrizione"];
	$pezziPerUnita = $_GET["pezziPerUnita"];
	$scorta = $_GET["scorta"];
	$scortaMinima = $_GET["scortaMinima"];
	$tipo = $_GET["tipo"];
	$prezzoUnitario = $_GET["prezzoUnitario"];
	$ordine = $_GET["ordine"];
	$consumoAnnuo = $_GET["consumoAnnuo"];
	$codiceFornitore = $_GET["codiceFornitore"];
	
	// Create connection
	$conn = mysqli_connect("localhost", "root", "", "Inventario");
	// Check connection
	if (!$conn)
	{
	  die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "UPDATE Inventario SET descrizione='".$descrizione."', pezziPerUnita='".$pezziPerUnita."', scorta='".$scorta."', scortaMinima='".$scortaMinima."', tipo='".$tipo."', prezzoUnitario='".$prezzoUnitario."', ordine='".$ordine."', consumoAnnuo='".$consumoAnnuo."', codiceFornitore='".$codiceFornitore."' WHERE codice='".$code."'";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_fetch_assoc($result)>0)
	{
		echo "Tabella aggiornata<br><br>";
	}
	else
	{
		echo "Aggiornamento fallita<br><br>";
	}

	mysqli_close($conn);
?>
		<button onclick='window.location.href="../visualizza/visualizzaInventario.php";'>Visualizza inventario</button>
	</body>
</html>
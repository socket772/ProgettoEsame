<html>
<body>
<style><?php include '../stili/style.css'; ?></style>
<?php

	include '../libs.php';

	$code = remove_injections($_GET["code"]);
	$descrizione = remove_injections($_GET["descrizione"]);
	$pezziPerUnita = remove_injections($_GET["pezziPerUnita"]);
	$scorta = remove_injections($_GET["scorta"]);
	$scortaMinima = remove_injections($_GET["scortaMinima"]);
	$tipo = remove_injections($_GET["tipo"]);
	$prezzoUnitario = remove_injections($_GET["prezzoUnitario"]);
	$ordine = remove_injections($_GET["ordine"]);
	$consumoAnnuo = remove_injections($_GET["consumoAnnuo"]);
	$codiceFornitore = remove_injections($_GET["codiceFornitore"]);
	
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
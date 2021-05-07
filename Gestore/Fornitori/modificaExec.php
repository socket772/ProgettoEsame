<html>
<body>
<style><?php include 'Gestore/stili/css/bootstrap-italia.min.css'; ?></style>
<?php
	
	include '../libs.php';

	$code = remove_injections($_GET["code"]);
	$nome = remove_injections($_GET["nome"]);
	$mail = remove_injections($_GET["mail"]);
	$impegnoDiSpesa = remove_injections($_GET["impegnoDiSpesa"]);
	$determina = remove_injections($_GET["determina"]);
	$dataDetermina = remove_injections($_GET["dataDetermina"]);
	$cig = remove_injections($_GET["cig"]);
	
	// Create connection
	$conn = mysqli_connect("localhost", "root", "", "Inventario");
	// Check connection
	if (!$conn)
	{
	  die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "UPDATE Fornitori SET nome='".$nome."', mail='".$mail."', impegnoDiSpesa='".$impegnoDiSpesa."', determina='".$determina."', dataDetermina='".$dataDetermina."', cig='".$cig."' WHERE codice='".$code."'";
	
	$result = mysqli_query($conn, $sql);
	
	echo "Dati aggiornati<br><br>";

	mysqli_close($conn);
?>
		<button onclick='window.location.href="./visualizzaFornitori.php";'>Visualizza fornitori</button>
	</body>
</html>
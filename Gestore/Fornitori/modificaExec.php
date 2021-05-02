<html>
<body>
<style><?php include '../stili/style.css'; ?></style>
<?php
	

	$code = $_GET["code"];
	$nome = $_GET["nome"];
	$mail = $_GET["mail"];
	$impegnoDiSpesa = $_GET["impegnoDiSpesa"];
	$determina = $_GET["determina"];
	$dataDetermina = $_GET["dataDetermina"];
	$cig = $_GET["cig"];
	
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
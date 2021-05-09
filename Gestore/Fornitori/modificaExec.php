<html>
	<style><?php include '../stili/css/bootstrap-italia.min.css'; ?></style>
	
	<body>
	<?php
		
		include '../libs.php';

		$code = remove_injections($_POST["code"]);
		$nome = remove_injections($_POST["nome"]);
		$mail = remove_injections($_POST["mail"]);
		$impegnoDiSpesa = remove_injections($_POST["impegnoDiSpesa"]);
		$determina = remove_injections($_POST["determina"]);
		$dataDetermina = remove_injections($_POST["dataDetermina"]);
		$cig = remove_injections($_POST["cig"]);
		
		// Create connection
		$conn = mysqli_connect("localhost", "root", "", "Inventario");
		// Check connection
		if (!$conn)
		{
		die("Connection failed: " . mysqli_connect_error());
		}
		
		$sql = "UPDATE Fornitori SET nome='".$nome."', mail='".$mail."', impegnoDiSpesa='".$impegnoDiSpesa."', determina='".$determina."', dataDetermina='".$dataDetermina."', cig='".$cig."' WHERE codice='".$code."'";
		
		$result = mysqli_query($conn, $sql);
		
		echo "Dati aggiornati correttamente<br><br>";

		mysqli_close($conn);
	?>
		<button class="btn btn-primary" onclick='window.location.href="./visualizzaFornitori.php";'>Visualizza fornitori</button>
		<script src="../stili/js/bootstrap-italia.bundle.min.js"></script>
	</body>
	
</html>
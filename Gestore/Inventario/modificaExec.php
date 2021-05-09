<html>
<style><?php include '../stili/css/bootstrap-italia.min.css'; ?></style>
	<body>
		<?php

			include '../libs.php';

			$code = remove_injections($_POST["code"]);
			$descrizione = remove_injections($_POST["descrizione"]);
			$pezziPerUnita = remove_injections($_POST["pezziPerUnita"]);
			$scorta = remove_injections($_POST["scorta"]);
			$scortaMinima = remove_injections($_POST["scortaMinima"]);
			$tipo = remove_injections($_POST["tipo"]);
			$prezzoUnitario = remove_injections($_POST["prezzoUnitario"]);
			$ordine = remove_injections($_POST["ordine"]);
			$consumoAnnuo = remove_injections($_POST["consumoAnnuo"]);
			$codiceFornitore = remove_injections($_POST["codiceFornitore"]);
			
			// Create connection
			$conn = mysqli_connect("localhost", "root", "", "Inventario");
			// Check connection
			if (!$conn)
			{
			die("Connection failed: " . mysqli_connect_error());
			}
			
			$sql = "UPDATE Inventario SET descrizione='".$descrizione."', pezziPerUnita='".$pezziPerUnita."', scorta='".$scorta."', scortaMinima='".$scortaMinima."', tipo='".$tipo."', prezzoUnitario='".$prezzoUnitario."', ordine='".$ordine."', consumoAnnuo='".$consumoAnnuo."', codiceFornitore='".$codiceFornitore."' WHERE codice='".$code."'";
			
			$result = mysqli_query($conn, $sql);
		
			echo "Tabella aggiornata<br><br>";

			mysqli_close($conn);
		?>
				<button class="btn btn-primary" onclick='window.location.href="./visualizzaInventario.php";'>Visualizza inventario</button>
				<script src="../stili/js/bootstrap-italia.bundle.min.js"></script>
	</body>
</html>
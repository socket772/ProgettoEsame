<html>
	<style><?php include '../stili/css/bootstrap-italia.min.css'; ?></style>	
	<body>
		<?php
			
			include '../libs.php';
			// Create connection
			$conn = mysqli_connect("localhost", "root", "", "Inventario");
			// Check connection
			if (!$conn)
			{
			die("Connection failed: " . mysqli_connect_error());
			}
			
			$sql = "SELECT * FROM StoricoOrdini ORDER BY numOrdine DESC";
			
			$result = mysqli_query($conn, $sql);
			
			

			if (mysqli_num_rows($result) > 0)
			{
			// output data of each row
			//$row["dato"]
			echo "<table class='table'>";
			echo "<tr>";
			echo "<th>Numero ordine</th> <th>Quantita</th> <th>Codice oggetto</th> <th>Descrizione</th> <th>Prezzo totale</th> <th>Codice fornitore</th> <th>Data ordine</th>";
			echo "</tr>";
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td>".$row["numOrdine"]."</td>";
				echo "<td>".$row["quantita"]."</td>";
				echo "<td>".$row["codiceOggetto"]."</td>";
				echo "<td>".$row["descrizione"]."</td>";
				echo "<td>".$row["prezzoTot"]."</td>";
				echo "<td>".$row["codiceFornitore"]."</td>";
				echo "<td>".$row["data"]."</td>";
				echo "</tr>";
			}
			echo "</table>";
			}
			
			else
			{
			echo "Tabella vuota<br>";
			}
			mysqli_close($conn);
		?>
		<a href="./index.php"><svg class="icon icon-sm icon-primary mr-2"><use xlink:href="../stili/svg/sprite.svg#it-arrow-left"></use></svg> Torna indietro</a>
		<script src="../stili/js/bootstrap-italia.bundle.min.js"></script>
	</body>
</html>
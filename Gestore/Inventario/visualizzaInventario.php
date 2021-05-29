<html>
	<style><?php include '../stili/css/bootstrap-italia.min.css'; ?></style>	
	<body>
		<div class="it-header-slim-wrapper">
            <div class="container">
                <div class="row">
                <div class="col-12">
                    <div class="it-header-slim-wrapper-content">
                    <a class="d-none d-lg-block navbar-brand" href="../"><img src="../stili/assets/stemma.png"> Menu Principale</a>
                    <div class="nav-mobile">
                        <nav>
                        <a class="it-opener d-lg-none" data-toggle="collapse" href="../" role="button" aria-expanded="false" aria-controls="menu1">
                            <span>Menu principale</span>
                            <svg class="icon">
                            <use xlink:href="../stili/svg/sprite.svg#it-expand"></use>
                            </svg>
                        </a>
                        <div class="link-list-wrapper collapse" id="menu1">
                            <ul class="link-list">
                            <li><a class="list-item" href="#"></a></li>
                            <li><a class="list-item active" href="../Inventario">Inventario</a></li>
                            <li><a class="list-item active" href="../Fornitori">Fornitori</a></li>
                            <li><a class="list-item active" href="../Ordini">Ordini</a></li>
                            <li><a class="list-item" href="#"></a></li>
                            </ul>
                        </div>
                        </nav>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
		<?php
			
			include '../libs.php';
			// Create connection
			$conn = mysqli_database("Inventario");
			$sql = "SELECT * FROM Oggetti";
			$result = mysqli_query($conn, $sql); // esecuzione query

			if (mysqli_num_rows($result) > 0)
			{
			// output data of each row
			//$row["dato"]
			echo "<table class='table table-striped table-hover table-bordered'>";
			echo "<tr>";
			echo "<thead class='thead-dark'><th>Codice</th> <th>Descrizione</th> <th>Pezzi per unita</th> <th>Scorta</th> <th>Scorta minima</th> <th>Tipo</th> <th>Prezzo unitario</th> <th>Ordine</th> <th>Consumo Annuo</th> <th>Codice fornitore</th></thead>";
			echo "</tr>";
			while($row = mysqli_fetch_assoc($result)) //output dati nel DB
			{
				echo "<tr>";
				echo "<td>".$row["codice"]."</td>";
				echo "<td>".$row["descrizione"]."</td>";
				echo "<td>".$row["pezziPerUnita"]."</td>";
				echo "<td>".$row["scorta"]."</td>";
				echo "<td>".$row["scortaMinima"]."</td>";
				echo "<td>".$row["tipo"]."</td>";
				echo "<td>".$row["prezzoUnitario"]."</td>";
				echo "<td>".$row["ordine"]."</td>";
				echo "<td>".$row["consumoAnnuo"]."</td>";
				echo "<td>".$row["codiceFornitore"]."</td>";
				echo "</tr>";
			}
			echo "</table>";
			}
			
			else
			{
			echo "La tabella e vuota";
			}

			mysqli_close($conn);
		?>
		<a href="./index.php"><svg class="icon icon-sm icon-primary mr-2"><use xlink:href="../stili/svg/sprite.svg#it-arrow-left"></use></svg> Torna indietro</a>
		<script src="../stili/js/bootstrap-italia.bundle.min.js"></script>
	</body>
</html>
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
			  
			$code= remove_injections($_GET['code']);
			$option= remove_injections($_GET['option']);
			

			if($option == "add") //opzione di aggiunta fornitore
			{
				$sql = "INSERT INTO Fornitori(codice) VALUES('".$code."')";
				$result = mysqli_query($conn, $sql);
			}


			//recupero dati fornitore
			$sql = "SELECT * FROM Fornitori WHERE codice='" .$code. "'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result); // generazione form per la modifica dei dati

			if($row==null)
			{
				echo "<h2 class='display-2'>Il codice inserito non e valido (elemento mancante)</h2>";
				exit();
			}

			echo "<table class='table'><form action='./modificaExec.php' method='POST'>";
			echo "<thead class='thead-dark'><th>Riga</th><th>Dati inseriti</th></thead>";
			echo "<input type='hidden' id='code' name='code' value='".$code."'>";

			echo "<tr>";
			echo "<td>Codice</td>";
			echo "<td>".$row["codice"]."</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td><label for='nome'>Nome fornitore: text (32)</label></td>";
			echo "<td><input type='text' id='nome'name='nome' class='form-control' value='".$row["nome"]."'></td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td><label for='mail'>Mail fornitore: text (64)</label></td>";
			echo "<td><input type='text' id='mail' name='mail' class='form-control' value='".$row["mail"]."'></td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td><label for='impegnoDiSpesa'>Impegno di spesa: decimal (8 cifre tot, 2 dopo punto)</label></td>";
			echo "<td><input type='text' id='impegnoDiSpesa' name='impegnoDiSpesa' class='form-control' value='".$row["impegnoDiSpesa"]."'></td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td><label for='determina'>Determina fornitore: int (4)</label></td>";
			echo "<td><input type='text' id='determina' name='determina' class='form-control' value='".$row["determina"]."'></td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td><label for='dataDetermina'>Data determina fornitore: date</label></td>";
			echo "<td><input type='date' id='dataDetermina' name='dataDetermina' class='form-control' value='".$row["dataDetermina"]."'></td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td><label for='cig'>CIG fornitore: text (32)</label></td>";
			echo "<td><input type='text' id='cig' name='cig' class='form-control' value='".$row["cig"]."'></td>";
			echo "</tr>";

			echo "</select></td>";
			echo "</tr></table>";

			echo"<br>";
			echo "<input type='submit' class='btn btn-outline-secondary'><br><br>"; // passaggio alla prossima fase
			echo "<input type='reset' class='btn btn-outline-secondary'><br><br>";
			echo "</form>";

			mysqli_close($conn);
		?>
		<a href="./" class="go-back"><svg class="icon icon-sm icon-primary mr-2"><use xlink:href="../stili/svg/sprite.svg#it-arrow-left"></use></svg> Torna indietro</a>
		<script src="../stili/js/bootstrap-italia.bundle.min.js"></script>
	</body>
</html>
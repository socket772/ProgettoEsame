<html>
	<style><?php include '../stili/css/bootstrap-italia.min.css'; ?></style>
	<body>
		<div class="it-header-slim-wrapper">
            <div class="container">
                <div class="row">
                <div class="col-12">
                    <div class="it-header-slim-wrapper-content">
                    <a class="d-none d-lg-block navbar-brand" href="../">Menu Principale</a>
                    <div class="nav-mobile">
                        <nav>
                        <a class="it-opener d-lg-none" data-toggle="collapse" href="../" role="button" aria-expanded="false" aria-controls="menu1">
                            <span>Menu principale</span>
                            <svg class="icon">
                            <use xlink:href="/bootstrap-italia/dist/svg/sprite.svg#it-expand"></use>
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
			$conn = mysqli_connect("localhost", "root", "", "Inventario");
			// Check connection
			if (!$conn)
			{
			die("Connection failed: " . mysqli_connect_error());
			}

			$code= remove_injections($_GET['code']);
			$option= remove_injections($_GET['option']);

			if($option == "add")
			{
				$sql = "INSERT INTO Inventario(codice) VALUES('".$code."')";
				$result = mysqli_query($conn, $sql);
			}


			$sql = "SELECT * FROM Inventario WHERE codice='".$code."'";
			$result = mysqli_query($conn, $sql);
			
			if(mysqli_num_rows($result)==0)
			{
				echo "<h1>Il codice inserito non è valido (elemento mancante)</h1>";
				exit();
			}

			$row = mysqli_fetch_assoc($result);
				echo "<table class='table'><form action='./modificaExec.php' method='POST'>";
				echo "<thead class='thead-dark'><th>Riga</th><th>Dati inseriti</th></thead>";
				echo "<input type='hidden' id='code' name='code' value='".$code."'>";

				echo "<tr>";
				echo "<td>Codice</td>";
				echo "<td>".$row["codice"]."</td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td><label for='descrizione'>Descrizione prodotto: text</label></td>";
				echo "<td><textarea  cols='50' rows='2' name='descrizione'>".$row['descrizione']."</textarea></td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td><label for='pezziPerUnita'>Pezzi per unità: int (3)</label></td>";
				echo "<td><input type='text'id='pezziPerUnita'name='pezziPerUnita' value='".$row["pezziPerUnita"]."'></td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td><label for='scorta'>Scorta prodotto: int (3)</label></td>";
				echo "<td><input type='text'id='scorta'name='scorta' value='".$row["scorta"]."'></td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td><label for='scortaMinima'>Scorta minima prodotto: int (3)</label></td>";
				echo "<td><input type='text'id='scortaMinima'name='scortaMinima' value='".$row["scortaMinima"]."'></td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td><label for='tipo'>Tipo prodotto: char (3)</label></td>";
				echo "<td><input type='text'id='tipo'name='tipo' value='".$row["tipo"]."'></td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td><label for='prezzoUnitario'>Prezzo unitario prodotto: decimal(8 cifre tot, 2 dopo punto)</label></td>";
				echo "<td><input type='text'id='prezzoUnitario'name='prezzoUnitario' value='".$row["prezzoUnitario"]."'></td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td><label for='ordine'>Ordine prodotto: int (3)</label></td>";
				echo "<td><input type='text'id='ordine'name='ordine' value='".$row["ordine"]."'></td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td><label for='consumoAnnuo'>Consumo annuo prodotto: int (3)</label></td>";
				echo "<td><input type='text'id='consumoAnnuo'name='consumoAnnuo' value='".$row["consumoAnnuo"]."'></td>";
				echo "</tr>";


				$sqlFornitore = "SELECT codice FROM Fornitori ORDER BY codice";
				$resultFornitore = mysqli_query($conn, $sqlFornitore);
				echo "<tr>";
				echo "<td><label for='codiceFornitore'>Codice fornitore prodotto: </label></td>";
				echo "<td><div class='bootstrap-select-wrapper'>";
				echo "<select title='Scegli una opzione' data-live-search='true' data-live-search-placeholder='Cerca codice' name='codiceFornitore' id='codiceFornitore'>";
				echo "<option value='".$row["codiceFornitore"]."' selected>".$row["codiceFornitore"]."</options>";
				while($tmp = mysqli_fetch_assoc($resultFornitore))
				{
					if($row["codiceFornitore"]!=$tmp["codice"])
						echo "<option value='".$tmp["codice"]."'>".$tmp["codice"]."</options>";
				}
				echo "</select></div></td>";
				echo "</tr></table>";

				echo"<br><br>";
				echo "<input type='submit' class='btn btn-outline-secondary'><br><br>";
				echo "<input type='reset' class='btn btn-outline-secondary'><br><br>";
				echo "</form>";

			mysqli_close($conn);
		?>
		<a href="./" class="go-back"><svg class="icon icon-sm icon-primary mr-2"><use xlink:href="../stili/svg/sprite.svg#it-arrow-left"></use></svg> Torna indietro</a>
		<script src="../stili/js/bootstrap-italia.bundle.min.js"></script>
	</body>
</html>
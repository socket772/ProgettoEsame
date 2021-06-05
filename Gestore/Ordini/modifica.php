<?php
    include '../libs.php';

	if (session_status() !== PHP_SESSION_ACTIVE)
    {
        session_start();
    }

    if(isset($_COOKIE["remember"]))
    {
        setcookie(session_name(), $_COOKIE["PHPSESSID"],TimeLeft(true), "/");
    }

    $usr = $_COOKIE["username"];

    $conn = mysqli_database("Utenti");
    $sql = "SELECT username, password FROM Utenti WHERE username='$usr'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);

    if( ($_COOKIE['username'] != $row["username"]) || !(password_verify(md5($_COOKIE["password"]), $row["password"])))
	{
        mysqli_close($conn);
    	header("Location: ../");
	}

    mysqli_close($conn);
?>
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

		// Create connection
		$conn = mysqli_database("Inventario");

		//recupero codice
		$code= remove_injections($_GET['code']);
		$option= $_GET['option'];

		if($option == "add") //aggiunta oggetto nell'inventario
		{

			$sqlInventario = "SELECT * FROM Oggetti WHERE codice='".$code."'";
			$resultInventario = mysqli_query($conn, $sqlInventario);

			$row = mysqli_fetch_assoc($resultInventario);

			$sqlInsert = "INSERT INTO Ordini(quantita, codiceOggetto, prezzoTot) VALUES( '0', '".$code."', '0')";
			$resultInsert = mysqli_query($conn, $sqlInsert);
		}

		//recupero dati fornitore
		$sql = "SELECT quantita, codiceOggetto, descrizione, prezzoTot, codiceFornitore FROM Ordini, Oggetti WHERE codiceOggetto=codice AND codice='" .$code. "'";
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result)==0)
		{
			echo "<h1>Il codice inserito non è valido (elemento mancante)</h1>";
		}

		$row = mysqli_fetch_assoc($result); // generazione form per la modifica dei dati
			echo "<table class='table table-striped table-hover table-bordered'><form action='./modificaExec.php' method='POST'>";
			echo "<thead class='thead-dark'><th >Riga</th><th >Dati inseriti</th></thead>";
			echo "<input type='hidden' id='code' name='code' value='".$code."'>";

			echo "<tr>";
			echo "<td>Codice</td>";
			echo "<td>".$row["codiceOggetto"]."</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td><label for='quantita'>Quantita oggetto: text (32)</label></td>";
			echo "<td><input type='text'id='quantita'name='quantita' value='".$row["quantita"]."'></td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td>Descrizione</td>";
			echo "<td>".$row["descrizione"]."</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td>Prezzo Totale</td>";
			echo "<td>".$row["prezzoTot"]."</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td>Codice fornitore</td>";
			echo "<td>".$row["codiceFornitore"]."</td>";
			echo "</tr>";

			echo "</table>";

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
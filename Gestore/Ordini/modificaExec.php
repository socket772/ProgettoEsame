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
			$conn = mysqli_database();

            //recupero dati
			$code = remove_injections($_GET["code"]);
			$quantita = remove_injections($_GET["quantita"]);
			
			

			$sqlPrezzo = "SELECT * FROM Inventario WHERE codice='".$code."'"; //Richiesta del prezzo unitario per aggiornare quello totale
			$resultPrezzo = mysqli_query($conn, $sqlPrezzo);
			$row = mysqli_fetch_assoc($resultPrezzo);
			$prezzoTot = $quantita*$row["prezzoUnitario"]; // Ricalcolo prezzo totale


			$sqlFinal = "UPDATE Ordini SET quantita='".$quantita."', prezzoTot='".$prezzoTot."' WHERE codiceOggetto='".$code."'"; //Query di aggiornamento
			$resultFinal = mysqli_query($conn, $sqlFinal);
			
			echo "Tabella aggiornata<br><br>";

			mysqli_close($conn);
		?>
		<button class="btn btn-primary" onclick='window.location.href="./visualizzaOrdini.php";'>Visualizza ordini</button>
		<script src="../stili/js/bootstrap-italia.bundle.min.js"></script>
	</body>
</html>
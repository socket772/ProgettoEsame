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
            
            //recupero dati
			$code = $_POST["code"];
			$descrizione = remove_injections($_POST["descrizione"]);
			$pezziPerUnita = remove_injections($_POST["pezziPerUnita"]);
			$scorta = remove_injections($_POST["scorta"]);
			$scortaMinima = remove_injections($_POST["scortaMinima"]);
			$tipo = remove_injections($_POST["tipo"]);
			$prezzoUnitario = remove_injections($_POST["prezzoUnitario"]);
			$ordine = remove_injections($_POST["ordine"]);
			$consumoAnnuo = remove_injections($_POST["consumoAnnuo"]);
			$codiceFornitore = $_POST["codiceFornitore"];
			
			// Create connection
			$conn = mysqli_database("Inventario");
			
			$sql = "UPDATE Oggetti SET descrizione='".$descrizione."', pezziPerUnita='".$pezziPerUnita."', scorta='".$scorta."', scortaMinima='".$scortaMinima."', tipo='".$tipo."', prezzoUnitario='".$prezzoUnitario."', ordine='".$ordine."', consumoAnnuo='".$consumoAnnuo."' WHERE codice='".$code."'";
            
            //, codiceFornitore='".$codiceFornitore."'
            
            if(mysqli_query($conn, $sql)) //esecuzione update
			    echo "Dati aggiornati correttamente<br><br>";
            else
                echo "Aggiornamento fallito ". mysqli_error($conn) . "<br><br>";
			mysqli_close($conn);
		?>
			<button class="btn btn-primary" onclick='window.location.href="./visualizzaInventario.php";'>Visualizza inventario</button>
			<script src="../stili/js/bootstrap-italia.bundle.min.js"></script>
	</body>
</html>
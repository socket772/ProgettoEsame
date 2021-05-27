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
			$conn = mysqli_database();

			$sqlGET = "SELECT * FROM Ordini";
			$resultGET = mysqli_query($conn, $sqlGET);
			while($row = mysqli_fetch_assoc($resultGET))
			{
				$quantita = $row["quantita"];
				$codiceOggetto = $row["codiceOggetto"];
				$prezzoTot = $row["prezzoTot"];
				$data = date("Y/m/d");
				

				//Inserimento nello storico
				$sqlMove = "INSERT INTO StoricoOrdini(quantita, codiceOggetto, prezzoTot, data) VALUES ('".$quantita."', '".$codiceOggetto."', '".$prezzoTot."', '".$data."')"; //Query di inserimento
				$resultMove = mysqli_query($conn, $sqlMove);
				if(mysqli_affected_rows($conn)>0)
				{
				//	echo "Inserimento di ".$codiceOggetto." riuscito<br>";
				}
				else
				{
				//	echo "Inserimento di ".$codiceOggetto." fallito<br>";
				}
				
				//Aggionamento inventario
				$sqlUpdate = "UPDATE Oggetti SET ordine='".$quantita."' WHERE codice='".$codiceOggetto."'";
				$resultUpdate= mysqli_query($conn, $sqlUpdate);
				if(mysqli_affected_rows($conn)>0)
				{
				//	echo "Aggiornamento di ".$codiceOggetto." riuscito<br><br>";
				}
				else
				{
				//	echo "Aggiornamento di ".$codiceOggetto." fallito<br><br>";
				}
			}

			$sqlReset = "TRUNCATE Ordini";
			$resultReset = mysqli_query($conn, $sqlReset);
			
			echo "Dati aggiornati<br><br>";

			mysqli_close($conn);
		?>
        <button class="btn btn-primary" onclick="window.location.href='./visualizzaStoricoOrdini.php';">Visualizza lo storico ordini</button>
	</body>
</html>
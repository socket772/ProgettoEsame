<?php
			
	include '../libs.php';
	// Create connection
	$conn = mysqli_database();

	$sqlTruncate = "TRUNCATE TABLE Ordini";
	$resultTruncate = mysqli_query($conn, $sqlTruncate);

	$sqlInventario = "SELECT * FROM Inventario WHERE (scorta+ordine)<scortaMinima";
	$resultInventario = mysqli_query($conn, $sqlInventario);
	
//	$sqlOrdine = "SELECT codiceOggetto FROM Ordini"; UPDATE Inventario SET ordine=0;
//	$resultOrdine = mysqli_query($conn, $sqlOrdine);
	
	while($row = mysqli_fetch_assoc($resultInventario))
	{
		$quantitaRichiesta = $row['scortaMinima']-$row['scorta']+$row['ordine']+0;
		$prezzo = $quantitaRichiesta*$row['prezzoUnitario'];
		$sql = "INSERT INTO Ordini (quantita, codiceOggetto, prezzoTot) VALUES ('".$quantitaRichiesta."', '".$row['codice']."', '".$prezzo."')";
		$result = mysqli_query($conn, $sql);
	}
	
	if(mysqli_affected_rows($conn)>0)
	{
		header("Location: ./visualizzaOrdini.php");
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
		
		<p>Nessun oggetto e' a livello critico</p><br>
		<br><br>
		<button class="btn btn-primary" onclick='window.location.href="./index.php";'>Menu ordini</button>
		<script src="../stili/js/bootstrap-italia.bundle.min.js"></script>
	</body>
</html>

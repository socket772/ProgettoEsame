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
        <div class=" container col-11">
            <h2 class="display-2">Genera l'ordine</h2>
            <br>
            <button class="btn btn-primary btn-block" onclick="window.location.href='./formAggiungi.php';">Aggiungi ordine</button>
            <br>
            <button class="btn btn-primary btn-block" onclick="window.location.href='./formModifica.php';">Modifica ordine</button>
            <br>
            <button class="btn btn-primary btn-block" onclick="window.location.href='./visualizzaOrdini.php';">Visualizza l'ordine</button>
            <br>
            <button class="btn btn-primary btn-block" onclick="window.location.href='./generateOrdine.php';">Rigenera ordine (cancellera la tabella pre esistente)</button>
            <br>
            <button class="btn btn-primary btn-block" onclick="window.location.href='./visualizzaOrdini.php?option=OK&';">Conferma l'ordine</button>
            <br>
            <button class="btn btn-primary btn-block" onclick="window.location.href='./visualizzaStoricoOrdini.php?option=OK&';">Visualizza storico ordini</button>
        </div>
    </body>
</html>
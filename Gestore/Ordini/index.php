<html>
    <style><?php include '../stili/css/bootstrap-italia.min.css'; ?></style>
    <body>
        <h1>Genera l'ordine</h1>
        <br><br>
        <button class="btn btn-primary" onclick="window.location.href='./formAggiungi.php';">Aggiungi ordine</button>
        <br><br>
        <button class="btn btn-primary" onclick="window.location.href='./formModifica.php';">Modifica ordine</button>
        <br><br>
        <button class="btn btn-primary" onclick="window.location.href='./visualizzaOrdini.php';">Visualizza l'ordine</button>
        <br><br>
        <button class="btn btn-primary" onclick="window.location.href='./generateOrdine.php';">Rigenera ordine (cancellera la tabella pre esistente)</button>
        <br><br>
        <button class="btn btn-primary" onclick="window.location.href='./visualizzaOrdini.php?option=OK&';">Conferma l'ordine</button>
        <br><br>
        <button class="btn btn-primary" onclick="window.location.href='./visualizzaStoricoOrdini.php?option=OK&';">Visualizza storico ordini</button>
    </body>
</html>
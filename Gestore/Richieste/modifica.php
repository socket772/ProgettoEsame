<html>
<style><?php include '../stili/style.css'; ?></style>
<?php

	
	// Create connection
	$conn = mysqli_connect("localhost", "root", "", "Inventario");
	// Check connection
	if (!$conn)
	{
	  die("Connection failed: " . mysqli_connect_error());
	}
	
	
	$code= $_GET['codice'];
	$codeItm= $_GET['codeProd'];
	$codeOff= $_GET['codeUff'];
	$data= $_GET['data'];
	$option= $_GET['option'];

	if($option == "add")
	{
		$sql = "INSERT INTO Richieste(codiceOggetto, codiceUfficio) VALUES('".$codeItm."', '".$codeOff."')";
		$result = mysqli_query($conn, $sql);
	}


	$sql = "SELECT * FROM Richieste WHERE codice='".$code."'";
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)==0)
	{
		echo "<h1>Il codice inserito non è valido (elemento mancante)</h1>";
		exit();
	}

	$row = mysqli_fetch_assoc($result);
		echo "<pre><table class='blueTable'><form action='./modificaExec.php'>";
		echo "<th>Righe</th><th>Dati inseriti</th>";
		echo "<input type='hidden' id='code' name='code' value='".$code."'>";


		$sqlUfficio = "SELECT nome FROM Uffici";
		$resultUfficio = mysqli_query($conn, $sqlUfficio);
		echo "<tr>";
		echo "<td><label for='codiceUfficio'>Nome ufficio prodotto: </label></td>";
		echo "<td><select name='codiceUfficio' id='codiceUfficio'>";
		echo "<option value='".$row["codiceUfficio"]."' selected>".$row["codiceUfficio"]."</options>";
		while($tmp = mysqli_fetch_assoc($resultUfficio))
		{
			if($row["codiceUfficio"]!=$tmp["nome"])
				echo "<option value='".$tmp["nome"]."'>".$tmp["nome"]."</options>";
		}


		$sqlOggetto = "SELECT codice FROM Inventario";
		$resultOggetto = mysqli_query($conn, $sqlOggetto);
		echo "<tr>";
		echo "<td><label for='codiceOggetto'>Codice oggetto prodotto: </label></td>";
		echo "<td><select name='codiceOggetto' id='codiceOggetto'>";
		echo "<option value='".$row["codiceOggetto"]."' selected>".$row["codiceOggetto"]."</options>";
		while($tmp = mysqli_fetch_assoc($resultOggetto))
		{
			if($row["codiceOggetto"]!=$tmp["codice"])
				echo "<option value='".$tmp["codice"]."'>".$tmp["codice"]."</options>";
		}


		echo "<tr>";
		echo "<td><label for='descrizione'>Descrizione prodotto: text</label></td>";
		echo "<td><textarea  cols='50' rows='2' name='descrizione'>".$row['descrizioneOggetto']."</textarea></td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><label for='data'>Pezzi per unità: int (3)</label></td>";
		echo "<td><input type='text'id='data'name='data' value='".$row["data"]."'></td>";
		echo "</tr>";

		
		echo "</select></td>";
		echo "</tr></table>";

		echo"<br><br>";
		echo "<input type='submit' class='alto'>";
		echo"<br><br>";
		echo "<input type='reset' class='alto'>";
		echo "</form></pre>";

	mysqli_close($conn);
?>
</html>
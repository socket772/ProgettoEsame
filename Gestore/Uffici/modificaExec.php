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
	
	
	function remove_injections($string)
	{
		$t = $string;
		$specChars = array(
			' ' => '-','!' => '', '"' => '', '&' => '', '\'' => '', '(' => '', ')' => '','*' => '','+' => '',
			',' => '', '/-' => '', ';' => '', '<' => '', '=' => '', '>' => '',
			'\\' => '', '_' => '', '`' => '', '|' => '', '/' => '', '/_' => '',
			'and' => '', 'or' => '', 'drop' => '', 'truncate' => '');
	
		foreach ($specChars as $k => $v)
		{
			
			$t = str_replace($k, $v, strtolower($t));
		}
	
		return $t;
	}

	$code= remove_injections($_GET['code']);
	
		$sql = "INSERT INTO Inventario(codice) VALUES('".$code."')";
		$result = mysqli_query($conn, $sql);


	$sql = "SELECT * FROM Inventario WHERE codice='".$code."'";
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_fetch_assoc($result)>0)
	{
		echo "Tabella aggiornata<br><br>";
	}
	else
	{
		echo "Aggiornamento fallita<br><br>";
	}

	mysqli_close($conn);
?>
</html>
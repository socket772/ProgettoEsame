<html>
<style><?php include '../stili/css/bootstrap-italia.min.css'; ?></style>
<?php
	
	include '../libs.php';
	// Create connection
	$conn = mysqli_connect("localhost", "root", "", "Inventario");
	// Check connection
	if (!$conn)
	{
	  die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "SELECT * FROM Fornitori";
	
	$result = mysqli_query($conn, $sql);
	

	if (mysqli_num_rows($result) > 0)
	{
	  // output data of each row
	  //$row["dato"]
	  echo "<pre><table class='table'>";
	  echo "<tr>";
	  echo "<th scope='col'>Codice</th> <th scope='col'>Nome</th> <th scope='col'>eMail</th> <th scope='col'>Impegno di spesa</th> <th scope='col'>Determina</th> <th scope='col'>Data determina</th> <th scope='col'>CIG</th>";
	  echo "</tr>";
	  while($row = mysqli_fetch_assoc($result))
	  {
		echo "<tr>";
		echo "<td>".$row["codice"]."</td>";
		echo "<td>".$row["nome"]."</td>";
		echo "<td>".$row["mail"]."</td>";
		echo "<td>".$row["impegnoDiSpesa"]."</td>";
		echo "<td>".$row["determina"]."</td>";
		echo "<td>".$row["dataDetermina"]."</td>";
		echo "<td>".$row["cig"]."</td>";
		echo "</tr>";
	  }
	  echo "</table></pre>";
	}
	
	else
	{
	  echo "0 results";
	}

	mysqli_close($conn);
?>
</html>
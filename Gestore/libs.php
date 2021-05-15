<?php
function remove_injections($string)
{
    $t = $string;
    $specChars = array(
        '!' => '', '"' => '', '&' => '', '\'' => '', '(' => '', ')' => '','*' => '',
		'+' => '', '/-' => '', ';' => '', '<' => '', '=' => '', '>' => '', 
        '\\' => '', '_' => '', '`' => '', '|' => '', '/_' => '', '#' => '',
        'and' => '', 'drop' => '', 'truncate' => '', 'use' => '');

    foreach ($specChars as $k => $v)
    {
        $t = str_ireplace($k, $v, $t);
    }

    return $t;
}

function mysqli_database()
{
	$conn = mysqli_connect("localhost", "root", "", "Inventario");
	
	if (!$conn)
	{
	  die("Connection failed: " . mysqli_connect_error());
	}
	
	return $conn;
}

function select_star($table)
{
	$sql = "SELECT * FROM ".$table;
	$result = mysqli_query(mysqli_database(), $sql);
	$resultAssoc = mysqli_fetch_assoc($result);
	return $resultAssoc;
}

function select_specific($table, $search)
{
	$sql = "SELECT * FROM " . $table . " WHERE codice='" . $search . "'";
	$result = mysqli_query(mysqli_database(), $sql);
	$resultAssoc = null;
	if($result==true)
		$resultAssoc = mysqli_fetch_assoc($result);
	else
		echo "f";
	return $resultAssoc;
}



?>
<?php
function remove_injections(String $string)
{
    $t = $string;
    $specChars = array(
        '!' => '', '"' => '', '&' => '', '\'' => '', '(' => '', ')' => '','*' => '',
		'+' => '', '/-' => '', ';' => '', '<' => '', '=' => '', '>' => '', 
        '\\' => '', '_' => '', '`' => '', '|' => '', '/_' => '', '#' => '',
        'and' => '', 'drop' => '', 'truncate' => '', 'use' => '' );

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

return$conn;}
?>
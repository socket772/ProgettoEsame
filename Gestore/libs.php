<?php

function TimeLeft(bool $fromNow)
{
    $Days = 604800;
    if($fromNow)
        $Days = time()+$Days;
    return $Days;
}

function remove_injections(String $string)
{
    $t = $string;
    $specChars = array(
        '!' => '', '"' => '', '&' => '', '\'' => '', '(' => '', ')' => '', '*' => '',
		'+' => '', '/-' => '', ';' => '', '<' => '', '=' => '', '>' => '', '--' => '',
        '\\' => '', '_' => '', '`' => '', '|' => '', '/_' => '', '#' => '',
        'truncate' => '', 'delete' => '', 'update' => '');

    foreach ($specChars as $k => $v)
    {
        $t = str_ireplace($k, $v, $t);
    }

    return $t;
}

function mysqli_database(String $Database)
{
    //se il sistema è UNIX based, per usare una porta diversa dall 3306 come hostname va inserito l'ip di loopback 127.0.0.1
	$conn = new mysqli("127.0.0.1", "Magazzino", "", $Database);
	if (!$conn)
	{
	  die("Connection failed: " . mysqli_connect_error());
	}

    return$conn;
}

// https://youtu.be/dQw4w9WgXcQ

?>


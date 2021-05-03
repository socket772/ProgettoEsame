<?php
	//admin
	//c3284d0f94606de1fd2af172aba15bf3

	header("Location: ./Gestore");
//	$usr = $_POST['username'];
//	$psw = $_POST['password'];
	
    

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

	$usr = remove_injections($_GET['username']);
    $psw = remove_injections($_GET['password']);

	echo $usr."<br>";
	echo $psw."<br>";

	$psw = md5(md5($psw));

	// Create connection
	$conn = mysqli_connect("localhost", "root", "", "Inventario");
	// Check connection
	if (!$conn)
	{
	  die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT password, username FROM Utenti WHERE username=='".$usr."'";
	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($result);

/*	if($row['username']==$usr && $row['password']==$psw)
	{
        echo "Login effettuato";
		setcookie("usernameInventarioLocale", $usr, time()+(14*24*60*60), "/","", 0);
		setcookie("passwordInventarioLocale", $psw, time()+(14*24*60*60), "/","", 0);
		echo "<script type = 'text/javascript'>  
        function page_redirect()
        {  
        window.location = './Gestore';  
        }  
        setTimeout('page_redirect()', 1);  
        </script>";
        exit();
	}
    else
	{
        echo "login fallito";
    }

*/	
?>
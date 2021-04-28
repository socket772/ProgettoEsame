<?php
/*
	if(isset($_COOKIE["usernameInventarioLocale"]) && isset($_COOKIE["passwordInventarioLocale"]) 1==1)
		{
			header('./Gestore');
			exit();
		}
*/
?>

<html>
	<body>
		<form action="check.php" method="GET"> <!-Temporaneamente "GET"-!>
			<label for='username'>Username</label>
			<input type='text'id='username'name='username' value=''>
			<br><br>
			<label for='password'>Password</label>
			<input type='text'id='password'name='password' value=''>
			<br><br>
			<input type='submit'>
			<input type='reset'>
		</form>
		<br>
		Oppure accedi alla <button onclick="window.open('./Gestore/readOnly.html')">Modalita lettura</button>
	</body>
</html>
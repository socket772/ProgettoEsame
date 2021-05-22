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
	<style><?php include './Gestore/stili/css/bootstrap-italia.min.css'; ?></style>
	<body>
		<h2 class="display-3">Login</h2>
		<form action="check.php" method="POST"> <!-Temporaneamente "GET"-!>
			<label for='username'>Username</label>
			<input type='text'id='username'name='username' value=''>
			<br><br>
			<label for='password'>Password</label>
			<input type='password'id='password'name='password' value=''>
			<br><br>
			<input class="btn btn-outline-secondary" type='submit'>
			<input class="btn btn-outline-secondary" type='reset'>
		</form>
		<br>
		Oppure accedi alla <button class="btn btn-outline-primary" onclick="window.open('./Gestore/readOnly.php')">Modalita lettura</button>
		<script src="./stili/js/bootstrap-italia.bundle.min.js"></script>
	</body>
</html>
<?php
    include './Gestore/libs.php';

	if (session_status() !== PHP_SESSION_ACTIVE)
    {
        session_start();
    }

    if(isset($_COOKIE["remember"]))
    {
        setcookie(session_name(), $_COOKIE["PHPSESSID"],TimeLeft(true), "/");
    }

    $usr = $_COOKIE["username"];

    $conn = mysqli_database("Utenti");
    $sql = "SELECT username, password FROM Utenti WHERE username='$usr'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);

	if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
	{
		if( ($_COOKIE['username'] == $row["username"]) || password_verify(md5($_COOKIE["password"]), $row["password"]))
		{
			mysqli_close($conn);
			header("Location: ./Gestore");
		}
	}

    mysqli_close($conn);

?>

<html>
	<style><?php include './Gestore/stili/css/bootstrap-italia.min.css'; ?></style>
	<link rel="shortcut icon" href="../favico.ico" />
	<body>
		<div class="it-header-slim-wrapper">
            <div class="container">
                <div class="row">
                <div class="col-12">
                    <div class="it-header-slim-wrapper-content">
                    <a class="d-none d-lg-block navbar-brand" href="#"><img src="./Gestore/stili/assets/stemma.png"> Menu Principale</a>
                    <div class="nav-mobile">
                        <nav>
                        <a class="it-opener d-lg-none" data-toggle="collapse" href="#" role="button" aria-expanded="false" aria-controls="menu1">
                            <span>Menu principale</span>
                            <svg class="icon">
                            <use xlink:href="./Gestore/stili/svg/sprite.svg#it-expand"></use>
                            </svg>
                        </a>
                        </nav>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
		<div class=" container col-11">
			<h2 class="display-2">Login</h2><br>
			<form action="check.php" method="POST">
				<label for='username'>Username</label>
				<input type='text'id='username'name='username' value=''>
				<br><br>
				<label for='password'>Password</label>
				<input type='password'id='password'name='password' value=''>
				<br><br>
				<label for='rmb'>Ricordami per 7 giorni</label>
				<input type="checkbox" name="rmb" id="rmb" value="true">
				<br><br>
				<input class="btn btn-outline-secondary" type='submit'>
				<input class="btn btn-outline-secondary" type='reset'>
			</form>
			<br>
			Oppure accedi alla <button class="btn btn-outline-primary" onclick="window.open('./Gestore/readOnly.php')">Modalita lettura</button>
		</div>
		<script src="./stili/js/bootstrap-italia.bundle.min.js"></script>
	</body>
</html>
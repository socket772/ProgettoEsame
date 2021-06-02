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
				<input class="btn btn-outline-secondary" type='submit'>
				<input class="btn btn-outline-secondary" type='reset'>
			</form>
			<br>
			Oppure accedi alla <button class="btn btn-outline-primary" onclick="window.open('./Gestore/readOnly.php')">Modalita lettura</button>
		</div>
		<script src="./stili/js/bootstrap-italia.bundle.min.js"></script>
	</body>
</html>
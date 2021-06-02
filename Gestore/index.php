<?php
	session_start();
	if( !(isset($_SESSION['username']) || isset($_COOKIE['username'])) )
	{
		header("Location: ../");
	}
?>
<html>
<style><?php include './stili/css/bootstrap-italia.min.css'; ?></style>	
	<body>
		<div class="it-header-slim-wrapper">
            <div class="container">
                <div class="row">
                <div class="col-12">
                    <div class="it-header-slim-wrapper-content">
                    <a class="d-none d-lg-block navbar-brand" href="../"><img src="./stili/assets/stemma.png"> Menu Principale</a>
                    <div class="nav-mobile">
                        <nav>
                        <a class="it-opener d-lg-none" data-toggle="collapse" href="./" role="button" aria-expanded="false" aria-controls="menu1">
                            <span>Menu principale</span>
                            <svg class="icon">
                            <use xlink:href="./stili/svg/sprite.svg#it-expand"></use>
                            </svg>
                        </a>
                        <div class="link-list-wrapper collapse" id="menu1">
                            <ul class="link-list">
                            <li><a class="list-item" href="#"></a></li>
                            <li><a class="list-item active" href="./Inventario">Inventario</a></li>
                            <li><a class="list-item active" href="./Fornitori">Fornitori</a></li>
                            <li><a class="list-item active" href="./Ordini">Ordini</a></li>
                            <li><a class="list-item" href="#"></a></li>
                            </ul>
                        </div>
                        </nav>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
		
		<div class=" container col-11">
			<h1 class="display-1">Menu Principale</h1>
			</br>
		
			<button class="btn btn-primary btn-block" onclick="window.open('./Inventario/')">Gestisci inventario</button>
			</br>
			<button class="btn btn-primary btn-block" onclick="window.open('./Fornitori/')">Gestisci fornitori</button>
			</br>
			<button class="btn btn-primary btn-block" onclick="window.open('./Ordini/')">Gestisci ordini</button>
		</div>
	</body>
</html>

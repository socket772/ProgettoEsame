<html>
<style><?php include '../stili/css/bootstrap-italia.min.css'; ?></style>
    <body>
        
        <div class="it-header-slim-wrapper">
            <div class="container">
                <div class="row">
                <div class="col-12">
                    <div class="it-header-slim-wrapper-content">
                    <a class="d-none d-lg-block navbar-brand" href="../">Menu Principale</a>
                    <div class="nav-mobile">
                        <nav>
                        <a class="it-opener d-lg-none" data-toggle="collapse" href="../" role="button" aria-expanded="false" aria-controls="menu1">
                            <span>Menu principale</span>
                            <svg class="icon">
                            <use xlink:href="/bootstrap-italia/dist/svg/sprite.svg#it-expand"></use>
                            </svg>
                        </a>
                        <div class="link-list-wrapper collapse" id="menu1">
                            <ul class="link-list">
                            <li><a class="list-item" href="#"></a></li>
                            <li><a class="list-item active" href="../Inventario">Inventario</a></li>
                            <li><a class="list-item active" href="../Fornitori">Fornitori</a></li>
                            <li><a class="list-item active" href="../Ordini">Ordini</a></li>
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

        <h1 class="display-1">Menu gestione inventario</h1>
        <br><br>
        <button class="btn btn-primary" onclick="window.location.href='./formAggiungi.php';">Aggiungi inventario</button>
        <br><br>
        <button class="btn btn-primary" onclick="window.location.href='./formModifica.php';">Modifica inventario</button>
        <br><br>
        <button class="btn btn-primary" onclick="window.location.href='./visualizzaInventario.php';">Visualizza inventario</button>

        <script src="../stili/js/bootstrap-italia.bundle.min.js"></script>
    </body>
</html>
<nav class="navbar navbar-dark bg-dark mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">TP Mini-chat !</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Listes des utilisateurs</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <?php include('liste-utilisateur.php') ?>
                </div>
            </div>
        </div>
    </div>
</nav>
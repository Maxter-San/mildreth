<nav class="navbar navbar-expand-lg navbar fixed-top" style="background-color: #f8abff;">
    <div class="container-fluid container">
        <a class="navbar-brand" href="./">
            <img src="./resources/logo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Academy Hour
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-list-ul"></i>Categorías</a>
                </li>
            </ul>

            <form class="d-flex ms-5 col-md-6" role="search" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" id="myForm">
                <input class="form-control me-2" type="search" placeholder="Buscar curso..." name="search" aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit" name="submitButtonSearchProduct">Buscar</button>
            </form>
        </div>

        <?php 
            if(isset($_SESSION["id_usuario"])){
        ?>
            <button type="button" class="btn btn-outline-secondary">Mis cursos</button>
            <div class="dropdown text-end">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                    <li><a class="dropdown-item" href="#">Configuración</a></li>
                    <li><a class="dropdown-item" href="#">Certificados</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Salir</a></li>
                </ul>
            </div>
        <?php 
            }else{
        ?>
            <div class="dropdown text-end">
                <a href="./logIn.php"><button type="button" class="btn btn-outline-secondary">Iniciar sesión</button></a>
                <a href="./signUp.php"><button type="button" class="btn btn-secondary">Registrarme</button></a>
            </div>
        <?php 
            }
        ?>
    </div>
</nav>
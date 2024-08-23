    <!-- Header -->
    <nav id="navbar" class="container-fluid navbar navbar-expand-lg">
        <div class="container-fluid text-center">
            <img src="./public/img/logo.png" id="logo" alt="logo" class="logo mt-3 mt-md-0 d-block">

            <!-- Menú principal (para pantallas grandes) -->
            <div class="d-none d-lg-block ms-auto">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeria.php">GALERÍA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acerca.php">ACERCA DE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acerca.php">OTROS PROYECTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">CONTACTO</a>
                    </li>
                </ul>
            </div>
            <!-- Fin del menú principal -->

            <!-- Botón del menú para dispositivos móviles -->
            <button class="btnMenu d-md-none ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                <img class="menu" src="./public/img/Buttons/menu.png" alt="Menú">
            </button>

            <!-- Menú offcanvas para dispositivos móviles -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel" style="background: var(--color1);">
                <div class="offcanvas-header">
                    <button class="ms-2" type="button" data-bs-dismiss="offcanvas" aria-label="Cerrar" style="background:none; border:none;">
                        <i class="fa-solid fa-circle-chevron-left mt-4" id="btn_atras"></i>
                    </button>
                </div>
                <div class="offcanvas-body d-block d-lg-none text-start">
                    <ul class="container navbar-nav me-auto ps-3">
                        <li class="nav-item animate__animated animate__backInRight animate__delay-1s animate__fast">
                            <a class="nav-link textCanvas" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item animate__animated animate__backInRight animate__delay-1s animate__fast">
                            <a class="nav-link textCanvas" href="galeria.php">GALERÍA</a>
                        </li>
                        <li class="nav-item animate__animated animate__backInRight animate__delay-1s animate__fast">
                            <a class="nav-link textCanvas" href="acerca.php">ACERCA DE</a>
                        </li>
                        <li class="nav-item animate__animated animate__backInRight animate__delay-1s animate__fast">
                            <a class="nav-link textCanvas" href="acerca.php">OTROS PROYECTOS</a>
                        </li>
                        <li class="nav-item animate__animated animate__backInRight animate__delay-1s animate__fast">
                            <a class="nav-link textCanvas" href="contacto.php">CONTACTO</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Fin del menú offcanvas -->
        </div>
    </nav>
<nav id="navbar" class="container-fluid navbar navbar-expand-lg">
    <div class="container-fluid text-center">
        <img src="./public/img/logo.png" id="logo" alt="logo" class="logo mt-3 mt-md-0 sm-auto d-block">

        <!-- Esto se moverá a la derecha en escritorio -->
        <div class="d-none d-lg-block ms-auto">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="color: var(--link) !Important;" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: var(--link) !Important;" href="profesionales.php">NUESTROS PROFESIONALES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: var(--link) !Important;" href="tratamientos.php">TRATAMIENTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: var(--link) !Important;" href="quienesSomos.php">QUIÉNES SOMOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btnTurnos" href="https://wa.me/2215777160" target="_blank">
                        TURNOS
                        <i style="color: var(--link) !important;" class="fa-brands fa-whatsapp pe-1"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Fin de la sección movida a la derecha -->

        <!-- Botón del menú para dispositivos móviles -->
        <button class="btnMenu d-md-none ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
            <img class="menu" src="./public/img/Buttons/menu.png" alt="Menu"></img>
        </button>

        <!-- Menú offcanvas para dispositivos móviles -->
        <div class="offcanvas offcanvas-end d-xxl-none d-xl-none" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="background: var(--color1);">
            <div class="offcanvas-header">
                <button class="ms-2" type="button" data-bs-dismiss="offcanvas" aria-label="Close" style="background:none; border:none;">
                    <i class="fa-solid fa-circle-chevron-left mt-4" id="btn_atras"></i>
                </button>
            </div>
            <div class="offcanvas-body  d-block d-lg-none text-start">
                <ul class="container navbar-nav me-auto ps-3">
                    <li class="nav-item animate__animated animate__backInRight animate__delay-1s animate__fast">
                        <a class="nav-link textCanvas" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item animate__animated animate__backInRight animate__delay-1s animate__fast">
                        <a class="nav-link textCanvas" href="profesionales.php">NUESTROS PROFESIONALES</a>
                    </li>
                    <li class="nav-item animate__animated animate__backInRight animate__delay-1s animate__fast">
                        <a class="nav-link textCanvas" href="tratamientos.php">TRATAMIENTOS</a>
                    </li>
                    <li class="nav-item animate__animated animate__backInRight animate__delay-1s animate__fast">
                        <a class="nav-link textCanvas" href="quienesSomos.php">QUIÉNES SOMOS</a>
                    </li>
                    <li class="nav-item animate__animated animate__backInRight animate__delay-1s animate__fast">
                        <a class="nav-link" href="https://wa.me/1234567890" target="_blank">
                            TURNOS
                            <i style="color: var(--link) !important;" class="fa-brands fa-whatsapp pe-1"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Fin del menú offcanvas -->
    </div>
</nav>
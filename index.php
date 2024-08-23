<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("template/meta.php") ?>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    <title>Damoon Art | Home</title>
</head>

<body>

    <main>
        <div class="home">
            <div class="position-relative">
                <?php include("banner.php") ?>
                <?php include("template/header.php") ?>
            </div>
            <div class="container mt-5 paddingTop paddingBottom">
                <div class="row justify-content-center aling-items-center">
                    <div class="col-md-5 col-sm-12 mb-4">
                        <div class="card custom-card" style=" height: 26rem !important;">
                            <div class="card-body p-4">
                                <img src="./public/img/icons/calidad.png" width="20%">
                                <h3 class="titleSection2" style="color: var(--link) !important;">ODONTOLOGÍA <br> DE CALIDAD</h3>
                                <p class="subText fw-lighter" style="color: var(--link) !important;">
                                    Trabajamos diariamente enfocándonos en que la atención a nuestros pacientes sea una experiencia placentera.
                                </p>
                                <div class="d-flex justify-content-end mt-3">
                                    <a href="quienesSomos.php" class="btn btn-link">
                                        <i class="fa-solid fa-circle-plus" style="color: var(--link) !important;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 mb-4">
                        <div class="card custom-card" style="height: 26rem !important;">
                            <div class="card-body p-4">
                                <img src="./public/img/icons/profesionales.png" width="20%">
                                <h3 class="titleSection2" style="color: var(--link) !important;">NUESTROS <br> PROFESIONALES</h3>
                                <p class="subText fw-lighter" style="color: var(--link) !important;">
                                    Contamos con profesionales especializados en cada campo de la odontología moderna.
                                </p>
                                <div class="d-flex justify-content-end mt-3">
                                    <a href="profesionales.php" class="btn btn-link">
                                        <i class="fa-solid fa-circle-plus" style="color: var(--link) !important;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="instalaciones" class="container mt-0 mb-4">
                <div class="col-sm-12 text-center text-md-start">
                    <h2 class="titleSection mb-5">
                        NUESTRAS INSTALACIONES
                    </h2>
                </div>
                <div class="col-sm-12 paddingBottom">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 align-self-center">
                            <P class="subText" style="color: var(--color3) !important;">
                                Contamos con un espacio cómodo y luminoso. Nuestro equipamiento es de última generación.
                                Hacemos que tu visita al consultorio sea lo más placentera posible,
                                tratando de respetar los turnos y los horarios asignados,
                                para evitar ansiedades durante la espera.
                            </P>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./public/img/imgCovers/IMG-CAROUSEL-5.jpg" class="d-block w-100" alt="Imagen 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./public/img/imgCovers/IMG-CAROUSEL-1.jpg" class="d-block w-100" alt="Imagen 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./public/img/imgCovers/IMG-CAROUSEL-2.jpg" class="d-block w-100" alt="Imagen 3">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./public/img/imgCovers/IMG-CAROUSEL-3.jpg" class="d-block w-100" alt="Imagen 4">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./public/img/imgCovers/IMG-CAROUSEL-4.jpg" class="d-block w-100" alt="Imagen 5">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#customCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 text-center text-md-start">
                    <h2 class="titleSection mb-5">
                        TRATAMIENTOS
                    </h2>
                </div>
                <div class="col-sm-12 paddingBottom ">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                            <div data-aos="zoom-in-right" class="card custom-card2">
                                <img src="./public/img/imgCovers/implantes.jpg" class="card-img-top fixed-dimensions" alt="Implantes">
                                <div class="card-body custom-body2 p-4">
                                    <h3 class="card-text text-start">Implantes</h3>
                                    <p class="minText truncated-text" style="color: var(--link) !important;">
                                        Con un implante dental conseguimos reponer los dientes perdidos devolviendo la estética y plena funcionalidad
                                        a la boca del paciente.
                                    </p>
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="#" class="btn btn-link open-modal">
                                            <i class="fa-solid fa-circle-plus pe-1" style="color: var(--link) !important;"></i>
                                        </a>
                                    </div>
                                    <!-- Texto completo escondido para el modal -->
                                    <div class="full-text" style="display: none;">
                                        Con un implante dental conseguimos reponer los dientes perdidos devolviendo la estética y plena funcionalidad
                                        a la boca del paciente.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                            <div data-aos="zoom-in-right" class="card custom-card2">
                                <img src="./public/img/imgCovers/ortodoncia4.jpg" class="card-img-top fixed-dimensions" alt="Ortodoncia">
                                <div class="card-body custom-body2 p-4">
                                    <h3 class="card-text text-start">Ortodoncia</h3>
                                    <p class="minText truncated-text" style="color: var(--link) !important;">
                                        Con el tratamiento de ortodoncia,
                                        nos encargamos de corregir problemas de tus dientes mal posicionados y la mandíbula.
                                    </p>
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="#" class="btn btn-link open-modal">
                                            <i class="fa-solid fa-circle-plus pe-1" style="color: var(--link) !important;"></i>
                                        </a>
                                    </div>
                                    <!-- Texto completo escondido para el modal -->
                                    <div class="full-text" style="display: none;">
                                        Con el tratamiento de ortodoncia,
                                        nos encargamos de corregir problemas de tus dientes mal posicionados y la mandíbula.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                            <div data-aos="zoom-in-right" class="card custom-card2">
                                <img src="./public/img/imgCovers/blanqueamiento2.jpg" class="card-img-top fixed-dimensions" alt="Blanqueamiento">
                                <div class="card-body custom-body2 p-4">
                                    <h3 class="card-text text-start">Blanqueamiento</h3>
                                    <p class="minText truncated-text" style="color: var(--link) !important;">
                                        Gracias a nuestros tratamientos, podrás ver que tu sonrisa vuelve a ser plena y radiante.
                                    </p>
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="#" class="btn btn-link open-modal">
                                            <i class="fa-solid fa-circle-plus pe-1" style="color: var(--link) !important;"></i>
                                        </a>
                                    </div>
                                    <!-- Texto completo escondido para el modal -->
                                    <div class="full-text" style="display: none;">
                                        Gracias a nuestros tratamientos, podrás ver que tu sonrisa vuelve a ser plena y radiante.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-0 mt-md-5">
                        <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                            <div data-aos="zoom-in-right" class="card custom-card2">
                                <img src="./public/img/imgCovers/endodoncia.webp" class="card-img-top fixed-dimensions" alt="Endodoncia">
                                <div class="card-body custom-body2 p-4">
                                    <h3 class="card-text text-start">Endodoncia</h3>
                                    <p class="minText truncated-text" style="color: var(--link) !important;">
                                        Sentís dolor en tu boca? Acercate a GN y juntos encontraremos la solución buscada.
                                    </p>
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="#" class="btn btn-link open-modal">
                                            <i class="fa-solid fa-circle-plus pe-1" style="color: var(--link) !important;"></i>
                                        </a>
                                    </div>
                                    <!-- Texto completo escondido para el modal -->
                                    <div class="full-text" style="display: none;">
                                        Sentís dolor en tu boca? Acercate a GN y juntos encontraremos la solución buscada.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                            <div data-aos="zoom-in-right" class="card custom-card2">
                                <img src="./public/img/imgCovers/cirugia.jpg" class="card-img-top fixed-dimensions" alt="Cirugía">
                                <div class="card-body custom-body2 p-4">
                                    <h3 class="card-text text-start">Cirugía</h3>
                                    <p class="minText truncated-text" style="color: var(--link) !important;">
                                        Tuviste un accidente dental? Te dejaste estar y tu pieza dental ya no tiene solución? Consultanos.
                                    </p>
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="#" class="btn btn-link open-modal">
                                            <i class="fa-solid fa-circle-plus pe-1" style="color: var(--link) !important;"></i>
                                        </a>
                                    </div>
                                    <!-- Texto completo escondido para el modal -->
                                    <div class="full-text" style="display: none;">
                                        Tuviste un accidente dental? Te dejaste estar y tu pieza dental ya no tiene solución? Consultanos.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                            <div data-aos="zoom-in-right" class="card custom-card2">
                                <img src="./public/img/imgCovers/general.jpg" class="card-img-top fixed-dimensions" alt="General">
                                <div class="card-body custom-body2 p-4">
                                    <h3 class="card-text text-start">Odontopediatría</h3>
                                    <p class="minText truncated-text" style="color: var(--link) !important;">
                                        La odontopediatría es la rama de la odontología encargada de tratar a los niños.
                                        Somos especialistas y te asistimos ante cualquier duda al respecto!.
                                    </p>
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="#" class="btn btn-link open-modal">
                                            <i class="fa-solid fa-circle-plus pe-1" style="color: var(--link) !important;"></i>
                                        </a>
                                    </div>
                                    <!-- Texto completo escondido para el modal -->
                                    <div class="full-text" style="display: none;">
                                        La odontopediatría es la rama de la odontología encargada de tratar a los niños.
                                        Somos especialistas y te asistimos ante cualquier duda al respecto!.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-0 mt-md-5">
                        <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                            <div data-aos="zoom-in-right" class="card custom-card2">
                                <img src="./public/img/imgCovers/protesis.jpg" class="card-img-top fixed-dimensions" alt="Endodoncia">
                                <div class="card-body custom-body2 p-4">
                                    <h3 class="card-text text-start">Prótesis</h3>
                                    <p class="minText truncated-text" style="color: var(--link) !important;">
                                        Las prótesis se destinan a sustituir las partes de la dentadura dañadas o los dientes perdidos por piezas sintéticas
                                    </p>
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="#" class="btn btn-link open-modal">
                                            <i class="fa-solid fa-circle-plus pe-1" style="color: var(--link) !important;"></i>
                                        </a>
                                    </div>
                                    <!-- Texto completo escondido para el modal -->
                                    <div class="full-text" style="display: none;">
                                        Las prótesis se destinan a sustituir las partes de la dentadura dañadas o los dientes perdidos por piezas sintéticas
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                            <div data-aos="zoom-in-right" class="card custom-card2">
                                <img src="./public/img/imgCovers/limpieza.jpg" class="card-img-top fixed-dimensions" alt="Cirugía">
                                <div class="card-body custom-body2 p-4">
                                    <h3 class="card-text text-start">Limpieza Dental</h3>
                                    <p class="minText truncated-text" style="color: var(--link) !important;">
                                        La limpieza dental es uno de los tratamientos más demandados y
                                        sirve principalemente para evitar enfermedades dentales.
                                    </p>
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="#" class="btn btn-link open-modal">
                                            <i class="fa-solid fa-circle-plus pe-1" style="color: var(--link) !important;"></i>
                                        </a>
                                    </div>
                                    <!-- Texto completo escondido para el modal -->
                                    <div class="full-text" style="display: none;">
                                        La limpieza dental es uno de los tratamientos más demandados y
                                        sirve principalemente para evitar enfermedades dentales.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                            <div data-aos="zoom-in-right" class="card custom-card2">
                                <img src="./public/img/imgCovers/blanqueamiento.png" class="card-img-top fixed-dimensions" alt="General">
                                <div class="card-body custom-body2 p-4">
                                    <h3 class="card-text text-start">General</h3>
                                    <p class="minText truncated-text" style="color: var(--link) !important;">
                                        Necesitás un arreglo estético, una fluoración para tus chicos, o simplemente un control?
                                        Acercate a GN.
                                    </p>
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="#" class="btn btn-link open-modal">
                                            <i class="fa-solid fa-circle-plus pe-1" style="color: var(--link) !important;"></i>
                                        </a>
                                    </div>
                                    <!-- Texto completo escondido para el modal -->
                                    <div class="full-text" style="display: none;">
                                        Necesitás una limpieza, un arreglo estético, una fluoración para tus chicos, o simplemente un control?
                                        Acercate a GN.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("contact.php") ?>
        </div>
    </main>
    <footer>
        <?php include("template/footer.php") ?>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.custom-card2');

            cards.forEach(card => {
                card.addEventListener('mouseover', () => {
                    anime({
                        targets: card,
                        scale: 1.05, // Escala ligeramente la tarjeta
                        boxShadow: '0px 10px 20px rgba(0, 0, 0, 0.2)', // Aumenta la sombra
                        duration: 300, // Duración de la animación
                        easing: 'easeOutCubic'
                    });
                });

                card.addEventListener('mouseleave', () => {
                    anime({
                        targets: card,
                        scale: 1, // Vuelve al tamaño original
                        boxShadow: '0px 4px 8px rgba(0, 0, 0, 0.1)', // Sombra inicial
                        duration: 300,
                        easing: 'easeOutCubic'
                    });
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./public/js/main.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit-icons.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Control de Responsive Design !-->
<script>
    AOS.init();
</script>

</html>
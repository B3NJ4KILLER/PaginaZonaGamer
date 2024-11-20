<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="stylesheet" href="style-nosotros.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <video src="fondo.mp4" autoplay preload muted loop></video>

    <!---------------------------------------Container principal-------------------------------------->
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <h4>Busca tu videojuego</h4>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarContent">
                    <form class="d-flex ms-auto" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar en Zona Gamer"
                            aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>


        <header class="navbar navbar-expand-lg mb-5">
            <div class="container-fluid">

                <a class="navbar-brand" href="inicio.php">
                    <img src="logo.svg" alt="logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarNav">
                    <h1>El JUEGO NUNCA TERMINA</h1>
                    <div class="navbar-nav ms-auto">
                        <button onclick="location.href='inicio.php'" class="btn mx-2">Inicio</button>
                        <button onclick="location.href='nosotros.php'" class="btn mx-2">Nosotros</button>
                        <button onclick="location.href='login.php'" class="btn mx-2">Login</button>
                    </div>
                </div>
            </div>
        </header>

        <!-------------------------------------Banner------------------------------------------------->


        <img src="banner.webp" class="img-fluid" alt="banner">



        <!---------------------------------Carousel con contenido----------------------------------->


        <div class="d-flex justify-content-center my-5">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel-slide">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="bienvenido.webp" class="d-block w-100" alt="Hogwarts">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Zona Gamer</h5>
                            <p>¡Bienvenidos a Zona Gamer! Aquí, en el corazón de nuestra comunidad, encontrarás un lugar
                                donde la pasión por los videojuegos se vive al máximo. Este es tu espacio para compartir
                                información, descubrir las últimas novedades, y disfrutar del contenido generado por
                                nuestros talentosos usuarios. </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <img src="descubre.webp" class="d-block w-100" alt="Resident">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Descúbrenos</h5>
                            <p>En Zona Gamer, somos más que una comunidad; somos una familia unida por la pasión por los
                                videojuegos. Aquí, encontrarás a jugadores de todos los rincones del mundo, compartiendo
                                sus experiencias, conocimientos y creatividad. Nos dedicamos a crear un espacio
                                inclusivo y acogedor donde cada voz cuenta y cada jugador tiene un lugar.</p>
                        </div>
                    </div>

                </div>


                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>




        <!-------------------------------------Imagenes y videos--------------------------------------->



        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
                <div class="col">
                    <div class="card h-100">
                        <i class="bi bi-person-check"></i>
                        <div class="card-body">
                            <p class="card-text">Regístrate para acceder a contenido exclusivo, guías personalizadas y
                                la oportunidad de compartir experiencias con otros entusiastas de los videojuegos.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <i class="bi bi-play-btn"></i>
                        <div class="card-body">
                            <p class="card-text">En Zona Gamer, te animamos a compartir tus mejores momentos en video.
                                Ya sea una jugada maestra, un tutorial o una reseña, sube tus videos para mostrar tus
                                habilidades y compartir tus experiencias con la comunidad.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <i class="bi bi-emoji-angry-fill"></i>
                        <div class="card-body">
                            <p class="card-text">Te pedimos que evites comportamientos tóxicos y contribuyas a mantener
                                nuestra comunidad como un espacio seguro y acogedor para todos.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <i class="bi bi-controller"></i>
                        <div class="card-body">
                            <p class="card-text">Celebramos la diversidad del gaming con contenido crossplay,
                                permitiendo que jugadores de diferentes plataformas se unan y compartan sus
                                experiencias.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <!-------------------------------------Quienes Somos?-------------------------------------->
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="gaming.webp" class="img-fluid" alt="img-cs">
                    <h5 class="text-light">Imagen Gaming</h5>
                </div>
                <div class="col-md-6 bg-secondary">
                    <h1>Sobre nosotros</h1>
                    <p id="contenidocs">Zona Gamer es una plataforma integral dedicada a los entusiastas de los
                        videojuegos, especialmente aquellos interesados en los títulos más destacados del mercado.
                        Provee a los usuarios con una variedad de recursos como noticias actualizadas, guías detalladas
                        para mejorar en los juegos, y contenido exclusivo relacionado con juegos populares de distintos
                        géneros. Esta comunidad es un punto de encuentro para compartir estrategias, experiencias y
                        discutir las últimas tendencias en el mundo de los videojuegos, abarcando desde clásicos
                        competitivos hasta las últimas novedades en juegos de aventura y acción.</p>
                </div>
            </div>
        </div>

        <!-------------------------------------Tabla de Juegos populares------------------------------------>
        <div class="container-lg">
            <h4>Premios que a ganado nuestra pagina en diferentes concursos</h4>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">Concurso</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Año</th>
                        <th scope="col">Puesto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="num" scope="row">Best Gaming Community Awards</th>
                        <td>Innovación en Comunidad</td>
                        <td>2022</td>
                        <td>1er Lugar</td>
                    </tr>
                    <tr>
                        <th class="num" scope="row">Web Gaming Contest</th>
                        <td>Mejor Plataforma de Juegos</td>
                        <td>2023</td>
                        <td>2do Lugar</td>
                    </tr>

                    <tr>
                        <th class="num" scope="row">Tech World Gaming Expo</th>
                        <td>Mejor Contenido Generado por Usuarios</td>
                        <td>2024</td>
                        <td>1er Lugar</td>
                    </tr>

                    <tr>
                        <th class="num" scope="row">Digital Gaming Summit</th>
                        <td>Comunidad Más Activa</td>
                        <td>2024</td>
                        <td>3er Lugar</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-------------------------------------Progress--------------------------------------------->

        <div class="container-xl">
            <div class="row">
                <div class="col-md-6">
                    <figure class="figure">
                        <img src="zgamerimg2.webp" class="figure-img" alt="zgamerimg">
                        <figcaption class="figure-caption text-light">Imagen de Zona Gamer</figcaption>
                    </figure>
                </div>

                <div class="col-6">
                    <h1>!! Noticia importante para Zona Gamer ¡¡</h1>
                    <p id="progress">
                        Zona Gamer está a punto de alcanzar un hito significativo en su trayectoria hacia convertirse en
                        una marca registrada. Actualmente, hemos completado aproximadamente el 85% del proceso, lo que
                        nos acerca cada vez más a este logro crucial. Durante este recorrido, hemos trabajado
                        incansablemente para cumplir con todos los requisitos legales y administrativos necesarios,
                        asegurando que cada detalle esté en su lugar para proteger nuestra identidad y valores como
                        comunidad. </p>

                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                            style="width: 85%">85%
                        </div>
                    </div>
                </div>



            </div>

        </div>


        <!-------------------------------------------------------------------------------------------------->

        <div class="container my-5 w-100">
            <div class="row contact-section">
                <div class="col-md-6 map-container">
                    <!-- Google Map Embed Code -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3484.7380086639776!2d-70.3552513259267!3d-27.35684108174138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x969803ee988f304f%3A0x5d6a6c8301905dfb!2sUniversidad%20de%20Atacama!5e0!3m2!1ses!2scl!4v1699110729234!5m2!1ses!2scl"
                        width="100%" height="300" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
                <div class="col-md-6">
                    <form class="contact-form">
                        <input type="text" class="form-control w-100" placeholder="Nombre" required>
                        <input type="email" class="form-control w-100" placeholder="Correo Electrónico" required>
                        <input type="text" class="form-control w-100" placeholder="Asunto" required>
                        <textarea class="form-control w-100" rows="4" placeholder="Mensaje" required></textarea>
                        <button type="submit" class="btn btn-primary mt-2">Enviar</button>
                    </form>
                </div>
            </div>
        </div>

        <!-------------------------------------Pie de Pagina------------------------------------------------>
        <footer class="container-fluid py-4">
            <div class="row">
                <div class="col-md-3">
                    <h3>Zona Gamer</h3>
                    <p id="zgamer">Zona Gamer es el destino definitivo para los aficionados de los juegos en línea
                        más
                        populares.</p>
                </div>

                <div class="col-md-3">
                    <h4>Juegos recientes de la página</h4>
                    <a href="https://www.counter-strike.net/cs2?l=spanish">Link de CS-GO</a><br>
                    <a href="https://www.fortnite.com/?lang=es-ES">Link de Fortnite</a><br>
                    <a href="https://www.rocketleague.com/es-es">Link de Rocket League</a>
                </div>

                <div class="col-md-3">
                    <h4>Juegos de campaña</h4>
                    <a href="https://thelastofus.es/">The last of us</a><br>
                    <a href="https://www.playstation.com/es-cl/games/marvels-spider-man-miles-morales/">Marvel's
                        Spider-Man: Miles Morales</a><br>
                    <a href="https://www.rockstargames.com/es/reddeadredemption2">Red dead redemption
                        2</a>
                </div>

                <div class="col-md-3">

                    <h4>Soporte Microsoft</h4>
                    <div class="list-group">
                        <a href="https://support.microsoft.com/es-es/account-billing/devoluci%C3%B3n-de-elementos-que-has-comprado-en-microsoft-para-su-cambio-o-reembolso-81629012-aa4f-f48b-2394-8596f415072b"
                            class="list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Devolver o cambiar artículos</h5>
                            </div>
                            <p class="mb-1">En caso de que hagas una compra erronea de algun videojuego.</p>
                        </a>
                        <a href="https://support.microsoft.com/es-es/account-billing/obtener-aplicaciones-y-juegos-de-confianza-desde-la-microsoft-store-en-windows-773745c0-e4e8-4f8e-b14f-6b7c2051cf9f"
                            class="list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Obtener aplicaciones y juegos de confianza</h5>
                            </div>
                            <p class="mb-1">Obten aplicaciones y juegos de confianza con microsoft.</p>
                        </a>

                    </div>

                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <div class="negro">
                    <a href="#">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                </div>

                <div class="rosado">
                    <a href="#">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>

                <div class="morado">
                    <a href="https://www.twitch.tv/b3nj4_killer">
                        <i class="bi bi-twitch"></i>
                    </a>
                </div>
            </div>

            <div class="text-center mt-4">
                <p>&copy; 2024 Benjamín Acevedo</p>
            </div>
        </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>
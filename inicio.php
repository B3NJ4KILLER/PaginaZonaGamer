


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="style-inicio.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <video src="fondo.mp4" autoplay preload muted loop></video>

    <!---------------------------------------Container principal-------------------------------------->
    <div class="container-fluid">

        

        <br>
        <header class="navbar navbar-expand-lg">
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" onclick="location.href='login.php'">Login</button>

                        <!-- Modal -->
                        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Inicio de sesión</h1>
                                        
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label class="visually-hidden" for="autoSizingInputGroup">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-text">@</div>
                                                    <input type="text" class="form-control" id="autoSizingInputGroup"
                                                        placeholder="Correo electrónico" name="correo">
                                                </div>
                                            </div>


                                            <div class="mb-3 row">
                                                <div class="col pass">
                                                    <input type="password" class="form-control" placeholder="Contraseña"
                                                        name="password">
                                                </div>
                                            </div>

                                            <div class="link-registro">
                                                <a href="registro2.php">No tienes cuenta? Resgistrate</a>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" name="iniciarbtn"
                                            class="btn btn-primary">Entrar</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </header>

        

        

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
            <div class="btn">
                <button type="button" class="btn btn-info">Panel de Control de usuarios</button>
                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="subscriptores.php">Subscriptores</a></li>
                    <li><a class="dropdown-item" href="#">Videojuegos a la venta</a></li>
                </ul>
                </div>
            </div>
        </nav>



        <!-------------------------------------Banner------------------------------------------------->


        <img src="banner.webp" class="img-fluid" alt="banner">
        <div class="container-sm">
            <h5 class="card-title">¡Bienvenidos a Zona Gamer!</h5>
            <p class="card-text">Zona Gamer, el lugar donde la pasión por los videojuegos cobra vida!
                Aquí no solo encuentras un espacio para jugar, sino una comunidad que vibra al ritmo de los mejores
                títulos, las últimas novedades y los desafíos más emocionantes.</p>
        </div>



        <!---------------------------------Carousel con contenido----------------------------------->


        <div class="d-flex justify-content-center my-5">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel-slide">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="hogwarts.webp" class="d-block w-100" alt="Hogwarts">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Hogwarts Legacy</h5>
                            <p>Este juego de rol de acción te lleva al mundo mágico de Harry Potter, permitiéndote
                                explorar
                                Hogwarts y sus alrededores, aprender hechizos y enfrentarte a criaturas mágicas.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <img src="resident.webp" class="d-block w-100" alt="Resident">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Resident Evil 4 Remake</h5>
                            <p>Una nueva versión del clásico juego de terror y supervivencia, con gráficos mejorados y
                                una
                                jugabilidad modernizada que ha cautivado tanto a veteranos como a nuevos jugadores.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="minecraft.webp" class="d-block w-100" alt="Minecraft">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Minecraft</h5>
                            <p>El clásico juego de construcción y supervivencia sigue siendo popular en 2024. Con
                                actualizaciones
                                recientes como "The Pale Garden" y el modo Hardcore, Minecraft sigue ofreciendo nuevas
                                experiencias y desafíos para sus jugadores.</p>
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
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
            <div class="col">
                <div class="card h-100">
                    <img src="img-fortnite.webp" class="card-img-top" alt="img-fortnite">
                    <div class="card-body">
                        <h5 class="card-title">Fortnite</h5>
                        <p class="card-text">Fortnite es un videojuego del año 2017 desarrollado por la empresa Epic
                            Games lanzado como diferentes paquetes de software que presentan seis diferentes modos de
                            juego, pero que comparten el mismo motor de juego y mecánicas. Fue anunciado en los premios
                            Spike Video Game Awards en 2011.</p>
                    </div>

                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <iframe width="440" height="250" src="https://www.youtube.com/embed/Q_eAT-YHEv8?si=I8gymJ-_65iPZjd0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="card-body">
                        <h5 class="card-title">Counter-Strike 2</h5>
                        <p class="card-text">En el icónico mapa Inferno, un jugador del equipo antiterrorista se
                            encuentra solo defendiendo el sitio A. Armado con un AK-47, se posiciona estratégicamente
                            aprovechando la visibilidad para matar enemigos.</p>
                    </div>

                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="rl-dominus.webp" class="card-img-top" alt="rl-dominus">
                    <div class="card-body">
                        <h5 class="card-title">Rocket League</h5>
                        <p class="card-text">Rocket League es un videojuego que combina el fútbol con los vehículos. Fue
                            desarrollado por Psyonix El juego se lanzó por primera vez para PlayStation 4 y Windows en
                            julio de 2015, y más tarde se lanzaron ports para Xbox One y Nintendo Switch.</p>
                    </div>

                </div>
            </div>
        </div>
        <!-------------------------------------Informacion de CS-GO-------------------------------------->
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="img-cs.webp" class="img-fluid" alt="img-cs">
                    <h5 class="text-light">Imagen de Counter Strike Global Offensive</h5>
                </div>
                <div class="col-md-6 bg-secondary">
                    <h1>Counter Strike Global Offensive</h1>
                    <p id="contenidocs">Counter-Strike es una serie de videojuegos multijugador de disparos en primera
                        persona tácticos en los que equipos de terroristas luchan para perpetrar un acto de terror
                        mientras que los antiterroristas intentan prevenirlo. La serie comenzó en Windows en 1999 con el
                        lanzamiento del primer videojuego, Counter-Strike.</p>
                </div>
            </div>
        </div>

        <!-------------------------------------Tabla de Juegos populares------------------------------------>
        <div class="container-lg">
            <h4>Top 5 de videojuegos mas populares y comprados de este 2024</h4>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Videojuego</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="num" scope="row">1</th>
                        <td>Minecraft</td>
                        <td>$26.95 USD</td>
                        <td>Supervivencia y Construcción</td>
                    </tr>
                    <tr>
                        <th class="num" scope="row">2</th>
                        <td>EA Sports FC 24</td>
                        <td>$69.99 USD</td>
                        <td>Deportes</td>
                    </tr>
                    <tr>
                        <th class="num" scope="row">3</th>
                        <td>Star Wars Outlaws</td>
                        <td>$69.99 USD</td>
                        <td>Acción y Aventura</td>
                    </tr>
                    <tr>
                        <th class="num" scope="row">4</th>
                        <td>The Legend of Zelda: Tears of the Kingdom</td>
                        <td>$69.99 USD</td>
                        <td>Acción y Aventura</td>
                    </tr>
                    <tr>
                        <th class="num" scope="row">5</th>
                        <td>Hogwarts Legacy</td>
                        <td>$69.99 USD</td>
                        <td>Acción en Mundo Abierto</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-------------------------------------Progress--------------------------------------------->

        <div class="container-xl">
            <div class="row">
                <div class="col-md-6">
                    <figure class="figure">
                        <img src="zgamerimg.webp" class="figure-img" alt="zgamerimg">
                        <figcaption class="figure-caption text-light">Imagen de Zona Gamer</figcaption>
                    </figure>
                </div>

                <div class="col-6">
                    <h1>Aumento de la comunidad en Zona Gamer</h1>
                    <p id="progress">En los últimos meses, Zona Gamer ha experimentado un crecimiento impresionante en
                        su comunidad de jugadores. Se ha registrado un aumento del 65% en el número de miembros activos,
                        lo cual demuestra la popularidad y el atractivo constante de esta plataforma. Este crecimiento
                        no solo ha enriquecido la experiencia de los jugadores con nuevos amigos y rivales, sino que
                        también ha fomentado un ambiente más dinámico y vibrante para compartir estrategias, discutir
                        sobre juegos recientes y participar en emocionantes torneos.</p>

                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 65%">65%
                        </div>
                    </div>
                </div>



            </div>

        </div>

        <!-------------------------------------Pie de Pagina------------------------------------------------>
        <footer class="container-fluid py-4">
            <div class="row">
                <div class="col-md-3">
                    <h3>Zona Gamer</h3>
                    <p id="zgamer">Zona Gamer es el destino definitivo para los aficionados de los juegos en línea más
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
                    <h4>Subir video a Zona Gamer</h4>
                    <input type="file" name="file" class="form-control">
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
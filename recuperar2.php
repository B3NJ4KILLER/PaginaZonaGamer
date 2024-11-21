<?php
include('conexion.php');

$nombre = $apellidos = $usuario = $telefono = $correo = $genero = $fecha = $direccion = $numdepa = $password = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $query = "SELECT * FROM subscriptores WHERE correo='$correo'";
    $result = $conexion->query($query);

    if ($result && $result->num_rows > 0) {
        $fila = $result->fetch_assoc();
        $nombre = $fila['nombre'];
        $apellidos = $fila['apellidos'];
        $usuario = $fila['usuario'];
        $telefono = $fila['telefono'];
        $correo = $fila['correo'];
        $genero = $fila['genero'];
        $fecha = $fila['fecha'];
        $direccion = $fila['direccion'];
        $numdepa = $fila['numdepa'];
        $password = $fila['password'];
         
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña 2</title>
    <link rel="stylesheet" href="style-recuperar2.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <!------------------------------------FONDO ANIMADO--------------------------------------------->
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




        <!------------------------------------------REGISTRO--------------------------------------------->


        <div class="row d-flex justify-content-center align-items-center">
        
            <div class="col-md-6"><br><br>
                <h2>Ingrese nueva contraseña</h2><br><br>
                <form method="POST" action="update2.php">

                    

                
                    <div class="mb-3 row">
                        <div class="col">
                            <input type="password" class="form-control" placeholder="Contraseña" name="password" value="<?php echo $password; ?>" required>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#confirmModal">Registrar</button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmModalLabel">Confirmar Cambios</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ¿Estás seguro de que deseas guardar la contraseña?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


                

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
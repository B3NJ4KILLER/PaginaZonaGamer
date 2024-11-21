
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperación de contraseña</title>
    <link rel="stylesheet" href="style-recuperar.css">
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
        <!---------------------------------------Recuperar contraseña----------------------------------------------->

        <div class="row login justify-content-center">

            <div class="col-md-6">
                <div class="titulo">
                    <h2>Recuperar contraseña</h2>
                </div>

                <?php
                include('conexion.php');
                $message = '';

                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['iniciarbtn'])) {
                    $correo = filter_input(INPUT_POST, 'correo', FILTER_SANITIZE_EMAIL);

                    if ($correo) {
                        
                        $stmt = $conexion->prepare("SELECT correo FROM subscriptores WHERE correo = ?");
                        $stmt->bind_param("s", $correo);
                        $stmt->execute();
                        $resultado = $stmt->get_result();

                        if ($resultado->num_rows > 0) {
                            
                            header("Location: recuperar2.php");
                            exit();
                        } else {
                            
                            $message = "El correo no está registrado.";
                        }

                        $stmt->close();
                    } else {
                        $message = "Por favor, ingresa un correo válido.";
                    }

                    $conexion->close();
                }
                ?>

                
                <form method="POST" action="">
                    
                    <div class="mb-3">
                        <li>Ingrese su correo para recuperar su contraseña</li>
                        <div class="input-group">
                            
                            <div class="input-group-text">@</div>
                            <input name="correo" type="text" class="form-control" id="autoSizingInputGroup"
                                placeholder="Correo electrónico" required>
                        </div>
                    </div>

                    <div class="login-button">
                        <button name="iniciarbtn" type="submit" class="btn1">
                            enviar
                        </button>
                    </div>
                    
                    

                </form>
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
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
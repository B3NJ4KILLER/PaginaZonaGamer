<?php

include('conexion.php');

$query = "SELECT * FROM subscriptores";
$result = $conexion->query($query);

if (!$result) {
    die("Error en la consulta: " . $conexion->error);
}

?>

<?php
include('conexion.php'); 


$busqueda = '';


if (isset($_GET['busqueda'])) {
    $busqueda = $_GET['busqueda'];

    
    $query = "SELECT * FROM subscriptores WHERE nombre LIKE ?";
    $stmt = $conexion->prepare($query);
    $searchTerm = "%" . $busqueda . "%"; 
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    
    $query = "SELECT * FROM subscriptores";
    $result = $conexion->query($query);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscriptores</title>
    <link rel="stylesheet" href="style-subscriptores.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


</head>

<body>

    <video src="fondo.mp4" autoplay preload muted loop></video>

    <!---------------------------------------Container principal-------------------------------------->
    <br>
    <div class="container-fluid">
    

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

        
        <div class="titulo-subs">
            <h1>Subscriptores Actuales</h1>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand">
                <button class="btn btn-success" onclick="location.href='registro2.php'">
                    <i class="bi bi-person-fill-add"></i> Añadir nuevo subscriptor
                </button>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarContent">
                    <form class="d-flex ms-auto" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar Subscriptor"
                            aria-label="Search" name="busqueda">
                        <button class="btn btn-outline-primary" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-------------------------------------Tabla------------------------------------------------->

        


        <div class="container-xxl tablaa">
            <table class="table table-dark table-hover table-bordered">
                
                <thead class="table-striped table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Usuario</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Género</th>
                        <th>Fecha de nacimiento</th>
                        <th>Direccion</th>
                        <th>N° Departamento</th>
                        <th>Contraseña</th>
                        <th>Editar</th> 
                        <th>Eliminar</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    
                    while ($fila = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<tr>";
                        echo "<th>" . $fila['id'] . "</th>";
                        echo "<td>" . $fila['nombre'] . "</td>";
                        echo "<td>" . $fila['apellidos'] . "</td>";
                        echo "<td>" . $fila['usuario'] . "</td>";
                        echo "<td>" . $fila['telefono'] . "</td>";
                        echo "<td>" . $fila['correo'] . "</td>";
                        echo "<td>" . $fila['genero'] . "</td>";
                        echo "<td>" . $fila['fecha'] . "</td>";
                        echo "<td>" . $fila['direccion'] . "</td>";
                        echo "<td>" . $fila['numdepa'] . "</td>";
                        echo "<td>" . $fila['password'] . "</td>";

                        echo "<td>";

                        echo "<a href='registro.php?id=" . $fila['id'] . "' class='btn btn-info'><i class='fas fa-edit'></i></a>";
                        echo "<td>" . "<button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#deleteModal" . $fila['id'] . "'><i class='fas fa-trash-alt'></i></button>" . "</td>";

                        //----------------------MODAL---------------------//
                        echo "
                        <div class='modal fade' id='deleteModal" . $fila['id'] . "' tabindex='-1' aria-labelledby='deleteModalLabel" . $fila['id'] . "' aria-hidden='true'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='deleteModalLabel" . $fila['id'] . "'>Confirmar Eliminación</h5>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body'>
                                        ¿Estás seguro de que deseas eliminar al subscriptor <strong>" . $fila['nombre'] . " " . $fila['apellidos'] . "</strong>?
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                                        <a href='eliminar.php?id=" . $fila['id'] . "' class='btn btn-danger'>Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>";

                        echo "</tr>";
                        echo "</tr>";
                        echo "</tr>";
                    }
                    ?>

                </tbody>
            </table>
            
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
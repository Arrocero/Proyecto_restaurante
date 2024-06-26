<?php
include 'php/connection.php';
session_start();
//Si ingreso sin haber ingresado el usuario entonces no me permitirá estar en esta página
if (!isset($_SESSION['usuario'])) {
    $titulo = "<span class='restaurant_name'>La Trattoria Secreta</span>";
} else {
    $user = $_SESSION['usuario'];
    $sql = "SELECT nombre_completo FROM clientes WHERE usuario = '$user'";
    $resultado = $connection->query($sql);
    $row = $resultado->fetch_assoc();
    $nombre_completo = $row['nombre_completo'];
    $titulo = "<span class='restaurant_name'>La Trattoria Secreta</span>";
//    "<span style='color: white; text-decoration:none;'>Bienvenido(a) $nombre_completo a </span><span style='text-decoration: underline #FFB100'>La Trattoria Secreta</span>";
}
$connection->close();
?>;

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>La Trattoria Secreta | Home</title>
        <link rel="stylesheet" href="css/home.css" />
        <link rel="stylesheet" href="css/main.css" />
        <?php include 'fragments/head_links.php'; ?>
    </head>

    <body class="bg-black">
        <header>
            <nav class="navbar navbar-expand-xl pt-2 px-4">
                <div class="container-fluid">
                    <!--                                <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                                        <i class="bx bx-menu-alt-left"></i>
                                                    </button>-->
                    <span><img src="assets/img/logo.png" alt="logo"/></span><h1 class="titulo">
                        <?php
                        echo $titulo;
                        ?>
                    </h1>
                </div>
            </nav>
        </header>
        <main class="main_bienvenida">
            <!--<!-- Agregar imagen con respecto a los comensales  -->
            <img class="img_bienvenida" src="assets/img/mov_bienvenida.jpg" alt="imagen_bienvenida"/>
            <div class="texto_1">
                <div class="cuadrito_texto_bienvenida">
                    <p class="p1_bienvenida text-light" style="font-size: 32px">¡Bienvenid@!</p>
                    <p class="p2 text-warning"><?php echo utf8_decode($row['nombre_completo']); ?></p>
                    <p class="mensajito_bienvenida" style="color: white;" >Gracias por unirte a La Trattoria Secreta. Estamos 
                        emocionados de compartir nuestros deliciosos platos variados contigo. ¡Disfruta de una experiencia 
                        culinaria inolvidable!</p>
                    <p class="p3">¡Vamos al home!</p>
                    <a class="button_menu" href="index.php">Home</a>
                </div>
            </div>

            <!--            <div class="food_1">
                            <img src="assets/img/food_1.png" class="img_top" alt="Plato de tostada con huevo y palta" />
                        </div>-->


        </main>

        <footer class="index_footer">
            <div class="contenedor_curve_bienvenida">
                <div class="redes_bienvenido">
                    <a href="https://www.facebook.com/" target="blank"><i class="bx bxl-facebook-circle"></i></a>
                    <a href="https://www.instagram.com/" target="blank"><i class="bx bxl-instagram-alt"></i></a>
                    <a href="https://www.whatsapp.com/?lang=es_LA" target="blank"><i class="bx bxl-whatsapp"></i></a>
                </div>
                <div class="derechos">
                    &copy; 2024 - La Trattoria Secreta
                </div>
                <div class="elemento_amarillo_bienvenida"></div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="./js/login_signup.js"></script>
    </body>

</html>

<!-- Parte del nav
                                </h1>
                                 <a class="logout" href="php/close_session.php" onclick=""><i class='bx bx-exit'></i></a> 
                                <div class="nav_icons icons_initial">
                                    <a href="menu.php"><i class="bx bx-cart"></i></a>
                                    <a class="user_login">
                                    </a>
                                </div>
            
            
            
                                <div class="collapse navbar-collapse primera_ul" id="navbarTogglerDemo01">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link text-light active_home">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="about.php" class="nav-link">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="menu.php" class="nav-link">Menu</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="location.php" class="nav-link">Location</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="reservations.php" class="nav-link">Reservations</a>
                                        </li>
                                    </ul>
                                </div>
                                
                                 <a class="login" href="php/close_session.php"><i class='bx bx-exit'></i></a> 
                                <div class="nav_icons icons_xl">
                                    <a href="menu.php"><i class="bx bx-cart"></i></a>
                                    <a class="user_login">
                                    </a>
                                </div>
                            </div>
                        </nav>-->



<!--FOOTER           
<div class="boxes_footer">
                <div>
                    <h3><i class="bx bxs-trophy"></i> Mejor Restaurante</h3>
                    <p>
                        Nuestro restaurante ha sido premiado por 5to año consecutivo como
                        mejor restaurante nacional.
                    </p>
                </div>
                <div>
                    <h3><i class="bx bxs-medal"></i> Mejores Cheffs</h3>
                    <p>
                        Nuestro restaurante es reconocido por la gran categoría que hay por
                        parte de los chefs.
                    </p>
                </div>
            </div>-->
<!--            <div class="dir_registrarse_login">
                <h4>
                    ¡Hola! ¿Quieres sacar el máximo provecho de nuestro sitio? Regístrate
                    o inicia sesión para comenzar.
                </h4>
                <div>
                    <a href="index.php">Vamos</a>
                </div>
            </div>-->
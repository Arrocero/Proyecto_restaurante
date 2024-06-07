<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/about.css" />
  <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
  <title>La Trattoria Secreta | About</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/table.css" />
  <link rel="stylesheet" href="css/main.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
<?php require_once iconos.php?>
  <header style="background-color: black;">
    <nav class="navbar navbar-expand-xl pt-4 px-4">
      <div class="curve_header"></div>
      <div class="container-fluid">
        <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bx bx-menu-alt-left"></i>
        </button>
        <span class="restaurant_name">La Trattoria Secreta</span>
        <div class="nav_icons icons_initial">
          <a href="menu.php"><i class="bx bx-cart"></i></a>
          <a class="user_login">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a href="home.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-light active">About</a>
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
        <div class="nav_icons icons_xl">
          <a href="menu.php"><i class="bx bx-cart"></i></a>
          <a class="user_login">
          </a>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="apartado_principal">
      <div class="contenedor_principal">
        <div class="texto_principal">
          <h2>Nuestra Historia</h2>
          <a href="#history" class="btn_init">Comenzar</a>
        </div>
        <video autoplay loop muted class="video">
          <source src="assets/video/video_about.mp4" />
        </video>
      </div>
    </div>
    <section>
      <div class="logo">
        <img src="assets/img/logo.png" alt="Logo de Trattoria Secreta" />
      </div>
      <div>
        <p><b>Platos Destacados</b></p>
        <table>
          <thead>
            <tr>
              <th>Puesto</th>
              <th>Nombre</th>
              <th>Descripcion</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>01</td>
              <td>Risotto de Champiñones y Trufa</td>
              <td>
                Arroz carnaroli cocido lentamente en un caldo de champiñones y
                vino blanco, terminado con parmesano rallado, aceite de trufa
                y champiñones salteados.
              </td>
            </tr>
            <tr>
              <td>02</td>
              <td>Pasta Fresca con Mariscos en Salsa de Azafrán</td>
              <td>
                Fettuccine fresco cocido al dente, mezclado con una selección
                de mariscos frescos en una cremosa salsa de azafrán, adornado
                con perejil fresco picado.
              </td>
            </tr>
            <tr>
              <td>03</td>
              <td>Ceviche Mixto Peruano</td>
              <td>
                Una fresca combinación de pescado blanco y mariscos marinados
                en jugo de limón, con cebolla roja, cilantro y ají, servido
                con maíz cancha y camote asado.
              </td>
            </tr>
            <tr>
              <td>04</td>
              <td>Pato Confitado con Puré de Calabaza y Jengibre</td>
              <td>
                Muslo de pato confitado a la perfección, servido sobre un puré
                suave de calabaza y jengibre, acompañado de brócoli al vapor y
                salsa de naranja agria.
              </td>
            </tr>
          </tbody>
          <tr>
            <td>05</td>
            <td>Ensalada de Burrata con Tomate Kumato y Albahaca</td>
            <td>
              Burrata fresca sobre una cama de tomates Kumato maduros y
              albahaca fresca, aliñada con aceite de oliva virgen extra y
              reducción de vinagre balsámico.
            </td>
          </tr>
        </table>
      </div>
    </section>

    <section>
      <div id="history">
        <p><b>Acerca de</b></p>
        <h2>La Trattoria Secreta</h2>
        <p>
          La Trattoria Sescreat comenzó como un modesto sueño de una familia
          peruana, arraigada en la rica tradición culinaria de su país. Con el
          tiempo, este pequeño restaurante se ha transformado en un verdadero
          gigante gastronómico.
        </p>
        <p>
          Desde sus humildes comienzos, La Trattoria Sescreat ha sido testigo
          de un crecimiento vertiginoso, acumulando premios y reconocimientos
          a lo largo de los años. Su chef principal, un talento culinario en
          ascenso, ha sido fundamental en este proceso, fusionando la esencia
          de la cocina peruana con toques italianos para crear una propuesta
          gastronómica única y emocionante.
        </p>
        <p>
          Hoy en día, La Trattoria Sescreat es mucho más que un simple
          restaurante: es un símbolo de la pasión y la dedicación de una
          familia por la cocina, un lugar donde los comensales pueden
          deleitarse con auténticos sabores peruanos en un ambiente acogedor y
          familiar.
        </p>
        <a href="location.php" class="btn_location">Encuentranos</a>
      </div>

      <div class="imagenes_nosotros">
        <div class="imagen1" style="display:flex; justify-content: end; align-items: center;">
          <img src="assets/img/about_1.jpg" alt="Mesero sirviendo platillos en el restaurante" />
        </div>
        <div class="imagen2">
          <img src="assets/img/about_2.jpg" alt="Personas comiendo en el restaurante" />
          <img src="assets/img/about_3.jpg" alt="Imagen del restaurante" />
        </div>
      </div>
    </section>
    <section>
      <div class="logo">
        <img src="assets/img/about_4.png" alt="Grupo de personas del restuaurante en una reunión" />
      </div>

      <div>
        <p><b>Fundadores de</b></p>
        <h2>La Trattoria Secreta</h2>
        <p><b>1. Mateo Rodríguez Delgado: </b></p>
        <p>
          Conocido por su habilidad para capturar los sabores auténticos de la
          cocina peruana, Mateo Rodríguez Delgado es el líder visionario
          detrás de La Trattoria Sescreat. Su pasión por la gastronomía
          peruana se refleja en cada plato que crea, fusionando técnicas
          tradicionales con toques modernos e innovadores.
        </p>
        <p><b>2. Valentina López Mendoza:</b></p>
        <p>
          Como una experta en la fusión de sabores y técnicas culinarias,
          Valentina López Mendoza aporta una creatividad excepcional al equipo
          de La Trattoria Sescreat. Su enfoque en la frescura de los
          ingredientes y la presentación impecable hace que cada plato sea una
          obra maestra culinaria.
        </p>
        <p><b>3. Santiago Díaz Castro:</b></p>
        <p>
          Es reconocido por su capacidad para experimentar con ingredientes
          locales y exóticos, creando platos que sorprenden y deleitan a los
          comensales. Su talento innato para equilibrar sabores y texturas ha
          sido fundamental en el éxito de La Trattoria Sescreat.
        </p>
      </div>
    </section>
  </main>
  
  <footer class="about_footer">
    <div class="footer_icons">
      <a href="https://www.facebook.com/?locale=es_LA" target="blank"><i class="bx bxl-facebook-circle"></i></a>
      <a href="https://www.instagram.com/" target="blank"><i class="bx bxl-instagram"></i></a>
      <a href="https://www.tiktok.com/es/" target="blank"><i class="bx bxl-tiktok"></i></a>
    </div>
  </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="js/login_signup.js"></script>
</body>

</html>
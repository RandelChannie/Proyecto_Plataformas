html
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pinturas - INTI MUNAY</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="estilos/estilopagina.css">
  <link rel="stylesheet" href="estilos/estilopintura.css">
</head>
<body>
  <!-- Barra de navegación -->
  <nav class="navbar">
    <div class="navbar-container">
      <a href="pagina.php" class="logo">INTI MUNAY</a>
      <ul class="nav-links">
        <li><a href="pagina.php">Inicio</a></li>
        <li><a href="#">Cerámica</a></li>
        <li><a href="#">Textiles</a></li>
        <li><a href="pintura.php">Pinturas</a></li>
        <li><a href="#">Información</a></li>
        <li><a href="#">Trabajos</a></li>
        <li><a href="login.php" class="login-btn">Iniciar sesión</a></li>
      </ul>
    </div>
  </nav>

  <!-- Banner de pinturas -->
  <section class="pintura-banner">
    <div class="banner-content">
      <h1>Pinturas INTI MUNAY</h1>
      <p>"Cada trazo cuenta una historia, cada color expresa una emoción"</p>
    </div>
  </section>

  <!-- Sección de artesanos -->
  <section class="artesanos">
    <h2>Nuestros Artesanos</h2>
    <div class="artesanos-container">
      <!-- Artesano 1 -->
      <div class="artesano-card">
        <img src="imagenes/art1.jpeg" alt="Artesano Juan Pérez">
        <h3>Juan Pérez</h3>
        <p>Especialista en pintura tradicional andina con más de 20 años de experiencia.</p>
        <a href="#" class="btn-trabajos">Ver trabajos</a>
      </div>
      
      <!-- Artesano 2 -->
      <div class="artesano-card">
        <img src="imagenes/art2.jpeg" alt="Artesana Mario Acuña">
        <h3>María González</h3>
        <p>Maestra en técnicas mixtas y pintura contemporánea inspirada en culturas ancestrales.</p>
        <a href="#" class="btn-trabajos">Ver trabajos</a>
      </div>
      
      <!-- Artesano 3 -->
      <div class="artesano-card">
        <img src="imagenes/art3.jpeg" alt="Artesano Carlos Mamani">
        <h3>Carlos Mamani</h3>
        <p>Experto en muralismo y pintura con pigmentos naturales.</p>
        <a href="#" class="btn-trabajos">Ver trabajos</a>
      </div>
    </div>
  </section>

</body>
</html>
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
  <!-- Barra de navegación (sin cambios) -->
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

  <!-- Banner principal (sin cambios) -->
  <section class="pintura-banner">
    <div class="banner-content">
      <h1>Pinturas INTI MUNAY</h1>
      <p>"Cada trazo cuenta una historia, cada color expresa una emoción"</p>
    </div>
  </section>

  <!-- Sección de artesanos (con enlaces actualizados) -->
  <section class="artesanos">
    <h2>Nuestros Artesanos</h2>
    <div class="artesanos-container">
      <!-- Artesano 1 -->
      <div class="artesano-card">
        <img src="imagenes/art1.jpeg" alt="Artesano Juan Pérez">
        <h3>Juan Pérez</h3>
        <p class="especialidad">Maestro en pintura tradicional</p>
        <div class="descripcion">
          <p>Originario de Cusco, Juan domina técnicas ancestrales de pintura con pigmentos naturales.</p>
        </div>
        <a href="trabajos.php?artista=juan_perez" class="btn-trabajos">Ver trabajos</a>
      </div>
      
      <!-- Artesano 2 -->
      <div class="artesano-card">
        <img src="imagenes/artM.jpeg" alt="Artesana María González">
        <h3>María González</h3>
        <p class="especialidad">Experta en técnicas mixtas</p>
        <div class="descripcion">
          <p>Formada en la Escuela de Bellas Artes de Lima, María fusiona acrílicos, óleos y materiales reciclados.</p>
        </div>
        <a href="trabajos.php?artista=maria_gonzalez" class="btn-trabajos">Ver trabajos</a>
      </div>
      
      <!-- Artesano 3 -->
      <div class="artesano-card">
        <img src="imagenes/art3.jpeg" alt="Artesano Carlos Mamani">
        <h3>Carlos Mamani</h3>
        <p class="especialidad">Muralista y paisajista</p>
        <div class="descripcion">
          <p>Carlos transforma espacios urbanos con murales que narran historias comunitarias.</p>
        </div>
        <a href="trabajos.php?artista=carlos_mamani" class="btn-trabajos">Ver trabajos</a>
      </div>
    </div>
  </section>
</body>
</html>
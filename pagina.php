<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>INTI MUNAY - Arte que inspira</title>
  <style>
    /* Estilos generales */
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      color: #333;
    }
    
    /* Barra de navegación */
    .navbar {
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      padding: 15px 0;
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
    }
    
    .navbar-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    
    .logo {
      font-size: 24px;
      font-weight: bold;
      color: #d35400;
      text-decoration: none;
    }
    
    .nav-links {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
    }
    
    .nav-links li {
      margin-left: 25px;
    }
    
    .nav-links a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      transition: color 0.3s;
    }
    
    .nav-links a:hover {
      color: #d35400;
    }
    
    /* Banner principal con imagen de fondo local */
    .banner {
      background-image: url('img/arte1.jpg');
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
      position: relative;
      margin-top: 60px; /* Para compensar la navbar fija */
    }
    
    .banner::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
    }
    
    .banner-content {
      position: relative;
      z-index: 1;
      max-width: 800px;
      padding: 0 20px;
    }
    
    .banner h1 {
      font-size: 48px;
      margin-bottom: 20px;
      color: #fff;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }
    
    .banner p {
      font-size: 24px;
      line-height: 1.6;
      color: #fff;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
    }
    
    /* Sección de categorías */
    .categorias {
      padding: 80px 0;
      text-align: center;
      background-color: #f9f9f9;
    }
    
    .categorias h2 {
      font-size: 36px;
      margin-bottom: 50px;
      color: #d35400;
    }
    
    .categorias-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 0 auto;
      gap: 30px;
    }
    
    .categoria {
      background-color: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      width: 300px;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .categoria:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }
    
    .categoria h3 {
      font-size: 24px;
      margin-bottom: 15px;
      color: #333;
    }
    
    .categoria img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 5px;
      margin-bottom: 15px;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
      .navbar-container {
        flex-direction: column;
        padding: 10px;
      }
      
      .nav-links {
        margin-top: 15px;
        flex-wrap: wrap;
        justify-content: center;
      }
      
      .nav-links li {
        margin: 5px 10px;
      }
      
      .banner h1 {
        font-size: 36px;
      }
      
      .banner p {
        font-size: 18px;
      }
      
      .categorias-container {
        flex-direction: column;
        align-items: center;
      }
      
      .categoria {
        width: 80%;
      }
    }
  </style>
</head>
<body>
  <!-- Barra de navegación -->
  <nav class="navbar">
    <div class="navbar-container">
      <a href="#" class="logo">INTI MUNAY</a>
      <ul class="nav-links">
        <li><a href="#">Inicio</a></li>
        <li><a href="ceramica.php">Cerámica</a></li>
        <li><a href="#">Textiles</a></li>
        <li><a href="#">Pinturas</a></li>
        <li><a href="#">Información</a></li>
        <li><a href="trabajos.php">Trabajos</a></li>
        <li><a href="login.php" class="login-btn">Iniciar sesión</a></li>
      </ul>
    </div>
  </nav>

  <!-- Banner principal con imagen de fondo local -->
  <section class="banner">
    <div class="banner-content">
      <h1>INTI MUNAY</h1>
      <p>"Transforma tu espacio con una obra única: el arte no solo decora, ¡inspira tu vida también!"</p>
    </div>
  </section>

  <!-- Sección de categorías -->
  <section class="categorias">
    <h2>Nuestras Creaciones</h2>
    <div class="categorias-container">
      <!-- Categoría Cerámica -->
      <div class="categoria">
        <img src="img/c.jpg" alt="Cerámica INTI MUNAY">
        <h3>Cerámica</h3>
        <p>Arte tradicional con diseños modernos, cada pieza cuenta una historia única.</p>
        <a href="ceramica.php" class="btn">Ver más</a>
      </div>
      
      <!-- Categoría Textiles -->
      <div class="categoria">
        <img src="img/t.jpg" alt="Textiles INTI MUNAY">
        <h3>Textiles</h3>
        <p>Tejidos artesanales que combinan técnicas ancestrales con diseños contemporáneos.</p>
        <a href="#" class="btn">Ver más</a>
      </div>
      
      <!-- Categoría Pinturas -->
      <div class="categoria">
        <img src="img/p.jpg" alt="Pinturas INTI MUNAY">
        <h3>Pinturas</h3>
        <p>Obras originales que capturan la esencia de nuestra cultura y naturaleza.</p>
        <a href="#" class="btn">Ver más</a>
      </div>
    </div>
  </section>

  <!-- Aquí irían las demás secciones del sitio -->
  
</body>
</html>
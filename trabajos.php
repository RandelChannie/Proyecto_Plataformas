<?php
// ----------------------------------------------------------------
// Configuración de la URL base para el sitio
// Se verifica si el protocolo es HTTPS, si no se usa HTTP
// Se concatena con el nombre del host (localhost o tu dominio)
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

// ----------------------------------------------------------------
// Definición de los datos de los artesanos
// Cada artesano tiene: nombre, especialidad, descripción y una lista de trabajos (obras)
$artistas = [
    'juan_perez' => [
        'nombre' => 'Juan Pérez',
        'especialidad' => 'Pintura tradicional andina',
        'descripcion' => 'Maestro en técnicas ancestrales con pigmentos naturales.',
        'trabajos' => [
            [
                'titulo' => 'Cosecha Sagrada',
                'imagen' => $base_url.'/imagenes/TrabajoJuan/cosecha.jpeg', // Ruta completa a imagen
                'descripcion' => 'Óleo sobre lienzo - 2022'
            ],
            [
                'titulo' => 'Guardianes de los Andes',
                'imagen' => $base_url.'/imagenes/TrabajoJuan/guardia.jpeg',
                'descripcion' => 'Técnica mixta - 2021'
            ]
        ]
    ],
    'maria_gonzalez' => [
        'nombre' => 'María González',
        'especialidad' => 'Técnicas mixtas contemporáneas',
        'descripcion' => 'Fusión de acrílicos, óleos y materiales reciclados.',
        'trabajos' => [
            [
                'titulo' => 'Mujeres de la Tierra',
                'imagen' => $base_url.'/imagenes/TrabajoMaria/mutierra.jpg',
                'descripcion' => 'Serie premiada en Bienal de Arte'
            ],
            [
                'titulo' => 'Raíces Urbanas',
                'imagen' => $base_url.'/imagenes/TrabajoMaria/urbana.jpeg',
                'descripcion' => 'Collage y acrílico - 2022'
            ]
        ]
    ],
    'carlos_mamani' => [
        'nombre' => 'Carlos Mamani',
        'especialidad' => 'Muralismo andino',
        'descripcion' => 'Especialista en pintura al fresco y grafiti con temática ancestral.',
        'trabajos' => [
            [
                'titulo' => 'Qhapaq Ñan Moderno',
                'imagen' => $base_url.'/imagenes/TrabajoCarlos/mode.jpeg',
                'descripcion' => 'Mural en Barranco, Lima'
            ],
            [
                'titulo' => 'Chakana Cósmica',
                'imagen' => $base_url.'/imagenes/TrabajoCarlos/chakana.jpeg',
                'descripcion' => 'Intervención urbana en Cusco'
            ]
        ]
    ]
];

// ----------------------------------------------------------------
// Captura del parámetro GET 'artista' para saber qué artesano mostrar
$artistaId = $_GET['artista'] ?? ''; // Si no existe 'artista', se asigna cadena vacía
$artista = $artistas[$artistaId] ?? null; // Se busca en el arreglo, si no existe, null

// ----------------------------------------------------------------
// Si no existe un artista válido, redirecciona de regreso a pintura.php
if (!$artista) {
    header('Location: pintura.php');
    exit; // Finaliza el script para evitar errores
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Título dinámico con el nombre del artesano -->
  <title>Trabajos de <?= htmlspecialchars($artista['nombre']) ?> | INTI MUNAY</title>
  
  <!-- Fuente Montserrat de Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap" rel="stylesheet">

  <!-- Enlace al CSS principal del sitio -->
  <link rel="stylesheet" href="<?= $base_url ?>/estilos/estilopagina.css">

  <!-- Enlace al CSS específico de la página de trabajos -->
  <link rel="stylesheet" href="<?= $base_url ?>/estilos/estilostrabajos.css">

  <style>
    /* CSS interno adicional para las imágenes de trabajos */
    .trabajo img {
      width: 100%; /* Imagen ocupa el 100% del contenedor */
      height: 250px; /* Altura fija para todas las imágenes */
      object-fit: cover; /* Recorta la imagen para que no se deforme */
      background-color: #f5f5f5; /* Fondo gris claro mientras carga */
      border: 1px solid #ddd; /* Borde gris */
    }
    
    /* Clase para imágenes con error (no cargadas) */
    .imagen-error {
      position: relative;
    }
    
    /* Texto que se superpone cuando la imagen no carga */
    .imagen-error::after {
      content: "Imagen no disponible";
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #777;
      font-size: 14px;
    }
  </style>
</head>

<body>
  <!-- Barra de navegación principal -->
  <nav class="navbar">
    <div class="navbar-container">
      <!-- Logo del sitio que vuelve a la página principal -->
      <a href="<?= $base_url ?>/pagina.php" class="logo">INTI MUNAY</a>

      <!-- Enlaces de navegación -->
      <ul class="nav-links">
        <li><a href="<?= $base_url ?>/pagina.php">Inicio</a></li>
        <li><a href="<?= $base_url ?>/pintura.php">Volver a Artesanos</a></li>
      </ul>
    </div>
  </nav>

  <!-- Sección de cabecera del artista -->
  <section class="trabajos-header">
    <h1><?= htmlspecialchars($artista['nombre']) ?></h1> <!-- Nombre del artesano -->
    <p><?= htmlspecialchars($artista['especialidad']) ?></p> <!-- Especialidad -->
  </section>

  <!-- Sección de descripción general del artesano -->
  <section class="artesano-descripcion">
    <p><?= htmlspecialchars($artista['descripcion']) ?></p>
  </section>

  <!-- Galería de trabajos del artesano -->
  <section class="trabajos-gallery">
    <div class="gallery-container">
      <?php foreach ($artista['trabajos'] as $trabajo): ?>
      <div class="trabajo">
        <!-- Contenedor de la imagen -->
        <div class="<?= strpos($trabajo['imagen'], 'placeholder') !== false ? 'imagen-error' : '' ?>">
          <img src="<?= htmlspecialchars($trabajo['imagen']) ?>" 
               alt="<?= htmlspecialchars($trabajo['titulo']) ?>"
               onerror="this.src='<?= $base_url ?>/imagenes/placeholder.jpg'; this.parentElement.classList.add('imagen-error')">
          <!-- 
            Si la imagen no carga:
              1. Cambia a placeholder.jpg
              2. Agrega la clase imagen-error para mostrar "Imagen no disponible"
          -->
        </div>

        <!-- Título del trabajo -->
        <h3><?= htmlspecialchars($trabajo['titulo']) ?></h3>

        <!-- Descripción del trabajo -->
        <p><?= htmlspecialchars($trabajo['descripcion']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Script para manejar errores de carga de imágenes en JS puro -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll('.trabajo img').forEach(img => {
        img.onerror = function() {
          this.src = '<?= $base_url ?>/imagenes/placeholder.jpg';
          this.parentElement.classList.add('imagen-error');
        };
      });
    });
  </script>
</body>
</html>

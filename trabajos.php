<?php
// trabajos.php
include('conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTI MUNAY - Trabajos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .header {
            background-color: white; /* Fondo blanco */
            color:rgb(219, 119, 49); /* Color naranja para el título */
            padding: 15px 20px; /* Reducir un poco el padding vertical */
            display: flex;
            justify-content: space-between; /* Título a la izquierda, menú a la derecha */
            align-items: center; /* Centrar verticalmente */
            max-width: 1500px; /* Para que coincida con el content */
            margin: 0 auto; /* Centrar el header */
        }
        .header h1 {
            margin: 0; /* Eliminar margen predeterminado del h1 */
            font-size: 1.5em; /* Ajustar tamaño del título */
        }
        .menu {
            display: flex;
            padding: 0; /* Eliminar padding predeterminado del menú */
            background-color: transparent; /* Fondo transparente */
        }
        .menu a {
            color: #333; /* Color de texto más oscuro para los enlaces */
            text-decoration: none;
            padding: 4px 10px; /* Reducir el padding de los enlaces */
            margin-left: 15px; /* Aumentar el espacio entre enlaces */
            text-transform: capitalize; /* Capitalizar la primera letra */
            border-radius: 0; /* Sin bordes redondeados */
            transition: color 0.3s; /* Transición solo para el color */
        }
        .menu a:hover {
            color: rgb(219, 119, 49); /* Color naranja al hacer hover */
        }
        .menu a.active {
            color: rgb(219, 119, 49); /* Color naranja para el botón activo */
            /* Puedes añadir un estilo de fondo si lo deseas, por ejemplo: */
            /* background-color: #f0f0f0; */
        }
        .content {
            padding: 20px;
            min-height: 60vh;
            max-width: 960px; /* Ancho similar al de la imagen */
            margin: 20px auto; /* Centrar el contenido con un poco de margen superior */
            background-color: white; /* Fondo blanco para el contenido */
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color:rgb(203, 84, 0); /* Título en naranja */
            text-align: center;
            padding: 20px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        .user-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
        }
        .user-info h3 {
            color: #555;
            margin: 0;
            font-size: 1.2em;
        }
        .publication {
            padding: 20px;
            display: flex;
            gap: 20px;
            align-items: flex-start;
            border-bottom: 1px solid #eee;
        }
        .publication:last-child {
            border-bottom: none;
        }
        .publication-image {
            max-width: 200px;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }
        .publication-details {
            flex-grow: 1;
        }
        .publication-title {
            color: #8B4513; /* Marrón para el título de la publicación */
            font-size: 1.1em;
            margin-top: 0;
            margin-bottom: 10px;
        }
        .publication-description {
            color: #666;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>INTI MUNAY</h1>
        <nav class="menu">
            <a href="pagina.php">Inicio</a>
            <a href="ceramica.php">Ceramica</a>
            <a href="textiles.php">Textiles</a>
            <a href="pinturas.php">Pinturas</a>
            <a href="informacion.php">Información</a>
            <a href="trabajos.php" class="active">Trabajos</a>
        </nav>
    </div>

    <div class="content">
        <h2>Trabajos Recientes</h2>

        <div class="user-info">
            <h3>Nombre del usuario</h3>
            <div>&#9660;</div> </div>

        <div class="publication">
            <img src="img/cara2.jpg" alt="Publicación 1" class="publication-image">
            <div class="publication-details">
                <h4 class="publication-title">Publicación 1</h4>
                <p class="publication-description">Descripción de la publicación 1. Aquí puedes añadir detalles sobre el trabajo realizado, los materiales utilizados, la inspiración, etc.</p>
            </div>
        </div>

        <div class="publication">
            <img src="img/cera1.jpg" alt="Publicación 2" class="publication-image">
            <div class="publication-details">
                <h4 class="publication-title">Publicación 2</h4>
                <p class="publication-description">Descripción de la publicación 2. Similar a la anterior, proporciona información relevante sobre este trabajo.</p>
            </div>
        </div>

        </div>
</body>
</html>
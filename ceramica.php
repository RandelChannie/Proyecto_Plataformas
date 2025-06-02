<?php
// ceramica.php
include('conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTI MUNAY - Cerámica</title>
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
            max-width: 1200px;
            margin: 0 auto;
        }
        h1, h2 {
            color:rgb(203, 84, 0); /* Títulos en naranja */
            text-align: center;
        }

        /* Estilos para la imagen destacada */
        .hero-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 8px;
            margin: 20px 0;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        /* Estilos para la sección de artesanos */
        .artesanos-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }
        .artesano-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 300px;
            padding: 20px;
            text-align: center;
        }
        .artesano-nombre {
            font-size: 22px;
            color:rgb(209, 95, 13); /* Mantenemos el marrón para el nombre */
            margin-bottom: 10px;
            font-weight: bold;
        }
        .artesano-imagen {
            width: 200px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 15px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .artesano-descripcion {
            color: #555;
            margin-bottom: 15px;
            line-height: 1.5;
        }
        .artesano-trabajos {
            font-style: italic;
            color: #8B4513; /* Mantenemos el marrón para los trabajos */
            margin-bottom: 15px; /* Añadimos un poco de espacio debajo */
        }

        /* Estilos para el botón "Trabajos" */
        .ver-trabajos {
            display: inline-block;
            padding: 8px 15px;
            background-color:rgb(185, 75, 24); /* Un tono marrón similar al menú */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px; /* Espacio entre el texto de trabajos y el botón */
        }

        .ver-trabajos:hover {
            background-color: #8B4513; /* Un tono marrón más oscuro al hacer hover */
        }

        /* Botón restablecer/volver */
        .btn-container {
            text-align: center;
            margin: 30px 0;
        }
        .btn-volver {
            display: inline-block;
            padding: 10px 20px;
            background-color: #D2691E; /* Botón en naranja */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-volver:hover {
            background-color: #A0522D; /* Hover vuelve a un marrón */
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>INTI MUNAY</h1>
        <nav class="menu">
            <a href="pagina.php">Inicio</a>
            <a href="ceramica.php" class="active">Ceramica</a>
            <a href="textiles.php">Textiles</a>
            <a href="pinturas.php">Pinturas</a>
            <a href="informacion.php">Información</a>
            <a href="trabajos.php">Trabajos</a>
        </nav>
    </div>

    <div class="content">
        <h2>Cerámica Artesanal</h2>

        <img src="img/ceramica.jpg" alt="Cerámica artesanal INTI MUNAY" class="hero-image">

        <div class="artesanos-container">
            <div class="artesano-card">
                <div class="artesano-nombre">Juan Pérez</div>
                <img src="img/cera.jpg" alt="Foto de Juan Pérez" class="artesano-imagen">
                <div class="artesano-descripcion">
                    Maestro alfarero con más de 20 años de experiencia en técnicas tradicionales.
                </div>
                <div class="artesano-trabajos">
                </div>
                <a href="trabajos.php" class="ver-trabajos">Trabajos</a>
            </div>

            <div class="artesano-card">
                <div class="artesano-nombre">María González</div>
                <img src="img/cerami.jpg" alt="Foto de María González" class="artesano-imagen">
                <div class="artesano-descripcion">
                    Especialista en cerámica utilitaria con diseños contemporáneos.
                </div>
                <div class="artesano-trabajos">

                </div>
                <a href="trabajos.php" class="ver-trabajos">Trabajos</a>
            </div>
        </div>

        <div class="btn-container">
            <a href="pagina.php" class="btn-volver">Volver a la página principal</a>
        </div>
    </div>
</body>
</html>
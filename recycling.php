<?php
session_start(); // Inicia la sesión para verificar si el usuario está logueado
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reciclaje Tecnológico</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div id="particles-js"></div> 
<header>
        <nav id="menu">
            <div id="header-container">
                <img id="header-icon" src="klipartz.com.png" alt="Icono" />
                <h1 id="animated-header">HOPE-ACADEMY-ORG</h1>
            </div>
            <ul id="lista">
                <li><a href="nuevoinicio.php">Inicio</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
<main>
    <h2 id="titulo">Reciclaje Tecnológico</h2>
    <div id="articles-container">
        <article class="recycling-article">
            <h3>Beneficios del reciclaje tecnológico</h3>
            <ul class="styled-list">
                <li>Reduce la contaminación ambiental.</li>
                <li>Conserva los recursos naturales.</li>
                <li>Disminuye la emisión de gases de efecto invernadero.</li>
                <li>Ahorra energía.</li>
                <li>Crea empleos verdes.</li>
            </ul>
        </article>
        <article class="recycling-article">
            <h3>Cómo reciclar</h3>
            <ul class="styled-list">
                <li>Depositar los residuos en los Puntos Limpios o en los comercios de venta de aparatos.</li>
                <li>Utilizar contenedores de reciclaje para distintos tipos de residuos electrónicos.</li>
                <li>Participar en programas de recogida.</li>
            </ul>
        </article>
        <article class="recycling-article">
            <h3>Impacto ambiental de los residuos electrónicos</h3>
            <p>Los residuos electrónicos contienen sustancias tóxicas y metales pesados como mercurio, cromo y plomo. Si no se reciclan adecuadamente, los componentes de los dispositivos electrónicos pueden filtrarse al suelo y al agua, provocando graves daños a los ecosistemas y la salud humana.</p>
        </article>
        <article class="recycling-article">
            <h3>Desafíos del reciclaje tecnológico</h3>
            <ul class="styled-list">
                <li>Gran parte de los residuos electrónicos no se recicla.</li>
                <li>Muchos de los residuos electrónicos que no se reciclan son enviados a países empobrecidos, donde terminan en vertederos.</li>
            </ul>
        </article>
    </div>
    
</main>

<script src="js/particles.min.js"></script>
<script src="js/particlesjs-config.json"></script>
</body>
</html>
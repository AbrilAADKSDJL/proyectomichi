<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Fundación Menem Zulemito</title>
    <link rel="stylesheet" href="inicioreal.css">
</head>
<body>
    <!-- Contenedor para Particles.js -->
    <div id="particles-js"></div>

    <header id="main-header">
        <nav id="menu">
            <div id="header-container">
                <img id="header-icon" src="klipartz.com.png" alt="Icono" />
                <h1 id="animated-header">FUNDACIÓN MENEM ZULEMITO</h1>
            </div>
        </nav>
    </header>

    <main id="main-content">
        <section class="items-container">
            <div class="item">
                <img src="triangulo.png" alt="Quiénes Somos" class="item-image">
                <h3>Quiénes Somos</h3>
                <p>Somos una organización dedicada a promover el bienestar social y ambiental a través de diversas iniciativas.</p>
            </div>
            <div class="item">
                <img src="corazon.png" alt="Nuestro Propósito" class="item-image">
                <h3>Nuestro Propósito</h3>
                <p>Trabajamos para crear un impacto positivo en la sociedad mediante la educación, la sostenibilidad y el apoyo comunitario.</p>
            </div>
            <div class="item">
                <img src="perro.png" alt="Metas a Lograr" class="item-image">
                <h3>Metas a Lograr</h3>
                <p>Nuestro objetivo es construir un futuro mejor, fomentando la inclusión, el reciclaje y la prevención del ciberacoso.</p>
            </div>
        </section>

        <div class="button-container">
            <a href="sliders.php" class="main-button">Ir a Inicio</a>
        </div>
    </main>

    <!-- Scripts -->
    <script src="js/particles.min.js"></script>
    <script src="js/particlesjs-config.json"></script>
    <script>
        

        document.addEventListener('DOMContentLoaded', () => {
            const header = document.getElementById('animated-header');
            const text = header.textContent;
            header.innerHTML = ''; // Limpia el contenido original

            // Divide el texto en letras y envuelve cada una en un span
            text.split('').forEach((letter, index) => {
                const span = document.createElement('span');
                span.textContent = letter;
                span.style.animationDelay = `${index * 0.1}s`; // Retraso progresivo para cada letra
                header.appendChild(span);
            });
        });
    </script>
</body>
</html>
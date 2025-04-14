<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider - Fundación Menem Zulemito</title>
    <link rel="stylesheet" href="slide.css">
</head>
<body>
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
        <div id="slider">
            <div class="slides">
                <!-- Slide 1 -->
                <div class="slide">
                    <img src="tecnologias-para-el-futuro-del-reciclaje-gneuss-lidera-evento-tecnologico-global.png" alt="Reciclaje Tecnológico">
                    <div class="content">
                        <h1>Reciclaje Tecnológico</h1>
                        <p>Explora cómo la tecnología está transformando el reciclaje y ayudando al medio ambiente.</p>
                        <a href="recycling.php" id="info-button" class="button">Más Información</a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="slide">
                    <img src="computer-5777377_1280-1140x427.webp" alt="Ciberacoso">
                    <div class="content">
                        <h1>Ciberacoso</h1>
                        <p>Aprende sobre los riesgos del ciberacoso, cómo prevenirlo y qué hacer si eres víctima de este problema creciente.</p>
                        <a href="cyberbullying.php" id="info-button2" class="button">Más Información</a>
                    </div>
                </div>
            </div>
            <div id="slider-controls">
                <button class="control" onclick="changeSlide(0)">1</button>
                <button class="control" onclick="changeSlide(1)">2</button>
            </div>
        </div>
    </main>
    <script src="slider.js"></script>
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
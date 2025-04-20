<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Fundación Menem Zulemito</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="particles-js"></div>
    <header id="contact-header">
        <nav id="menu">
            <div id="header-container">
                <img id="header-icon" src="klipartz.com.png" alt="Icono" />
                <h1 id="animated-header">FUNDACIÓN MENEM ZULEMITO</h1>
            </div>
            <ul id="lista">
                <li><a href="inicioreal.php">Inicio</a></li>
                <li><a href="contacto.php" class="active">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main id="contact-main">
        <section class="contact-form">
            <h3>Envíanos un mensaje</h3>
            <form action="send_message.php" method="post">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>
    <footer>
        <div class="contact-info">
            <h3>Contacto</h3>
            <p>Ubicación: Calle Falsa 123, Ciudad, País</p>
            <p>Teléfono: +123 456 7890</p>
            <p>Email: contacto@fundacionzulemito.org</p>
        </div>
        <p>Todos los derechos reservados Fundacion Menem ZULEMITO 2025</p>
    </footer>
    <script src="js/particles.min.js"></script>
    <script src="js/particlesjs-config.json"></script>
</body>
</html>
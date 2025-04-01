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
        <h1>FUNDACION MENEM ZULEMITO</h1>
        <ul id="lista">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="contacto.html">Contacto</a></li>
        </ul>
    </nav>
</header>
<main>
    <article>
        <h2>Reciclaje Tecnológico</h2>
        <p>El reciclaje tecnológico es el proceso de reutilizar o reprocesar dispositivos electrónicos que ya no se usan. Esto incluye computadoras, celulares, televisores, impresoras, y otros aparatos.</p>
        
        <h3>Beneficios del reciclaje tecnológico</h3>
        <ul>
            <li>Reduce la contaminación ambiental.</li>
            <li>Conserva los recursos naturales.</li>
            <li>Disminuye la emisión de gases de efecto invernadero.</li>
            <li>Ahorra energía.</li>
            <li>Crea empleos verdes.</li>
        </ul>
        
        <h3>Cómo reciclar</h3>
        <ul>
            <li>Depositar los residuos en los Puntos Limpios o en los comercios de venta de aparatos.</li>
            <li>Utilizar contenedores de reciclaje para distintos tipos de residuos electrónicos.</li>
            <li>Participar en programas de recogida.</li>
        </ul>
        
        <h3>Impacto ambiental de los residuos electrónicos</h3>
        <p>Los residuos electrónicos contienen sustancias tóxicas y metales pesados como mercurio, cromo y plomo. Si no se reciclan adecuadamente, los componentes de los dispositivos electrónicos pueden filtrarse al suelo y al agua, provocando graves daños a los ecosistemas y la salud humana.</p>
        
        <h3>Desafíos del reciclaje tecnológico</h3>
        <ul>
            <li>Gran parte de los residuos electrónicos no se recicla.</li>
            <li>Muchos de los residuos electrónicos que no se reciclan son enviados a países empobrecidos, donde terminan en vertederos.</li>
        </ul>
    </article>

    <section class="comments">
        <h3>Comentarios</h3>
        <?php if (isset($_SESSION['user_id'])): ?>
            <form action="save_comment_recycling.php" method="post">
                <label for="comment">Deja tu comentario:</label>
                <textarea id="comment" name="comment" rows="4" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        <?php else: ?>
            <p>Debes <a href="login.php">iniciar sesión</a> para dejar un comentario.</p>
        <?php endif; ?>

        <div class="comment-list">
            <?php
            // Conexión a la base de datos
            $conn = new mysqli('localhost', 'root', '', 'proyectomichi');
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            // Obtener comentarios
            $sql = "SELECT username, comment, created_at FROM comments_recycling ORDER BY created_at DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='comment'>";
                    echo "<p><strong>" . htmlspecialchars($row['username']) . "</strong> dijo:</p>";
                    echo "<p>" . htmlspecialchars($row['comment']) . "</p>";
                    echo "<p><small>" . $row['created_at'] . "</small></p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No hay comentarios aún. Sé el primero en comentar.</p>";
            }

            $conn->close();
            ?>
        </div>
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
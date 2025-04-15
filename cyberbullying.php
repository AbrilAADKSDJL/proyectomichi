<?php
session_start(); // Inicia la sesión para verificar si el usuario está logueado
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciberacoso - Fundación Menem Zulemito</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body id="cyber-page">
    <div id="particles-js"></div>
    <header id="header">
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

    <main id="cyber-main">
        <article class="cyberbullying-info">
            <h2>¿Qué es el Ciberacoso?</h2>
            <p>El ciberacoso es acoso o intimidación que ocurre a través de medios digitales...</p>
            <section>
                <h3>Definición</h3>
                <p>El ciberacoso es una forma de acoso que se lleva a cabo a través de tecnologías digitales, incluyendo:</p>
                <ul>
                    <li>Redes sociales</li>
                    <li>Plataformas de mensajería</li>
                    <li>Sitios de videojuegos</li>
                    <li>Aplicaciones de mensajería instantánea</li>
                </ul>
            </section>
            <section>
                <h3>Características principales</h3>
                <div class="cyber-features-grid">
                    <div class="cyber-feature-item">
                        <h4>Comportamiento repetitivo</h4>
                        <p>El ciberacoso suele ser un comportamiento repetitivo y continuo.</p>
                    </div>
                    <div class="cyber-feature-item">
                        <h4>Intención de causar daño</h4>
                        <p>El objetivo es atemorizar, enojar o humillar a la víctima.</p>
                    </div>
                    <div class="cyber-feature-item">
                        <h4>Formas de acoso</h4>
                        <p>Puede incluir enviar mensajes hirientes, compartir fotos o videos vergonzosos, difundir mentiras o hacerse pasar por otra persona.</p>
                    </div>
                    <div class="cyber-feature-item">
                        <h4>Anonimato</h4>
                        <p>Internet puede permitir un grado de anonimato que puede hacer que los acosadores se sientan más empoderados para actuar agresivamente.</p>
                    </div>
                </div>
            </section>
        </article>
        <section class="cyber-comments">
            <h3>Comentarios</h3>
            <button id="toggle-comments">Mostrar formulario de comentarios</button>
            <div id="comment-form-container" style="display: none;"> <!-- Contenedor oculto inicialmente -->
                <?php if (isset($_SESSION['user_id'])): ?>
                    <form action="save_comment.php" method="post">
                        <label for="cyber-comment">Deja tu comentario:</label>
                        <textarea id="cyber-comment" name="comment" rows="4" required></textarea>
                        <button type="submit">Enviar</button>
                    </form>
                <?php else: ?>
                    <p>Debes <a href="login.php">iniciar sesión</a> para dejar un comentario.</p>
                <?php endif; ?>
            </div>
            <div class="cyber-comment-list">
                <?php
                // Conexión a la base de datos
                $conn = new mysqli('localhost', 'root', '', 'proyectomichi');
                if ($conn->connect_error) {
                    die("Error de conexión: " . $conn->connect_error);
                }

                // Obtener comentarios
                $sql = "SELECT username, comment, created_at FROM comments ORDER BY created_at DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='cyber-comment'>";
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
<script src="js/particles.min.js"></script>
<script src="js/particlesjs-config2.json"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggleButton = document.getElementById('toggle-comments');
        const commentFormContainer = document.getElementById('comment-form-container');

        toggleButton.addEventListener('click', () => {
            if (commentFormContainer.style.display === 'none' || commentFormContainer.style.display === '') {
                commentFormContainer.style.display = 'block';
                toggleButton.textContent = 'Ocultar formulario de comentarios';
            } else {
                commentFormContainer.style.display = 'none';
                toggleButton.textContent = 'Mostrar formulario de comentarios';
            }
        });
    });
</script>
</body>
</html>
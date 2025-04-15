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
<body>
<div id="particles-js"></div>
<header>
    <nav id="menu">
        <h1>FUNDACION MENEM ZULEMITO</h1>
        <ul id="lista">
            <li><a href="nuevoinicio.php">Inicio</a></li>
            <li><a href="contacto.html">Contacto</a></li>
        </ul>
    </nav>
</header>
<main>
    <article class="cyberbullying-info">
        <h2>¿Qué es el Ciberacoso?</h2>
        <p>El ciberacoso es acoso o intimidación que ocurre a través de medios digitales, como redes sociales, mensajería instantánea o juegos en línea, con el objetivo de atemorizar, enojar o humillar a otra persona.</p>
        
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
            <div class="features-grid">
                <div class="feature-item">
                    <h4>Comportamiento repetitivo</h4>
                    <p>El ciberacoso suele ser un comportamiento repetitivo y continuo.</p>
                </div>
                <div class="feature-item">
                    <h4>Intención de causar daño</h4>
                    <p>El objetivo es atemorizar, enojar o humillar a la víctima.</p>
                </div>
                <div class="feature-item">
                    <h4>Formas de acoso</h4>
                    <p>Puede incluir enviar mensajes hirientes, compartir fotos o videos vergonzosos, difundir mentiras o hacerse pasar por otra persona.</p>
                </div>
                <div class="feature-item">
                    <h4>Anonimato</h4>
                    <p>Internet puede permitir un grado de anonimato que puede hacer que los acosadores se sientan más empoderados para actuar agresivamente.</p>
                </div>
            </div>
        </section>
        
        <section>
            <h3>Ejemplos comunes</h3>
            <ul class="examples-list">
                <li>Difundir mentiras o rumores sobre alguien en redes sociales.</li>
                <li>Compartir fotos o videos vergonzosos en línea.</li>
                <li>Hacerse pasar por otra persona y enviar mensajes agresivos en nombre de esa persona.</li>
                <li>Amenazar a alguien en línea.</li>
                <li>Compartir información privada de otra persona en línea (doxing).</li>
            </ul>
        </section>
        
        <section>
            <h3>Impacto emocional</h3>
            <p>El ciberacoso puede tener un impacto emocional significativo en las víctimas, especialmente en jóvenes, y puede causar:</p>
            <ul>
                <li>Ansiedad</li>
                <li>Depresión</li>
                <li>Baja autoestima</li>
                <li>En casos extremos, pensamientos suicidas</li>
            </ul>
        </section>
        
        <section>
            <h3>¿Cómo prevenirlo?</h3>
            <div class="prevention-grid">
                <div class="prevention-item">
                    <h4>Educación</h4>
                    <p>Es importante educar a los jóvenes sobre el ciberacoso y cómo prevenirlo.</p>
                </div>
                <div class="prevention-item">
                    <h4>Comunicación</h4>
                    <p>Los padres y cuidadores deben hablar con los jóvenes sobre el ciberacoso y cómo reaccionar si son víctimas.</p>
                </div>
                <div class="prevention-item">
                    <h4>Denunciar</h4>
                    <p>Si alguien es víctima de ciberacoso, debe denunciarlo a las autoridades competentes o a la plataforma donde ocurrió el acoso.</p>
                </div>
                <div class="prevention-item">
                    <h4>Apoyo</h4>
                    <p>Las víctimas de ciberacoso deben buscar apoyo de amigos, familiares o profesionales de la salud mental.</p>
                </div>
            </div>
        </section>
        
        <section class="argentina-info">
            <h3>Recursos en Argentina</h3>
            <p>Si sospechas que un niño o adolescente es víctima de grooming o explotación sexual:</p>
            <ul>
                <li>WhatsApp: <strong>11-3133-1000</strong></li>
                <li>Línea 137: Contención, orientación y acompañamiento a víctimas de violencia familiar y sexual</li>
            </ul>
        </section>
    </article>

    <section class="comments">
        <h3>Comentarios</h3>
        <?php if (isset($_SESSION['user_id'])): ?>
            <form action="save_comment.php" method="post">
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
            $sql = "SELECT username, comment, created_at FROM comments ORDER BY created_at DESC";
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

<script src="js/particles.min.js"></script>
<script src="js/particlesjs-config2.json"></script>
        
    </script>
</body>
</html>
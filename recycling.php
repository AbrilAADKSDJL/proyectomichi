<?php
require 'db_connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user_id'])) {
    $comment = $_POST['comment'];
    $user_id = $_SESSION['user_id'];
    $article = 'recycling';

    $stmt = $pdo->prepare("INSERT INTO comments (user_id, article, comment) VALUES (?, ?, ?)");
    $stmt->execute([$user_id, $article, $comment]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reciclaje Tecnológico</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body id="recycling">
<div id="particles-js"></div> 
<header id="header">
        <nav id="menu">
            <div id="header-container">
                <img id="header-icon" src="klipartz.com.png" alt="Icono" />
                <h1 id="animated-header">JAVIER MILEI-ORG</h1>
            </div>
            <ul id="lista">
                <li><a href="inicioreal.php">Inicio</a></li>
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

    <section class="recycling-comments">
        <h3>Comentarios</h3>
        <?php if (isset($_SESSION['user_id'])): ?>
            <form method="POST">
                <textarea name="comment" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        <?php else: ?>
            <p>Debes <a href="login.php">iniciar sesión</a> para dejar un comentario.</p>
        <?php endif; ?>

        <div class="recycling-comment-list">
            <?php
            $stmt = $pdo->prepare("SELECT c.comment, u.username, c.created_at FROM comments c JOIN users u ON c.user_id = u.id WHERE c.article = 'recycling' ORDER BY c.created_at DESC");
            $stmt->execute();
            $comments = $stmt->fetchAll();

            foreach ($comments as $comment) {
                echo "<p><strong>{$comment['username']}</strong>: {$comment['comment']} <em>({$comment['created_at']})</em></p>";
            }
            ?>
        </div>
    </section>
</main>

<script src="js/particles.min.js"></script>
<script src="js/particlesjs-config.json"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const articles = document.querySelectorAll('.recycling-article');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.2 });

        articles.forEach(article => observer.observe(article));
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sections = document.querySelectorAll('main > div, article');
        const navLinks = document.querySelectorAll('#menu ul li a');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    navLinks.forEach(link => link.classList.remove('active'));
                    const id = entry.target.getAttribute('id');
                    const activeLink = document.querySelector(`#menu ul li a[href="#${id}"]`);
                    if (activeLink) activeLink.classList.add('active');
                }
            });
        }, { threshold: 0.5 });

        sections.forEach(section => observer.observe(section));
    });
</script>
</body>
</html>
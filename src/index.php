<?php
include_once 'project-data.php';
// opcache_reset(); // Leert PHP-Zwischenspeicher
include 'header.php';
?>
<main>
    <div class="island-layout-container">
        <section class="island-layout">
            <h1>Herzlich Willkommen</h1>
            <h3>Mein Name ist Sebastian, diese Seite ist noch work in progress.</h3>
        </section>
    </div>

    <div class="island-layout-container">
        <section id="projects" class="island-layout">
            <h2>Meine Projekte</h2>
            <div class="project-grid">
                <?php
                foreach ($projects as $key => $einzelnesProjekt):
                    ?>
                    <article id="projects-<?php echo $key; ?>">
                        <div class="project-image">
                            <img src="<?php echo $einzelnesProjekt['image']; ?>" alt="">
                        </div>

                        <h3><?php echo htmlspecialchars($einzelnesProjekt['title']); ?></h3>
                        <p><?php echo htmlspecialchars($einzelnesProjekt['description']); ?></p>

                        <a href="details.php?id=<?php echo $key; ?>" class="btn-more">Details öffnen</a>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
    <div class="island-layout-container">
        <section id="contact" class="island-layout">
            <h2>Kontakt</h2>
            <?php include 'alerts.php'; ?>
            <p>Hast du eine Frage oder möchtest zusammenarbeiten? ...</p>

            <form class="contact-form" action="send_mail.php" method="POST">
                <div class="input-group">
                    <input type="text" name="name" placeholder="Dein Name" required>
                    <input type="email" name="email" placeholder="Deine E-Mail" required>
                </div>

                <input type="text" name="subject" placeholder="Betreff" required>
                <textarea name="message" placeholder="Deine Nachricht" rows="5" required></textarea>

                <button type="submit" class="btn-more">Nachricht senden</button>
            </form>
        </section>
    </div>
</main>
<script src="script.js"></script>
<?php include 'footer.php'; ?>
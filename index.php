<?php 
include_once 'projektdaten.php'; 
include 'header.php'; 
?>

<main>
    <div class="layout-insel-container">
        <section class="layout-insel">
            <h1>Herzlich Willkommen</h1>
            <h3>Mein Name ist Sebastian, diese Seite ist noch work in progress.</h3>
        </section>
    </div>

    <div class="layout-insel-container">
        <section id="projekte" class="layout-insel">
            <h2>Meine Projekte</h2>
            <div class="projekt-grid">
                <?php foreach ($projekte as $id => $p): ?>
                    <article id="projekt<?php echo $id; ?>">
                        <div class="projekt-bild">
                            <img src="<?php echo $p['bild']; ?>" alt="<?php echo htmlspecialchars($p['titel']); ?>">
                        </div>
                        <h3><?php echo htmlspecialchars($p['titel']); ?></h3>
                        <p><?php echo htmlspecialchars($p['beschreibung']); ?></p>
                        <a href="details.php?id=<?php echo $id; ?>" class="btn-more">Details öffnen</a>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
    <div class="layout-insel-container">
        <section id="kontakt" class="layout-insel">
            <h2>Kontakt</h2>
            <?php include 'alerts.php'; ?>
            <p>Hast du eine Frage oder möchtest zusammenarbeiten? ...</p>       
        
            <form class="kontakt-form" action="send_mail.php" method="POST">
                <div class="input-group">
                    <input type="text" name="name" placeholder="Dein Name" required>
                    <input type="email" name="email" placeholder="Deine E-Mail" required>
                </div>
            
                <input type="text" name="betreff" placeholder="Betreff" required>
                <textarea name="nachricht" placeholder="Deine Nachricht" rows="5" required></textarea>

                <button type="submit" class="btn-more">Nachricht senden</button>            
            </form> 
        </section>
    </div>
</main>

<script src="script.js"></script>
<?php include 'footer.php'; ?>
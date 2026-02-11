<?php 
include 'projektdaten.php'; 
$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
if (array_key_exists($id, $projekte)) { $p = $projekte[$id]; } else { die("Nicht gefunden"); }
include 'header.php'; 
?>

<main>
    <div class="layout-insel-container">
        <section class="layout-insel">
            
            <h1><?php echo htmlspecialchars($p['titel']); ?></h1>

            <?php if (!empty($p['bild'])): ?>
                <div class="detail-bild-container">
                    <img src="<?php echo $p['bild']; ?>" alt="Projektbild" class="detail-bild">
                </div>
            <?php endif; ?>

            <div class="detail-text-box">
                <p><?php echo nl2br(htmlspecialchars($p['beschreibung'])); ?></p>
            </div>

            <div class="code-container">
                <pre><code class="<?php echo $p['sprache']; ?>"><?php echo htmlspecialchars($p['code']); ?></code></pre>
                <button class="copy-btn" onclick="copyCode()">Code kopieren</button>
            </div>

            <div class="btn-back-wrapper">
                <a href="index.php" class="btn-more">Zurück zur Übersicht</a>
            </div>
            
        </section>
    </div>
</main>

<?php include 'footer.php'; ?>
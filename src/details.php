<?php 
include 'project-data.php'; 

// ID sicher aus der URL holen
$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Wir nutzen $detailProjekt, um Konflikte mit der Navigation zu vermeiden
if (array_key_exists($id, $projects)) { 
    $detailProjekt = $projects[$id]; 
} else { 
    die("Projekt nicht gefunden"); 
}

include 'header.php'; 
?>

<main>
    <div class="island-layout-container">
        <section class="island-layout">
            
            <h1><?php echo htmlspecialchars($detailProjekt['title']); ?></h1>

            <?php if (!empty($detailProjekt['image'])): ?>
                <div class="detail-image-container">
                    <img src="<?php echo $detailProjekt['image']; ?>" alt="Project Image" class="detail-image">
                   
                    <?php if (!empty($detailProjekt['image_credit'])): ?>
                        <div class="image-credit">
                            <?php echo $detailProjekt['image_credit']; ?>
                        </div>                      
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="detail-text-box">
                <p><?php echo nl2br(htmlspecialchars($detailProjekt['description'])); ?></p>
            </div>

            <div class="code-container">
                <pre><code class="<?php echo $detailProjekt['language']; ?>"><?php echo htmlspecialchars($detailProjekt['code']); ?></code></pre>
                <button class="copy-btn" onclick="copyCode()">Code kopieren</button>
            </div>

            <div class="btn-back-wrapper">
                <a href="index.php" class="btn-more">Zurück zur Übersicht</a>
            </div>
            
        </section>
    </div>
</main>

<?php include 'footer.php'; ?>
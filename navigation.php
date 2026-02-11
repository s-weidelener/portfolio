<?php 
include_once 'projektdaten.php'; 
?>

<nav>
    <div class="menu-toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>

    <ul class="haupt-nav">
        <li><a href="index.php">Home</a></li>
        
        <li class="heraus">
            <a href="index.php#projekte">Projekte</a>
            <ul class="einAusklappen">
                <?php foreach ($projekte as $id => $p): ?>
                    <li>
                        <a href="details.php?id=<?php echo $id; ?>">
                            <?php echo htmlspecialchars($p['titel']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
        
        <li><a href="index.php#kontakt">Kontakt</a></li>
    </ul>
</nav>
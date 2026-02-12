<?php 
include_once 'project-data.php'; 
?>

<nav>
    <div class="menu-toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>

    <ul class="main-nav">
        <li><a href="index.php">Home</a></li>
        
        <li class="nav-item-dropdown">
            <a href="index.php#projects">Projekte</a>
            <ul class="dropdown-menu">
                <?php foreach ($projects as $id => $p): ?>
                    <li>
                        <a href="details.php?id=<?php echo $id; ?>">
                            <?php echo htmlspecialchars($p['title']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
                <?php unset($p); // Variable "putzen", damit sie nicht global stört ?>
            </ul>
        </li>
        
        <li><a href="index.php#contact">Kontakt</a></li>
    </ul>
</nav>
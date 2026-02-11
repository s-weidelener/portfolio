<footer>
        <div class="layout-insel-container">
            <section class="layout-insel footer-content">
                <div class="footer-info">
                    <p>&copy; <?php echo date("Y"); ?> Sebastian – Mein Portfolio</p>
                    <p>Dies ist noch ein Placeholder</p>
                </div>
                
                <nav class="footer-nav">
                    <ul>
                        <li><a href="impressum.php">Impressum</a></li>
                        <li><a href="datenschutz.php">Datenschutz</a></li>
                    </ul>
                </nav>
            </section>
        </div>
    </footer>

    <script src="js/prism.js"></script>
    
    <script>
    function copyCode() {
        const codeElement = document.querySelector('.code-container pre code');
        const btn = document.querySelector('.copy-btn');
        
        if (!codeElement || !btn) return;

        const codeText = codeElement.innerText;
        
        navigator.clipboard.writeText(codeText).then(() => {
            const originalText = btn.innerText;
            
            // --- Erfolgs-Zustand ---
            btn.innerText = 'Kopiert!';
            btn.style.setProperty('background-color', '#76c442', 'important');
            btn.style.setProperty('border-color', '#76c442', 'important');
            btn.style.setProperty('color', '#ffffff', 'important');
            
            setTimeout(() => {
                // --- Zurück zum Standard ---
                btn.innerText = originalText;
                btn.style.removeProperty('background-color');
                btn.style.removeProperty('border-color');
                btn.style.removeProperty('color');
            }, 2000);
        }).catch(err => {
            console.error('Fehler beim Kopieren: ', err);
        });
    }
    </script>
</body>
</html>
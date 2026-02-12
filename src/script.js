// script.js info: <script src="script.js?v=<?php echo filemtime('script.js'); ?>"></script> wenn online!!!
const kontaktForm = document.querySelector('.kontakt-form');

if (kontaktForm) {
    kontaktForm.addEventListener('submit', function() {
        const btn = this.querySelector('button');
        btn.textContent = 'Wird gesendet...';
        btn.style.opacity = '0.5';
        btn.style.pointerEvents = 'none';
    });
}

document.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('#mobile-menu');
    const menuLinks = document.querySelector('.haupt-nav');

    if (menu) {
        menu.addEventListener('click', function() {
            menu.classList.toggle('active');
            menuLinks.classList.toggle('active');
        });
    }

    // Schließt das Menü
    document.querySelectorAll('.haupt-nav a').forEach(link => {
        link.addEventListener('click', () => {
            menu.classList.remove('active');
            menuLinks.classList.remove('active');
        });
    });
});
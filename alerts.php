<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'success') {
        echo '<p style="color: #4CAF50; margin-bottom: 20px;">✔ Deine Nachricht wurde gesendet!</p>';
    } elseif ($_GET['status'] == 'error') {
        echo '<p style="color: #f44336; margin-bottom: 20px;">✘ Fehler beim Senden. Versuche es später erneut.</p>';
    }
}
?>
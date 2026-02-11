<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Daten bereinigen
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $betreff = htmlspecialchars(strip_tags(trim($_POST['betreff'])));
    $nachricht = htmlspecialchars(strip_tags(trim($_POST['nachricht'])));

    // --- MEINE EINSTELLUNGEN ---
    $empfaenger = "beispiel@beispiel.de"; 
    $betreff_zeile = "Kontaktanfrage Portfolio: $betreff";
    
    // Nachricht 
    $email_body = "Neue Nachricht von: $name\n";
    $email_body .= "E-Mail: $email\n\n";
    $email_body .= "Nachricht:\n$nachricht";

    // Header (Zustellung)
    $headers = "From: Webseiten-Portfolio <noreply@meinedomain.de>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8";

    // Abschicken
    if (mail($empfaenger, $betreff_zeile, $email_body, $headers)) {
        header("Location: index.php?status=success#kontakt");
    } else {
        header("Location: index.php?status=error#kontakt");
    }
}
?>
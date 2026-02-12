<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Daten bereinigen
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(strip_tags(trim($_POST['subject'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    // --- MEINE EINSTELLUNGEN ---
    $recipient = "beispiel@beispiel.de"; 
    $mail_subject = "Kontaktanfrage Portfolio: $subject";
    
    // Nachricht 
    $email_body = "Neue Nachricht von: $name\n";
    $email_body .= "E-Mail: $email\n\n";
    $email_body .= "Nachricht:\n$message";

    // Header (Zustellung)
    $headers = "From: Webseiten-Portfolio <noreply@meinedomain.de>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8";

    // Abschicken
    if (mail($recipient, $mail_subject, $email_body, $headers)) {
        header("Location: index.php?status=success#contact");
    } else {
        header("Location: index.php?status=error#contact");
    }
}
?>
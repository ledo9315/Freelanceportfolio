<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "leonid.domagalsky@gmail.com"; // Hier deine E-Mail-Adresse eintragen
    $subject = "Kontaktformular: Neue Nachricht von $name";
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        // E-Mail wurde erfolgreich gesendet
        echo "<script>
            alert('Vielen Dank! Deine Nachricht wurde erfolgreich versendet.');
            window.location.href = 'index.html';
        </script>";
    } else {
        // Fehler beim Senden der E-Mail
        echo "<script>
            alert('Es gab ein Problem beim Senden der E-Mail. Bitte versuche es später erneut.');
            window.location.href = 'index.html';
        </script>";
    }
} else {
    // Fallback, falls das Formular direkt aufgerufen wird
    header("Location: index.html");
}
?>

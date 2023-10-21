<!DOCTYPE html>
    <html>
    <head>
        <title>Formularverarbeitung</title>
        <style>
            body {
                background-color: black;
                color: white;
                font-size: 18px;
    font-family: Arial, serif;
     
            }
        </style>
        <script>
            // JavaScript für die Weiterleitung nach 4 Sekunden
            setTimeout(function() {
                window.location.href = "https://sportfoto.tirol/kontakt/"; 
            }, 3000); // 4000 Millisekunden = 4 Sekunden
        </script>
    </head>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["mail"];
            $title = $_POST["title"];
            $message = $_POST["message"];
     
            $to = "info@sportfoto.tirol";
            $subject = "Neue Anfrage von $name";
            $messageBody = "Name: $name\nEmail: $email\nTitel: $title\nNachricht:\n$message";
     
            $headers = "From: $email";
     
            if (mail($to, $subject, $messageBody, $headers)) {
                echo "<h1>Anfrage erfolgreich gesendet😀</h1>";
                echo "<p>Vielen Dank, $name, für deine Nachricht. Wir werden uns in Kürze bei dir melden.</p>";
            } else {
                echo "<h1>Fehler beim Senden der Anfrage.</h1>";
                echo "<p>Es gab ein Problem beim Senden der Nachricht. Bitte sende dein Anliegen per E-Mail.</p>";
            }
     
     
     

            // Zurück-Button
            echo '<p>Du wirst in in Kürze wieder zurück zur Ausgangsseite geleitet.</p>
    <p><a href="deine_formularseite.html">Gleich zurück</a></p>';

                // Logo-Vorlage
                echo '<img src="https://sportfoto.tirol/img/logo/logo.svg" alt="Logo" width="330px">';
        }
        ?>
     
    </body>
    </html>		
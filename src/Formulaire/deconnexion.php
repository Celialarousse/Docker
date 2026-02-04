<?php
session_start(); // Démarre une session
session_unset(); // Supprime toutes les variables de session
session_destroy(); // Détruit la session

header("Location: connexion.php"); // Redirige vers la page de connexion
exit();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Déconnexion</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="welcome-container">
            <h1>Vous êtes déconnecté(e)</h1>
            <p>Merci d'avoir utilisé notre service.</p>
            <p>Vous allez être redirigé(e) vers la page de connexion...</p>
            <!-- Redirection automatique après 3 secondes -->
            <meta http-equiv="refresh" content="3;url=connexion.php">
        </div>
    </body>
</html>

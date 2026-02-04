<?php
session_start(); // Démarre une session
if (!isset($_SESSION['user_email'])) {
    header("Location: connexion.php"); // Redirige vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenue</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="welcome-container">
            <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['user_prenom']); ?> !</h1>
            <p>Vous êtes maintenant connecté(e).</p>
            <a href="deconnexion.php" class="deconnexion-btn">Se déconnecter</a>
        </div>
    </body>
</html>
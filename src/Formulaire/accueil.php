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
            <h1>Bienvenue, <?php echo htmlspecialchars($_POST['prenom'] ?? 'Utilisateur'); ?> !</h1>
    <p>Vous êtes maintenant connecté(e).</p>
    <a href="deconnexion.php" class="deconnexion-btn">Se déconnecter</a>
        </div>
    </body>
</html>
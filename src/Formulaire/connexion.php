<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php
        if (isset($_SESSION['erreur_connexion'])) {
            echo '<div class="alert alert-danger">' . htmlspecialchars($_SESSION['erreur_connexion']) . '</div>';
            unset($_SESSION['erreur_connexion']);
        }
        if (isset($_SESSION['succes_inscription'])) {
            echo '<div class="alert alert-success">' . htmlspecialchars($_SESSION['succes_inscription']) . '</div>';
            unset($_SESSION['succes_inscription']);
        }
        ?>
        <div class="form-container">
            <h1>Se connecter</h1>
            <form action="traitement_connexion.php" method="post">
                <div class="form-group">
                    <label for="email">Adresse e-mail :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" required>
                    </div>
                </div>
                <button type="submit" class="submit-btn">Se connecter</button>
                <p class="signup-link">Pas encore de compte ? <a href="inscription.php">S'inscrire</a></p>
            </form>
        </div>
    </body>
</html>

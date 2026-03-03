<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php
        if (isset($_SESSION['erreur_inscription'])) {
            echo '<div class="alert alert-danger">' . htmlspecialchars($_SESSION['erreur_inscription']) . '</div>';
            unset($_SESSION['erreur_inscription']);
        }
        if (isset($_SESSION['succes_inscription'])) {
            echo '<div class="alert alert-success">' . htmlspecialchars($_SESSION['succes_inscription']) . '</div>';
            unset($_SESSION['succes_inscription']);
        }
        ?>
        <div class="form-container">
            <h1>Créer un compte</h1>
            <form action="traitement_inscription.php" method="post">
                <div class="form-group">
                    <label for="username">Nom :</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" required>
                </div>
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
                <div class="form-group">
                    <label for="confirm_password">Confirmation du mot de passe :</label>
                    <div class="password-container">
                        <input type="password" id="confirm_password" name="confirm_password" required>
                    </div>
                </div>
                <button type="submit" class="submit-btn">S'inscrire</button>
                <p class="login-link">Déjà un compte ? <a href="connexion.php">Se connecter</a></p>
            </form>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="form-container"> <!-- Ajout d'une div conteneur pour le formulaire -->
            <h1>Créer un compte</h1>
            <form action ="#" method ="post"> <!-- Ajout de l'attribut method -->
                <div class="form-group"><!-- Ajout d'une div pour chaque groupe de champs -->
                    <label for="username">Nom :</label><!-- Ajout de l'attribut for -->
                    <input type="text" id="username" name="username" required><!-- Ajout de l'attribut id -->
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom :</label><!-- Ajout de l'attribut for -->
                    <input type="text" id="prenom" name="prenom" required><!-- Ajout de l'attribut id -->
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail :</label><!-- Ajout de l'attribut for -->
                    <input type="email" id="email" name="email" required><!-- Ajout de l'attribut id -->
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label><!-- Ajout de l'attribut for -->
                    <div class="password-container"><!-- Ajout d'une div pour le conteneur du mot de passe -->
                        <input type="password" id="password" name="password" required><!-- Ajout de l'attribut id -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirmation du mot de passe :</label><!-- Ajout de l'attribut for -->
                    <div class="password-container"><!-- Ajout d'une div pour le conteneur de la confirmation du mot de passe -->
                        <input type="password" id="confirm_password" name="confirm_password" required><!-- Ajout de l'attribut id -->
                    </div>
                </div>
                <button type="submit" class="submit-btn">S'inscrire</button><!-- Ajout d'une classe pour le bouton -->
                <p class="login-link">Déjà un compte ? <a href="connexion.html">Se connecter</a></p><!-- Ajout d'une classe pour le paragraphe -->
            </form>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="form-container"><!-- Ajout d'une div conteneur pour le formulaire -->
            <h1>Se connecter</h1>
            <form action ="traitement_connexion.php" method ="post"><!-- Ajout de l'attribut method -->
                <div class="form-group"><!-- Ajout d'une div pour chaque groupe de champs -->
                    <label for="email">Adresse e-mail :</label><!-- Ajout de l'attribut for -->
                    <input type="email" id="email" name="email" required><!-- Ajout de l'attribut id -->
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label><!-- Ajout de l'attribut for -->
                    <div class="password-container"><!-- Ajout d'une div pour le conteneur du mot de passe -->
                        <input type="password" id="password" name="password" required><!-- Ajout de l'attribut id -->
                    </div>
                </div>
                <button type="submit" class="submit-btn">Se connecter</button><!-- Ajout d'une classe pour le bouton -->
                <p class="signup-link">Pas encore de compte ? <a href="inscription.php">S'inscrire</a></p><!-- Ajout d'une classe pour le paragraphe -->
            </form>
        </div>
    </body>    
</html>
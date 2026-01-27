<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion validée</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="welcome-container">
            <h1>Résultat de la connexion</h1>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $email = htmlspecialchars($_POST["email"]);
                $password = htmlspecialchars($_POST["password"]);

                if (!empty($email) && !empty($password)) {

                    echo "<p>Bonjour <strong>$email</strong> !</p>";
                    echo "<p>Votre connexion a été validée avec succès.</p>";

                    echo "<p>Vous allez être redirigé(e) vers votre espace...</p>";
                    echo '<meta http-equiv="refresh" content="3;url=accueil.php">';
                } else {

                    echo "<p style='color: red;'><strong>Erreur :</strong> Veuillez remplir tous les champs.</p>";
                    echo "<a href='connexion.php' class='submit-btn'>Réessayer</a>";
                }
            } else {

                echo "<p style='color: red;'><strong>Erreur :</strong> Aucune donnée reçue.</p>";
                echo "<a href='connexion.php' class='submit-btn'>Retour à la connexion</a>";
            }
            ?>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription validée</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="welcome-container">
            <h1>Inscription réussie !</h1>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $nom = htmlspecialchars($_POST["username"]);
                $prenom = htmlspecialchars($_POST["prenom"]);
                $email = htmlspecialchars($_POST["email"]);
                $password = htmlspecialchars($_POST["password"]);
                $confirm_password = htmlspecialchars($_POST["confirm_password"]);

                if ($password === $confirm_password) {

                    echo "<p>Merci, $prenom ! Ton inscription est validée.</p>";
                    echo "<p>Un email de confirmation a été envoyé à $email.</p>";
                } else {
                    
                    echo "<p style='color: red;'>Erreur : les mots de passe ne correspondent pas.</p>";
                }
            } else {
                echo "<p>Erreur : aucune donnée reçue.</p>";
            }
            ?>
            <a href="accueil.php" class="btn">Se connecter</a>
        </div>
    </body>
</html>
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
            require 'config.php'; // Inclut le fichier de configuration de la base de données

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nom = $_POST["username"];
                $prenom = $_POST["prenom"];
                $email = $_POST["email"];
                $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hachage du mot de passe

                try {
                    // Préparation de la requête pour insérer un nouvel utilisateur
                    $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe) VALUES (?, ?, ?, ?)");
                    $stmt->execute([$nom, $prenom, $email, $password]);

                    // Redirection vers la page de connexion après une inscription réussie
                    echo '<a href="accueil.php" class="btn">Se connecter</a>';
                    exit();
                } catch(PDOException $e) {
                    echo "Erreur : " . $e->getMessage();
                }
            }
            ?>
        </div>
    </body>
</html>
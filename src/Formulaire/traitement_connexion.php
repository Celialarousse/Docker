<?php
// Démarrer la session en premier
session_start();

// Inclure le fichier de configuration
require 'config.php';

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['mot_de_passe'])) {
            // Stocker les informations de l'utilisateur en session
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_nom'] = $user['nom'];
            $_SESSION['user_prenom'] = $user['prenom'];

            // Redirection vers la page d'accueil
            header("Location: accueil.php");
            exit();
        } else {
            // Stocker un message d'erreur en session pour l'afficher sur la page de connexion
            $_SESSION['erreur_connexion'] = "Email ou mot de passe incorrect.";
            header("Location: connexion.php");
            exit();
        }
    } catch(PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}
?>

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
            // Si tu veux afficher un message ici, utilise une variable ou une session
            if (isset($_SESSION['erreur_connexion'])) {
                echo "<p style='color: red;'>" . $_SESSION['erreur_connexion'] . "</p>";
                unset($_SESSION['erreur_connexion']);
                echo "<a href='connexion.php' class='submit-btn'>Réessayer</a>";
            }
            ?>
        </div>
    </body>
</html>


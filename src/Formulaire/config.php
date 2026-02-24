<?php
$host = 'my_mysql'; // Adresse du serveur MySQL (dans ton conteneur Docker)
$db = 'db';  // Nom de la base de données
$user = 'root';      // Nom d'utilisateur MySQL
$pass = 'root123'; // Mot de passe MySQL
$charset = 'utf8mb4'; // Encodage des caractères

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Active les exceptions en cas d’erreur
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,      // Retourne les résultats sous forme de tableau associatif
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Désactive l’émulation des requêtes préparées (plus sécurisé)
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
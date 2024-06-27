<?php

// L'extension PDO, pour PHP Data Objects, définit une interface pour accéder à une base de données depuis PHP, et permet d'y exécuter des requêtes SQL.
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=pdo', // driver mysql, serveur de la BDD (host), nom de la BDD (dbname) à changer
        'root', // nom d'utilisateur
        '', // mot de passe
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION] // On affiche les erreurs
    );
} catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
}


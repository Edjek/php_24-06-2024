<?php
// Injection SQL : est une technique qui permet d'injecter du code SQL dans des variables ou bases de données mal protégées.
// exemple : $sql = "SELECT * FROM users WHERE name = '$name' AND pswd = '$pswd'";

// Faille XSS : Cross-Site Scripting, est une faille qui permet d'injecter du code HTML et/ou Javascript dans des variables ou bases de données mal protégées.
// exemple : <script>alert('Hello World')</script>

// Validation du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        echo 'Veuillez renseigner un nom';
    } else {
        $name = trim($_POST['name']); // Supprimer les espaces en début et fin de chaîne
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS); // Supprimer les caractères spéciaux
    }
    if (empty($_POST['pswd'])) {
        echo 'Veuillez renseigner un mot de passe';
    } else {
        $pswd = trim($_POST['pswd']);
        $pswd = password_hash($pswd, PASSWORD_DEFAULT); // Hachage du mot de passe
    }
} else {
    echo 'Erreur dans le formulaire';
}

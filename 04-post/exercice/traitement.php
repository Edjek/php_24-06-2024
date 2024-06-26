<?php
// Une session permet de conserver des informations à travers le site. Ces informations sont stockées dans un fichier temporaire sur le serveur. Ce fichier est relié à un internaute grâce à un identifiant unique : le session_id. Ce fichier peut contenir des informations sensibles : il ne faut donc pas le laisser à la portée de tout le monde. C'est pour cela qu'il est stocké dans un dossier temporaire du serveur, inaccessible aux internautes.

// Pour accéder à la session, il faut commencer par la démarrer avec la fonction session_start().
session_start();

// On vérifie que les données sont bien envoyées en POST et qu'elles ne sont pas vides
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['name']) || empty($_POST['name'])) {
        $_SESSION['message'] = 'Veillez remplir le champ nom';
        header('Location: ./formulaire.php');
        exit();
    }
    if (!isset($_POST['pswd']) || empty($_POST['pswd'])) {
        $_SESSION['message'] = 'Veuillez remplir le champ mot de passe';
        header('Location: ./formulaire.php');
        exit();
    }
    foreach ($_POST as $key => $value) {
        $_POST[$key] = htmlspecialchars(trim($value));
    }
    $pswd = password_hash($_POST['pswd'], PASSWORD_DEFAULT);

    $_SESSION['message'] = 'Le formulaire à bien été envoyé';
    $_SESSION['userName'] = $_POST['name']; // On stocke le nom dans la session

    // La fonction header location permet de rediriger vers une autre page
    // Il est recommandé de rajouter la fonction exit() juste après pour s'assurer sur que le script soit bien stoppé
    header('Location: ./index.php');
    exit();
} else {
    $_SESSION['message'] = "Veuillez remplir le formulaire";
    header('Location: ./formulaire.php');
    exit();
}

<?php

require_once '../config/db.php';
require_once '../repository/bookRepository.php';

session_start();



// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (
        !isset($_POST['title']) ||
        !isset($_POST['description']) ||
        !isset($_POST['year_parution']) ||
        !isset($_POST['id_author']) ||
        empty($_POST['title']) ||
        empty($_POST['description']) ||
        empty($_POST['year_parution']) ||
        empty($_POST['id_author'])
    ) {
        $_SESSION['message'] = 'Veuillez recommencer';
        header('Location: ../../view/add-book.php');
        exit;
    }

    // Récupérer les données du formulaire
    // Validation des données
    $title = trim($_POST['title']);
    $description = $_POST['description'];
    $year_parution = $_POST['year_parution'];
    $id_author = $_POST['id_author'];

    // Insertion des données dans la base de données
    $test = connectDB();
    addBook($test, $title, $description, $year_parution, $id_author);

    // Creer un message de reussite et rediriger

    // Redirection ou affichage d'un message de succès
    // ...
}

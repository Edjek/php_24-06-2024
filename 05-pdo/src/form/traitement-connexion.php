<?php
session_start();

if (isset($_POST)) {
    $name = $_POST['name'];
    $password = $_POST['pswd'];
    if (!empty($name) && !empty($password)) {
        require_once '../config/bdd.php';

        $stmt = $pdo->prepare('SELECT * FROM user WHERE pseudo = :name AND password = :pwd ');
        $stmt->execute(['name'=> $name, 'pwd' => $password]);
        $user = $stmt->fetch();
        if($user) {
            $_SESSION['admin'] = $user['statut'];
            header('Location: ../../index.php');
            exit();
        } else {
            header('Location: ../../connexion.php');
            exit();
        }
    } else {
        $_SESSION['message-error'] = 'Tous les champs ne sont pas remplis';
        header('Location: ../../connexion.php');
        exit();
    }
} else {
    header('Location: ../../connexion.php');
    exit();
}

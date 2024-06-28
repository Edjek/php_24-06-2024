<?php

require_once '../src/config/db.php';
require_once '../src/repository/authorRepository.php';

$pdo = connectDB();
$authors = getAllAuthors($pdo);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librairie Digitale - Ajouter un livre</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <header>
        <h1>Library</h1>
    </header>

    <main>
        <form action="">
            <div>
                <label for="">titre</label>
                <input type="text">
            </div>
            <div>
                <label for="">description</label>
                <textarea name="" id=""></textarea>
            </div>
            <div>
                <label for=""></label>
                <input type="number" step="1" min="0" max="9999" placeholder="1900">
            </div>
            <div>
                <label for=""></label>
                <select name="" id="">
                <?php foreach($authors as $author) { ?>
                    <option value="<?= $author['id'] ?>">
                        <?= "{$author['nom']} {$author['prenom']}" ?>
                    </option>
                <?php } ?>

                </select>
            </div>
            <!-- CHAMPS DE FORMULAIRE POUR AFFICHER LA LISTE DES AUTEURS -->
            <input type="submit" value="Ajouter">
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Library</p>
    </footer>
</body>

</html>
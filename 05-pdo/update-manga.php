<?php

session_start();
require_once './src/config/bdd.php';

if ($_SESSION['admin'] != 1) {
    header('Location: ./index.php');
    exit();
}

$res = $pdo->prepare('SELECT * FROM manga WHERE id = :id');
$res->execute(['id' => $_GET['id']]);
$manga = $res->fetch();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGA - Modification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <header>
        <?php
        require_once './template/header.php'
        ?>
    </header>

    <main>
        <section>
            <div class="w-75 mx-auto m-5 p-3 border rounded">
                <form action="./traitement-update-manga.php" method="POST">
                    <!-- 2 methodes pour faire passer l'id dans la super globale $_POST -->
                    <!-- OU on cache le champs -->
                    <input type="hidden" value="<?= $manga['id']; ?>" name="id">
                    <!-- OU on affiche le champ mais en le désactivant -->
                    <!-- <div class="mb-3">
                        <label for="id">id</label>
                        <input type="text" id="id" disabled value="<?= $manga['id']; ?>" name="id">
                    </div> -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="title" value="<?= $manga['title']; ?>" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description"><?= $manga['description']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prix</label>
                        <input type="number" step="any" class="form-control" id="price" name="price" value="<?= $manga['price']; ?>">
                    </div>
                    <input type="submit" value="Modifier" class="btn btn-primary">
                    <input type="reset" value="Annuler" class="btn btn-secondary">
                </form>
            </div>
        </section>
    </main>

    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
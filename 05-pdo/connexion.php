<?php
session_start()
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGA - Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <header>
        <?php
        include_once './template/header.php';
        ?>
    </header>

    <main>
        <section>
            <div class="w-75 mx-auto my-5 p-3 border rounded">
                <form action="./src/form/traitement-connexion.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Pseudo</label>
                        <input type="text" id="name" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="pswd" class="form-label">Mot de passe</label>
                        <input type="password" id="pswd" class="form-control" name="pswd">
                    </div>
                    <input type="submit" value="Connexion" class="btn btn-primary">
                    <input type="reset" value="Annuler" class="btn btn-secondary">
                </form>
                <?php
                if (isset($_SESSION['message-error'])) {
                ?>
                    <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                        <?= $_SESSION['message-error']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    unset($_SESSION['message-error']);
                }
                ?>
            </div>
        </section>
    </main>

    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>
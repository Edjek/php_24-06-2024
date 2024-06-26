<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HTML - Formulaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div>
        <a href="./index.php" class="btn btn-secondary m-3 rounded">accueil</a>
        <?php
        if (isset($_SESSION['message'])) :
        ?>
            <div class="alert alert-warning alert-dismissible fade show w-50 m-auto" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
            unset($_SESSION['message']);
        endif;
        ?>
        <h1 class="text-center mb-3">Les formulaires</h1>
        <!-- Un formulaire se compose de la balise <form></form> qui va entourer tous les champs -->
        <form action="./traitement.php" method="POST" class="border w-50 m-auto p-2">
            <div class="mb-3">
                <!-- Un champ de formulaire se compose d'un <label class="form-label"> et de son <input class="form-control"> -->
                <!-- Pour lier les deux, l'attribut for="" et id="" doivent avoir la même valeur et être unique dans le formulaire -->
                <label for="name" class="form-label">nom</label>
                <input class="form-control" type="text" id="name" name="name" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="pswd">mot de passe</label>
                <input class="form-control" type="password" id="pswd" name="pswd" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="color">couleur</label>
                <input class="form-control form-control-color" type="color" id="color" name="color" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="date">date</label>
                <input class="form-control" type="date" id="date" name="date" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="email">email</label>
                <input class="form-control" type="email" id="email" name="email" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="description">message</label>
                <textarea id="description" name="message" class="form-control"></textarea>
            </div>

            <!-- Les inputs de type checkbox, radio, select, doivent avoir un attribut value="" afin d'avoir une valeur de retour à traiter -->
            <div class="mb-3">
                <label class="form-label" for="week">jour de la semaine</label>
                <select class="form-select" id="week" name="week">
                    <option value="lundi">lundi</option>
                    <option value="mardi">mardi</option>
                    <option value="mercredi">mercredi</option>
                </select>
            </div>

            <div class="mb-3">
                <span>Quels plats aimez-vous?</span>
                <label class="form-check-label" for="burger">burger</label>
                <input class="form-check-input" type="checkbox" id="burger" value="burger" name="food-burger" />
                <label class="form-check-label" for="pizza">pizza</label>
                <input class="form-check-input" type="checkbox" id="pizza" value="pizza" name="food-pizza" />
            </div>

            <div class="mb-3">
                <span>Etes-vous d'accord?</span>
                <!-- Les input de type radio doivent avoir un attribut de plus, name="" -->
                <!-- Ils doivent avoir la même valeur pour ne pouvoir valider qu'un seul des choix -->
                <label class="form-check-label" for="yes">oui</label>
                <input class="form-check-input" type="radio" value="oui" id="yes" name="agree" checked />
                <label class="form-check-label" for="no">non</label>
                <input class="form-check-input" type="radio" value="non" id="no" name="agree" />
            </div>

            <!-- IMPORTANT un form doit avoir un input type="submit" pour soumettre le formulaire -->
            <input class="btn btn-outline-primary" type="submit" value="Envoyer" />
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
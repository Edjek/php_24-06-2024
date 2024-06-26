<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La methode POST</title>
</head>

<body>
    <div>
        <form action="./traitement.php" method="POST">
            <div>
                <label for="name">nom</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="pswd">mot de passe</label>
                <input type="password" id="pswd" name="pswd">
            </div>
            <input type="submit" value="Envoyer">
        </form>
    </div>
</body>

</html>
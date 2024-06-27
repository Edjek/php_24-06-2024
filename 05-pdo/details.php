<?php

require_once './src/config/bdd.php';

$res = $pdo->prepare('SELECT * FROM manga WHERE id = :id');
$res->execute(['id' => $_GET['id']]);
$manga = $res->fetch();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.1/sketchy/bootstrap.min.css" integrity="sha512-vTCMoRqiXiMUL4FKBK1+9Z7ZfDOLNNqAsQ1O/vISUIpu3LwaqM04pH8ji7uv/ZDqszaHYusCalIbcGqNQ0wMRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h1><?= $manga['title']; ?></h1>
        <p><?= $manga['description']; ?></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>
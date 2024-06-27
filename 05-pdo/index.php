<?php
session_start();
require_once './src/config/bdd.php';

$res = $pdo->prepare("SELECT * FROM manga");
$res->execute();
$mangas = $res->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.1/sketchy/bootstrap.min.css" integrity="sha512-vTCMoRqiXiMUL4FKBK1+9Z7ZfDOLNNqAsQ1O/vISUIpu3LwaqM04pH8ji7uv/ZDqszaHYusCalIbcGqNQ0wMRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <?php
        include_once './template/header.php';
        ?>
    </header>

    <main>
        <section class="container">

            <div class="row justify-content-between gap-5 m-5">
                <?php
                foreach ($mangas as $manga) {
                ?>
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $manga['title'];  ?></h5>
                            <p class="card-text"><?= substr($manga['description'], 0, 150) . '...'; ?></p>
                            <a href="./details.php?id=<?= urlencode($manga['id']); ?>" class="btn btn-primary">Plus détail</a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
    </main>

    <footer>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
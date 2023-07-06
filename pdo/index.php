<?php
require_once './src/config/bdd.php';

$res = $pdo->prepare("SELECT * FROM manga");
$res->execute();
$mangas = $res->fetchAll();
// var_dump($manga);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <?php
        foreach($mangas as $manga){
            // var_dump($manga);
    ?>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
             <h5 class="card-title"><?= $manga['title'];  ?></h5>
             <p class="card-text"><?= substr($manga['description'], 0,150). '...';  ?></p>
            <a href="./details.php?id=<?= $manga['id']; ?>" class="btn btn-primary">Détails</a>
        
        </div>
    </div>

    <?php
        }
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>




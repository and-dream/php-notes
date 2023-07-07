<?php
session_start();
require_once './src/config/bdd.php';

    $res = $pdo->prepare('SELECT * FROM manga WHERE id = :id');
    $res->execute(['id'=> $_GET['id']]);
    $manga = $res->fetch();

    if($_SESSION['admin'] !=1){
        header('Location: ./index.php');
        exit();
    }

    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <header>
        <?php 
        require_once './template/header.php';
        ?>
    </header>

    <main>
        <section>            
            <form action="./traitement-update-manga.php" method="POST" class="w-75 mx-auto m-3 p-3 border">
                <!-- 2 methodes pour faire passer l'id dans la super globale $_POST -->

                <!-- ou on cache le champ -->
                <input type="hidden" value="<?=$manga['id']; ?>" name="id">

                <!-- ou on affiche le champ mais en le désactivant -->
                <div class="mb-3">
                    <label for="id">id</label>
                    <input type="text" id="id" disabled value="<?= $manga['id']  ?>" name="">
                </div>

                
                <div class="mb-3">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="title" value="<?= $manga['title']; ?>" name="">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name=""><?= $manga['description']; ?>"></textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prix</label>
                    <input type="number" step="any" class="form-control" id="price" value="<?= $manga['price']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>       
        </section>
    </main>

    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
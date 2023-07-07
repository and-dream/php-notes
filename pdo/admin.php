<?php
session_start();
require_once './src/config/bdd.php';

if($_SESSION['admin'] !=1){
    header('Location: ./index.php');
    exit();
}

//connexion à la bdd
//récupération de tous les mangas
$stmt = $pdo->prepare('SELECT * FROM manga');
$stmt->execute();
$mangas = $stmt->fetchAll();
// var_dump($mangas);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGA - Administration</title>
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
            <table>
                //boucle pour créer chaque ligne du tableau avec les valeurs de la bdd

                //afficher id | nom du manga | lien modifier | lien pour supprimer
      
                <?php foreach($mangas as $manga){
                    // var_dump($manga);
                    ?>
                    <tr>
                        <td><?= $manga['id'] ?></td>
                        <td><?= $manga['title'] ?></td>
                        <td><a href="./update-manga.php?id=u">Modifier</a></td>
                        <td><a href="delete-manga.php?id=d"></a>Supprimer</td>
                    </tr>
                <?php
                }
                ?>                
            </table>
        </section>
    </main>

    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
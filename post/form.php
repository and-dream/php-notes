<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La méthode POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <?php
    if (isset($_SESSION['message'])){      
        ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
        unset($_SESSION['message']);
    }
    ?>

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

        <!-- <?php
        // var_dump($_POST['name']);
        // var_dump($_POST['pswd']);
        ?> -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
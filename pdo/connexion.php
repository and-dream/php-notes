<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <header>
        <?php require_once './template/header.php'; ?>
    </header>

    <main>
        <section>
            <form action="./src/form/traitement-connexion.php" method="POST" class="w-75 mx-auto m-3 p-3 border">
                <div class="mb-3">
                    <label for="pseudo" class="form-label">Pseudo</label>
                    <input type="text" class="form-control" id="pseudo" aria-describedby="emailHelp" name="name">  
                </div>
                <div class="mb-3">
                    <label for="pswd" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="pswd" name="pswd">
                </div>
        
                <button type="submit" value="Se connecter" class="btn btn-secondary">Se connecter</button>
        </form>
                <?php
            if(isset($_SESSION['message-error'])){
                echo $_SESSION['message-error'];
                unset($_SESSION['message-error']);
            }
            ?>
            
          
            
        </section>
    </main>

    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</body>
</html>
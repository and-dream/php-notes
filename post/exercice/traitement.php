<?php
    // première chose à déclarer tout en haut de la page
    // une session permet de conserver des informations à travers le site. Ces informations sont stockées dans un fichier temporaire sur le serveur
    //Pour accéder à  la session, il faut commencer par la démarrer avec fonction session_start()
session_start();
    // echo '<pre>';
    // var_dump($_SESSION);
    // echo '</pre>';

if(isset ($_POST['name']) && isset($_POST['pswd']) && isset($_POST['color'])  && isset($_POST['date'])  && isset($_POST['email']) && isset($_POST['message'])  && isset($_POST['weekday'])  && isset($_POST['consent'])){
        if(!empty($_POST['name']) && !empty($_POST['pswd']) && !empty($_POST['color']) && !empty($_POST['date'])  && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['weekday']) && !empty($_POST['consent'])){
        
            // echo "ok";

        
    // La fonction header location permet de rediriger vers une autre page
        // enregistrement en bdd
    // Il est recommandé de rajouter la fonction exit() juste après pour être sûr que le script soit bien stopper

    $_SESSION['message'] = 'Le formulaire a bien été envoyé';
        header('Location: ./index.php');
        exit();
    
} else {
    $_SESSION['message'] = 'Veuillez remplir tous les champs';
    header('Location: ./formulaire.php');
    exit();   
    }
    } else {
    $_SESSION['message'] = 'Il y a une erreur dans le formulaire';
    header('Location: ./formulaire.php');
    exit();  
    };

   



<?php

if(isset ($_POST['name']) && isset($_POST['pswd']) && isset($_POST['color'])  && isset($_POST['date'])  && isset($_POST['email']) && isset($_POST['message'])  && isset($_POST['weekday'])  && isset($_POST['consent'])){
        if(!empty($_POST['name']) && !empty($_POST['pswd']) && !empty($_POST['color']) && !empty($_POST['date'])  && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['weekday']) && !empty($_POST['consent'])){
        
            echo "ok";
        $name = strip_tags($_POST['name']);
        $pswd = strip_tags($_POST['pswd']);
        $email = strip_tags($_POST['email']);
        $message = strip_tags($_POST['message']); 
        
    // enregistrement en bdd
    header('Location: ./formulaire.php');
    exit();
    
} else {
        echo 'erreur';
    }
    } else {
        echo 'veuillez remplir tous les champs';
    
    };


    // var_dump($_POST['plat']);
    // var_dump($_POST['consent']);



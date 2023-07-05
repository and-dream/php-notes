<?php
//if(isset($_POST['name'])  && !empty($_POST['name']) && isset($_POST['pswd']) && !empty($_POST['pswd']) ){

//}
// on vérifie si la variable name existe et qu'elle n'est pas vide
// pareil pour la variable pswd


if( isset ($_POST['name']) && isset($_POST['pswd'])){
    if(!empty($_POST['name']) || !empty($_POST['pswd'])) {

     $name = strip_tags($_POST['name']);

     $name = htmlspecialchars($_POST['name']);
     var_dump($name);
    }
    else {
        echo 'Veuillez remplir tous les champs';
    }
} else {
    echo 'Erreur dans le formulaire';
}


// strip_tags 
// cette fonction supprime les balises html 
// elle retourne ma variable sans les balises
// elle retourne le contenu en supprimant tout élément html
// se prémunir de la faille xss
// la faille XSS, de son nom complet Cross-Site Scripting, est une faille qui permet d'inject du code HTML et/ou JavaScript dans des variables ou bases de données mal protégées

// autre manière de se prémunir de la faille XSS
// la fonction htmlspecialchars()
// la fonction htmlspecialchars() retourne le contenu avec les caractères spéciaux neutralisés 

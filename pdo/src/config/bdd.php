<?php

// L'extension PDO, pour PHP Data Objects, définit une interface pour accéder à une base de données depuis PHP, et permet d'y exécuter des requêtes SQL
try
{
    $pdo = new PDO(
        'mysql:host=localhost;dbname=pdo', // driver mysql, serveur de la BDD (host), nom de la BDD (dbname) à changer
        'root', // nom d'utilisateur
        '', // mot de passe
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]); // On affiche les erreurs
}
catch(Exception $e){
    die('Ereur:' . $e->getMessage());
}

// pour attraper des erreurs qui pourraient se propager
// try il va essayer de faire ça
// catch on lui passe une instance d'objet une variable de type exception va être récupérée
// si jamais il y a une erreur qui est généré, on va arrêter le scrip et on peut afficher le message
// au lieu de buguer le site, il affichera le message d'erreur de connexion à la bdd
// on a activé la gestion des erreurs
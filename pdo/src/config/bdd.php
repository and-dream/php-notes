<?php
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=pdo','root','', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch(Exception $e)
{
    die('Ereur:' . $e->getMessage());
}

// pour attraper des erreurs qui pourraient se propager
// try il va essayer de faire ça
// catch on lui passe une instance d'objet une variable de type exception va être récupérée
// si jamais il y a une erreur qui est généré, on va arrêter le scrip et on peut afficher le message
// au lieu de buguer le site, il affichera le message d'erreur de connexion à la bdd
// on a activé la gestion des erreurs
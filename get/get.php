<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La méthode Get</title>
</head>
<body>
    <!-- $_GET permet de récupérer les paramètres passés dans l'URL -->
    
    <h1>Je suis la page Get</h1>
    <a href="./param.php?id=21&nom=rachid">lien</a>
    <!-- récupérer les paramètres passés dans l'URL -->
    <!-- <?php
    // var_dump ($_GET); -->
    //   ?>

   <!- creer un lien vers une page produit.php -->
   <!--  vous passerez en parametre, model = bmw, color => jaune, annee => 2017 -->
   <!-- Sur la page produit.php -->
   <!-- Vous afficherez dans une div -->
        <!-- <h2> qui affichera le modèle</h2> -->
        <!-- p la couleur de la voitue -->
        <!-- p qui affichera annee de sortie -->

    <a href="./produit.php?modele=bmw&color=jaune&annee=2017">produit</a>


</body>
</html>
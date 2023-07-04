<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>La page produit</h1>
    <div>
        <h2><?php echo $_GET['modele'];?></h2>
        <p>couleur du modèle : <?php echo $_GET['color'];?></p>
        <p>année de sortie : <?= $_GET['annee'];?></p>
    </div>
</body>
</html> 
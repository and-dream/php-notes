<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Formulaire</title>
</head>
<body>
    <h1>Les formulaires</h1>
    <form action="./traitement.php" method="POST">
        <div>
            <label for="name">nom</label>
            <input type="text" id="name"  name="name">
        </div>
        <div>
            <label for="pswd">mot de passe</label>
            <input type="password" id="pswd"  name="pswd">
        </div>
        <div>
            <label for="color">couleur</label>
            <input type="color" id="color"  name="color">
        </div>
        <div>
            <label for="date">date</label>
            <input type="date" id="date" name="date">
        </div>
        <div>
            <label for="mail">email</label>
            <input type="email" id="mail" name="email">
        </div>
        <div>    
            <label for="description">message</label>
            <textarea name="message" id="description"></textarea>
        </div>
        <div>
            <span>jour de la semaine</span>
            <select name="weekday">
                <option value="monday">lundi</option>
                <option value="tuesday">mardi</option>
                <option value="wednesday">mercredi</option>
                <option value="thursday">jeudi</option>
                <option value="friday">vendredi</option>
            </select>
        </div>
        <div>
            <span>Quels plats aimez-vous ?</span>
            <label for="burger">burger</label>
            <input type="checkbox" id="burger" value="burger" name="plat-burger">
            <label for="pizza">pizza</label>
            <input type="checkbox" id="pizza" value="pizza" name="plat-pizza">
        </div>
        <div>
            <span>Etes-vous d'accord?</span>
            <label for="yes">oui</label>
            <input type="radio" id="yes" value="oui" name="consent">
            <label for="no">non</label>
            <input type="radio" id="no" value="non" name="consent">
        </div>
        <input type="submit" value="Envoyer" name="submit">
    </form>
</body>
</html>
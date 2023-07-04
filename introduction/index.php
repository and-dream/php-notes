<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction à PHP</title>
</head>
<body>
    <h1>Découverte de PHP</h1>
    <?php
    // Pour ouvrir un bloc PHP, on utilise la balise <?php
    // Pour fermer un bloc PHP, on utilise la balise suivante :
    ?>  
    <p>Je suis du HTML</p>
    <?php
    //-----------------------------------------------------
    echo '<h2>Les commentaires</>';
    //----------------------------------------------------
    //Je suis un commentaire en PHP
    # Je suis aussi un commentaire en PHP
    /*
    Je suis un commentaire
    sur plusieurs lignes
     */
    
    //-----------------------------------------------------
    echo '<h2>Affichage</h2>';
    //----------------------------------------------------
    echo 'Hello, World!';
    echo "Hello, World !";
    // echo est une instruction qui permet d'afficher du texte dans le navigateur


    //-----------------------------------------------------
    echo '<h2>Les variables</h2>';
    //----------------------------------------------------
    // Déclaration d'une variable avec le signe $
    $unNom;
    // Affectation de la valeur 127 à la variable nommée $unNom
    $unNom = 127;
    echo $unNom;
    echo '<br>';
    echo gettype($unNom);
    echo '<br>';

    // creer une variable et afficher son type
    // un nombre à virgule
    // une chaîne de caractère
    // un booléen
    $uneDecimale = 13.33;
    echo $uneDecimale;
    echo '<br>';
    echo gettype($uneDecimale);
    echo '<br>';
    $monPrenom = 'Gloria';
    echo $monPrenom;
    echo '<br>';
    echo gettype($monPrenom);
    echo '<br>';
    $unBooleen = true;
    echo ($unBooleen);
    echo '<br>';
    echo gettype($unBooleen);


    //-----------------------------------------------------
    echo '<h2>La concaténation</h2>';
    //----------------------------------------------------
    // declarer 2 variables
    $greetings1 = 'Bonjour';
    $greetings2 = 'tout le monde';
    echo $greetings1." ".$greetings2.' '."je suis en cours de php";
    echo '<br>';

    // echo $a. ' ' . $b. ', je suis en cours de PHP';
    // les doubles guillements permettent d'interpréter le PHP
    echo "$greetings1 $greetings2, je suis un message en PHP";

    // Entre simples guillemets les variables ne sont pas évaluées : c'est leur nom littéral qui est affiché
    // Il va croire que c'est du texte
    echo '<br>';
    echo '$greetings1 $greetings2, je suis un message en PHP';

    // Entre guillements doubles, les variables sont évaluées : c'est leur contenu qui est affiché

    //-----------------------------------------------------
    echo '<h2>Les constantes et les constantes magiques</h2>';
    //----------------------------------------------------

    // Une constante permet de sauvegarder une valeur sauf que celle ci ne peut pas être modifiée
    // Utile pour conserver les paramètres de la base de données
    // par convention une constante se déclare toujours en majuscule
    define("CAPITAL", "Paris");
    echo CAPITAL;
    echo '<br>';

    // affiche le chemin complet vers le fichier courant
    echo __FILE__ . '<br>';

    // affiche le numéro de la ligne courante
    echo __LINE__ .'<br>';

    // affiche le dossier dans lequel est le fichier courant
    echo __DIR__ .'<br>';


    // Afficher Bleu-Blanc-Rouge (avec les tirets) en mettant le texte de chaque couleur dans des variables

    $blue = 'Bleu';
    $white = 'Blanc';
    $red = 'Rouge';

    echo $blue . '-' . $white . '-' . $red. '<br>';
    echo "$blue-$white-$red";

    //-----------------------------------------------------
     echo '<h2>Les opérateurs arithmétiques</h2>';
    //----------------------------------------------------
    $a = 10;
    $b = 2;
    echo $a + $b . '<br>';   
    echo $a - $b . '<br>';
    echo $a / $b .'<br>';
    echo $a * $b . '<br>';
    echo $a % $b . '<br>';

    $a++;
    echo $a .'<br>';
    $a = $a +1;
    echo $a .'<br>';
    $a += 2;
    echo $a . '<br>';
    $a *=2;

    
    //-----------------------------------------------------
    echo '<h2>Les structures conditionnelles (if / elseif / else</h2>';
    //----------------------------------------------------
    
        $a =23;
        $b = 5;
        $c = 2;

    if ($a < $b){
        echo "$a est superieur à $b";
    } elseif ($a == $b){
        echo "$a est égal à $b";
    } else {
        echo "si aucune condition n'est remplie le else sera exécuté <br>" ;
    }

    // if(1){
    //     echo "$a est superieur à $b";
    // }

    // if(0){
    //     echo "$a est superieur à $b";
    // }


    // L'opérateur AND écrit && permet de vérifier que 2 conditions soient réalisées en même temps
    if ($a > $b && $b > $c){
        echo 'OK pour les 2 conditions <br>';
    }

    // L'opérateur OR écrit || permet de vérifier que 2 conditions soient réalisées en même temps
    if($a === 9 || ($b > $c && $a > $b)){
        echo 'OK pour au moins une des deux conditions <br>';
    }
    // condition pour vérifier une seule valeur à la fois
    // vérifier des cas différents

    $couleur = 'bleu';

        switch($couleur){
                case 'bleu' : 
                    echo 'Vous aimez le bleu <br>';
                    break;
                case 'rouge' :
                    echo 'Vous aimez le rouge';
                    break;
                case 'vert' :
                    echo 'Vous aimez le vert';
                    break;
                default : echo 'vous n\'aimez ni le bleu, ni le rouge ni le vert';
        }

    // Exercice : refaire le switch précédent avec des conditions if... pour obtenir exactement le même résultat

        if($couleur == 'bleu'){
            echo 'Vous aimez le bleu <br>';
        } elseif($couleur == 'rouge') {
            echo 'Vous aimez le rouge <br>';
        } elseif($couleur == 'vert') {
            echo 'Vous aimez le vert <br>';
        } else {
            echo 'Vous n\aimez ni le bleu, ni le rouge ni le vert';
        }
    // Exercice : faire un switch qui teste la valeur de $animal
    // chien => afficher "wouf"
    // chat => afficher "Miaou"
    // oiseau => afficher "Cui cui"
    // default => afficher "Je ne connais pas cet animal"

    $animal = 'dauphin';

        switch ($animal) {
            case 'chat':
                echo 'Miaou';
                break;

            case 'chien' :
                echo 'Wouf';
                break;

            case 'oiseau' :
                echo 'Cui cui';
                break;
            
            default:
                echo 'Je ne connais pas cet animal';
        }

    //-----------------------------------------------------
    echo '<h2>Les tableaux</h2>';
    //----------------------------------------------------
    // Un tableau de données ARRAY est déclaré comme une variable améliorée dans laquelle on stocke une multitude de valeurs. Ces valeurs peuvent être de n'importe quel type et possèdent un indice par défat dont la numérotation commence à 0.

    $liste = ['France', 'Italie', 'Espagne','Portugal'];
        echo $liste[3];
        
        echo '<br>';

        print $liste[3];
       
        echo '<br>';
        
        // echo est plus rapide donc on utilise echo plutôt que print
        // echo $liste;

        // var_dump() sert à débuguer
        // Affiche le contenu du tableau avec le type des valeurs
        echo '<pre>';
        var_dump($liste);
        echo '</pre>';
        
        echo '<br>';


        var_dump($animal);
        
        echo '<br>';


        // print_r Affiche le contenu tableau
        echo '<pre>';
        print_r($liste); 
        echo '</pre>';

        $liste2 = array('France', 'Italie', 'Espagne', 'Portugal');
        echo $liste2[0];

        $liste2[] = 'Algerie';
        // rajoute un nouvel élément à la fin de la liste

        echo '<pre>';
        var_dump($liste2);
        echo '</pre>';

    //-----------------------------------------------------
    echo '<h3>Les tableaux associatifs</h3>';
    //----------------------------------------------------
        // on peut déclarer un tableau différemment en php
        // au lieu d'avoir des index on peut lui mettre un nom

        $user = [
            'prenom'=>'rachid',
            'nom'=>'Edjekouane',
            'age'=> 40, 
            'telephone'=> '06 56 87 45 36'
        ];

        // echo "Bonjour, je m\'appelle $user['prenom'] $user['nom'], j\'ai $user['age'] ans et mon numéro de téléphone est $user['telephone']";

        echo 'Bonjour, je m\'appelle' . ' ' .$user['prenom'] . ' ' . $user['nom'] .', j\ai ' .$user['age']. 'ans et mon numéro de téléphone est le :'. $user['telephone'];
    
    //-----------------------------------------------------
    echo '<h3>Les structures itératives : les boucles</h3>';
    //----------------------------------------------------
    
    // boucle while : 
    $i = 0; // on initialise une variable
    while ($i<5){   // tant que $i est inférieur à 5 on exécute les accolades
        echo $i . '<br>';
        $i++; // on incrémante $i de 1 à chaque tour pour que la condition d'entrée devienne fausse à un moment
    }

     
    // Exercie : à l'aide d'une boucle while, afficher un sélecteur avec les années depuis 1920 jusqu'à 2020

    // on peut afficher ce qu'on veut, du texte, du html
   
    echo '<select>';
    $i= 1920;
    while($i<=2020){
        echo "<option>$i</option>";
        $i++;
    }
    echo '</select>';

    // Boucle for():
    for ($i = 0; $i < 10; $i++){
        echo '<p>salut tout le monde !</p>';
    }
    ?>


    <select name="" id="">;
        <?php 
        for ($i= 1920; $i <= 2020; $i++) {
        ?>
            <option value="<?= $i; ?>"> <?= $i; ?></option>           
        <?php
        }
        ?>
    </select>

    <?php
        $animals = [
            'chat','chien','lapin','cheval','hamster'
        ];

        for($i=0; $i<count($animals); $i++){
            echo $animals[$i] . '<br>';
        }

        //count() est une fonction qui nous permet de compter le nombre de tours
        // Boucle for pour faire un compteur

    //-----------------------------------------------------
    echo '<h3>La bouche foreach ()</h3>';
    //----------------------------------------------------

        // Boucle foreach()
        // on lui donne le tableau 
        // as pour lui dire de mettre chaque ligne (case) du tableau dans une nouvelle variable
        // Boucle foreach() pour les utiliser avec les tableaux associatifs
        foreach($animals as $animal){
            echo $animal . '<br>';
        }


        //creer un tableau associatif voiture
        //couleur => jaune modele =>bmw annee =>2018 
        /*
            $user = [
            'prenom'=>'rachid',
            'nom'=>'Edjekouane',
            'age'=> 40, 
            'telephone'=> '06 56 87 45 36'
        ];
        */

        $voiture = [
            'couleur' => 'jaune',
            'modele' => 'bmw',
            'annee' => 2018
        ];

        foreach($voiture as $key => $criteria){
            echo $key . ' : ' . $criteria .'<br>';
        }

       //-----------------------------------------------------
       echo '<h2>Les fonctions prédéfinies</h2>';
       //----------------------------------------------------  
       
       echo substr('Bonjour, je m\'appelle Rachid. Je suis formateur', 0, 10) . '<br>';
       //extrait un bout de la chaîne de caractères
       //il prend plusieurs paramètres
       // on peut lui passer une chaîne de caractères
       //paramètre 1 chaîne de caractère, paramètre 2 indice à partir de quelle case il démarre,
       // paramètre 3 le nombre de carctères à extraire
       // permet d'extraire une chaîne de caractères
       //ex on va avoir besoin d'extraire une soustraction de description (livre, film, etc.) pour avoir des cards homogènes sur le site

       // declarer une variable description
       // un extrait
       // extraire les 100 premiers caractères suivis de 3 petits points

        $description = 'Livio Squirell, capitaine de vaisseau intrépide, purge une peine de réclusion à perpétuité pour des meurtres qu\'il a toujours niés. Jusqu\'au jour où le gouvernement lui propose, en échange de sa liberté, de prendre part à une expédition vers la galaxie du Triangle où des signes d\'une activité intelligente ont été détectés. Mais le voyage s\'annonce périlleux : les neuf vaisseaux ayant précédemment tenté l\'aventure ont mystérieusement disparu... Pourquoi le capitaine prévoit-il alors de prendre tous les risques, en effectuant des bonds spatiotemporels jamais tentés ?';
        //remplacer par des doubles guillemets pour éviter les erreurs avec les guillemets simples
        $newDesc = substr ($description, 0, 100);
        echo $newDesc . '... <br>';

        //echo substr ($description, 0, 100) . '...';
       
        $message = '    edjek@gmail.com     ';
        echo $message;
        echo trim($message);
        //supprimer les espaces de début et de fin avant d'enregistrer en BDD
        //trim () supprime les espaces au début et à la fin de la chaîne de caractères


        //-----------------------------------------------------
       echo '<h2>Les fonctions utilisateurs</h2>';
       //------------------------------------------------------

       //on déclare une fonction avec le mot clé function suivi du nom de la fonction puis d'une paire de parenthèses()
       // on décide de ce que fait la fonction
       // pour exécuter une fonction on l'appelle par son nom suivi d'une paire de parenthèses
       function separation (){
            echo '<br>';
       }

       echo 'coucou';
       separation();
       echo 'coucou';
       separation();

       //fonction avec paramètres et return
       function bonjour($name){
            return "Bonjour, je m'appelle $name";
       }
       // cette variable n'a rien à voir avec celle du dessus
       $name = 'Rachid';
       $res = bonjour($name);
       echo $res;

       separation();

       // il faut récupérer dans une variable ce que retourne ma fonction

       //Ecrire une fonction factureEssence qui calcule le coût total de votre facture en fonction du nombre de litres d'essence que vous indiquez lors de l'appel de la fonction
       // Le prix du litre est 1.9
       // Cette fonction retourne la phrase "Votre facture est de X euros pour Y litres d'essence" ou X et Y sont des variables
       // Afficher le resultat de la fonction
        
       
       function factureEssence($litres){
            $res = $litres * 1.9; 
            return "Votre facture est de $res euros pour $litres litres d'essence"; 
       }          
            $test = factureEssence(30);
            echo $test;   
       
    //-----------------------------------------------------
    echo '<h2>Les super globables</h2>';
    //------------------------------------------------------
    

    //var_dump($_SERVER);

    function debbug($var){
        echo '<pre>';
        var_dump ($var);
        echo '</pre>';
    }

    debbug($_SERVER);
    
    //afficher à chaque fois dans un paragraphe 
    // adresse IP du server :
    // nom du fichier exécuté :
    // chemin du fichier exécuté :

    debbug ($_SERVER);
    separation();
    echo "adresse ip du server :" . $_SERVER['SERVER_ADDR'];
    separation();
    echo "nom du fichier exécuté :" . $_SERVER['SCRIPT_NAME'];
    separation();
    echo "chemin du fichier exécuté :" . $_SERVER['SCRIPT_FILENAME'];


    //$_GET :
    var_dump($_GET); // $_GET contient les informations envoyées en paramètres dans l'URL

    //-----------------------------------------------------
    echo '<h2>Les inclusions du fichier </h2>';
    //------------------------------------------------------

    //en PHP il est possible d'inclure des fichiers dans d'autrs fichiers avec l'instruction require, include, include_once ou encore require_once (on utilise plutôt require_once en pratique)

    // require 'inclus.php'; // le fichier est obligatoire pour le fonctionnement du site. Si le fichier n'est pas trouvé,, require génère une erreur fatale et stoppe l'éxécution du code

    
    // include 'inclus.php'; // le fichier est facultatif pour le fonctionnement du site. Si le fichier n'est pas trouvé,, require génère une erreur fatale et stoppe l'éxécution du code
    
    include './include.inc.php';
    require './include.inc.php';

    // le _once permet de vérifier si le fichier a déjà été inclus. Si c'est le cas, il ne le ré-inclut pas
    // include_once './inclue.inc.php';
    // include_once './inclue.inc.php';

    
    // 
    include_once './include.inc.php';
    require_once './include.inc.php';

    
    echo 'Je suis un message';
    ?>





     <!-- // echo <select name="annee">;
    
    // $i= 1920;       
    // while ($i <= 2020){
    //      $i++;
    //      echo <option value="">$i</option>;  
    // }
   
    // </select>  -->

</body>
</html>




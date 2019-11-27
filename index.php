<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correction PHP Partie 1</title>
</head>
<body>
    <h1>Exercice 1</h1>
    <?php
    // En PHP, pour déclarer une variable, il suffit de donner un nom à la variable et de placer un $ juste avant celui-ci
    // Comme pour JS, pour initialiser une variable (c-à-d lui donner une valeur), il suffit de rentrer sa valeur après le signe égal.
    // Ne pas oublier de mettre la valeur entre simples quotes si votre variable contient du texte. 
    $object = 'Formation';
    $message = 'La Manu';
    // La concaténation en PHP est similaire à celle de JS, la seule différence réside dans le signe utilisé pour "coller" les variables.
    // Ici on utilise le point.
    echo $object . ' ' . $message;
    ?>
    <hr>
    <h1>Exercice 2</h1>
    <?php
    // PHP détecte automatiquement le type de chaque variable, cependant il faut tout de même bien l'écrire.
    // Pour un nombre, pas besoin de simples quotes, vous pouvez écrire directement le nombre.
    $lastName = 'Écu-de-Chêne';
    $firstName = 'Thorin';
    $age = 29;
    echo 'Bonjour ' . $firstName . ' ' . $lastName . '. Vous avez ' . $age . ' ans.';
    ?>
    <hr>
    <h1>Exercice 3</h1>
    <?php
    // Il est possible d'utiliser une seule et même variable pour plusieurs actions, il faut juste se souvenir que l'action précédente sera écrasée et donc remplacée.
    $km = 1;
    ?>
    <!-- Ce type d'ouverture de la balise PHP est ce qu'on appelle un "short open tag".
         Il permet de "fusionner" la balise ouvrante classique du PHP avec la fonction echo qui permet d'afficher du contenu.
         Faire cependant attention : ce "short open tag" ne peut être utilisé que pour une ligne simple d'affichage, vous ne pourrez pas réaliser plusieurs actions dans celle-ci -->
    <p><?= $km ?></p>
    <?php
    $km = 3;
    ?>
    <p><?= $km ?></p>
    <?php
    $km = 125;
    ?>
    <p><?= $km ?></p>
    <hr>
    <h1>Exercice 4</h1>
    <?php
    $name = 'Tauriel';
    ?>
    <p>Bonjour <?= $name ?>, comment vas-tu ?</p>
    <hr>
    <h1>Exercice 5</h1>
    <?php
    $answer = 'no';
    // En PHP, les conditions if / else fonctionnent exactement de la même manière qu'en JS.
    // Dans un premier temps le if contenant la condition,
    if ($answer == 'yes') {
        // puis ce que votre code doit faire dans le cas ou celle-ci est vérifiée
        ?>
        <p>Vous avez répondu 'oui'.</p>
        <?php
    // Dans un deuxième temps, else, si votre condition n'est pas vérifiée,
    } else {
        // puis ce que votre code doit faire en réponse.
        ?>
        <p>Vous avez répondu 'non'.</p>
        <?php
    }
    ?>
    <hr>
    <h1>Exercice 6</h1>
    <?php
    // Les calculs ne comportent aucune composante particulière, vous pouvez directement exécuter vos calculs à l'intérieur du variable.
    $number = 140;
    $number = ($number + 30) / 2;
    ?>
    <p><?= $number ?></p>
</body>
</html>
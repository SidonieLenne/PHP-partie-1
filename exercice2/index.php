<?php 
    $lastname='Lenne';
    $firstname='Sidonie';
    $age=21;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 2 PHP</title>
    </head>
    <body>
       <p><?php echo "Je m'appelle $lastname $firstname et j'ai $age ans";  //Version double quotes ?></p>
       <p><?php echo 'Je suis ' . $lastname . ' ' . $firstname . ' et j\'ai l\'âge de ' . $age . ' ans'; //On peut remplacer les points par des virgules?></p>
       <p>Je m'appelle <?=  $lastname; ?> <?= $firstname; ?> et j'ai <?= $age; ?> ans </p>
    </body>
</html>
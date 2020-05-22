<?php $answer='YES'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <title>Exercice 5 PHP</title>
    </head>
    <body>
    <p>Vous avez répondu <?php
       if($answer=='YES'){
           echo '"oui"';
       }
       elseif($answer =='NO'){
           echo '"non"';
       }
       else{
           echo 'rien du tout';
       }
    ?></p>
    </body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <h1>Exercice 2</h1>
    <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas supérieure à 20 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- incrementer la première variable</p>


<?php 

$mySecondVar = 7;

// for ($myVar = 0; $myVar <= 20; $myVar++) {
//     if ($myVar <= 20) {
//     echo $myVar * $mySecondVar;
//     }
// }

$myVar = 0;

while ($myVar <= 20) {
    echo $myVar++*$mySecondVar;
}

?>
</body>
</html>
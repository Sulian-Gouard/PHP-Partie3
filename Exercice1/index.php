<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <h1>Exercice 1</h1>
    <p>Créer une variable et l'initialiser à 0.  
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer</p>


<?php 

$myVar = 0;

do{
    echo 'variable = ' .$myVar. '<br>';
    $myVar++;
}while($myVar <= 10);

?>
</body>
</html>
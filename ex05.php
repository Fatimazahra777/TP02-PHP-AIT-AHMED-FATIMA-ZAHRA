[22:45, 10/2/2026] 🍀🕊️: <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5</title>
</head>
<body>

<?php
    // 1. Declaration de la variable moyenne
    $moyenne = 14; // Tu peux changer cette valeur pour tester (-1, 9, 10, 12, 14, 16, 21)

    echo "Moyenne testée : " . $moyenne . "<br>";
    echo "Message : ";

    // 2 & 3. Verification et affichage avec if, elseif, else
    if ($moyenne < 0 || $moyenne > 20) {
        echo "Note invalide";
    } elseif ($moyenne < 10) {
        echo "Non validé";
    } elseif ($moyenne < 12) {
        echo "Passable";
    } elseif ($moyenne < 14) {
        echo "Assez bien";
    } elseif ($moyenne < 16) {
        echo "Bien";
    } else {
        echo "Très bien";
    }
?>

</body>
</html>


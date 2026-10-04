<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8</title>
</head>
<body>

<?php
    // Partie 1: Nombres pairs de 0 a 20 (avec 10 en gras)
    echo "<h3>Partie 1 : Nombres pairs de 0 à 20</h3>";
    $i = 0;
    while ($i <= 20) {
        if ($i == 10) {
            echo "<strong>10</strong> ";
        } else {
            echo $i . " ";
        }
        $i += 2;
    }
    echo "<br><br><hr>";

    // Partie 2: Comparaison entre while et do-while avec compteur = 5
    echo "<h3>Partie 2 : Comparaison While et Do-While</h3>";

    // Test avec while
    $compteur1 = 5;
    $executionsWhile = 0;
    while ($compteur1 < 5) {
        $executionsWhile++;
        $compteur1++;
    }
    echo "Executions de la boucle while : " . $executionsWhile . "<br>";

    // Test avec do-while
    $compteur2 = 5;
    $executionsDoWhile = 0;
    do {
        $executionsDoWhile++;
        $compteur2++;
    } while ($compteur2 < 5);
    echo "Executions de la boucle do-while : " . $executionsDoWhile . "<br><br><hr>";

    // Partie 3: Parcours de 1 a 20 avec continue et break
    echo "<h3>Partie 3 : Boucle avec continue et break</h3>";
    for ($i = 1; $i <= 20; $i++) {
        // Arrêt si compteur atteint 16
        if ($i == 16) {
            break;
        }

        // Ignorer les multiples de 3
        if ($i % 3 == 0) {
            continue;
        }

        echo $i . " ";
    }
?>

</body>
</html>
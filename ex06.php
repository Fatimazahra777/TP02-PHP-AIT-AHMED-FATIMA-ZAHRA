<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6</title>
</head>
<body>

<?php
    // 1. Declaration du numero de mois fixe
    $numeroMois = 3; // Tester avec 1, 3, 12, 15

    echo "<h3>Test avec valeur fixe ($numeroMois) :</h3>";

    // 2 & 3. Utilisation de switch
    switch ($numeroMois) {
        case 1:
            echo "Janvier";
            break;
        case 2:
            echo "Février";
            break;
        case 3:
            echo "Mars";
            break;
        case 4:
            echo "Avril";
            break;
        case 5:
            echo "Mai";
            break;
        case 6:
            echo "Juin";
            break;
        case 7:
            echo "Juillet";
            break;
        case 8:
            echo "Août";
            break;
        case 9:
            echo "Septembre";
            break;
        case 10:
            echo "Octobre";
            break;
        case 11:
            echo "Novembre";
            break;
        case 12:
            echo "Décembre";
            break;
        default:
            echo "Numéro de mois invalide";
            break;
    }

    // 5. Utilisation du mois courant du serveur avec (int)date("m")
    echo "<h3>Mois courant du serveur :</h3>";
    $moisCourant = (int)date("m");

    switch ($moisCourant) {
        case 1: echo "Janvier"; break;
        case 2: echo "Février"; break;
        case 3: echo "Mars"; break;
        case 4: echo "Avril"; break;
        case 5: echo "Mai"; break;
        case 6: echo "Juin"; break;
        case 7: echo "Juillet"; break;
        case 8: echo "Août"; break;
        case 9: echo "Septembre"; break;
        case 10: echo "Octobre"; break;
        case 11: echo "Novembre"; break;
        case 12: echo "Décembre"; break;
        default: echo "Numéro de mois invalide"; break;
    }
?>

</body>
</html>
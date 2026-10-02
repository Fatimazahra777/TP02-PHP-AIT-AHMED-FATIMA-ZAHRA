<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
</head>
<body>

<?php
    // Declaration des constantes
    define("TAUX_TVA", 20);
    const DEVISE = "MAD";

    // Les variables du produit
    $prixHT = 60;
    $qte = 3;

    // Calculs
    $totalHT = $prixHT * $qte;
    $tva = $totalHT * (TAUX_TVA / 100);
    $totalTTC = $totalHT + $tva;

    // Ajout des frais de livraison avec +=
    $totalFinal = $totalTTC;
    $totalFinal += 15;

    // Affichage des resultats
    echo "Total HT : " . $totalHT . " " . DEVISE . "<br>";
    echo "TVA : " . $tva . " " . DEVISE . "<br>";
    echo "Total TTC : " . $totalTTC . " " . DEVISE . "<br>";
    echo "Montant final : " . $totalFinal . " " . DEVISE . "<br><br>";

    // Verification de la constante
    if (defined("TAUX_TVA")) {
        echo "Le taux de TVA est : " . TAUX_TVA . "%";
    }
?>

</body>
</html>
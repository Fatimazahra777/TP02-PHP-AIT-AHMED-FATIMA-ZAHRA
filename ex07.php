<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7</title>
</head>
<body>

<?php
    // Section 1: Table de multiplication de 7 (de 1 a 10)
    echo "<section>";
    echo "<h3>Table de multiplication de 7</h3>";
    $nombre = 7;

    for ($i = 1; $i <= 10; $i++) {
        $resultat = $nombre * $i;
        echo "$nombre x $i = $resultat <br>";
    }
    echo "</section><br><hr><br>";

    // Section 2: Pyramide d'etoiles (6 lignes)
    echo "<section>";
    echo "<h3>Pyramide d'étoiles</h3>";

    for ($i = 1; $i <= 6; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "</section>";
?>

</body>
</html>
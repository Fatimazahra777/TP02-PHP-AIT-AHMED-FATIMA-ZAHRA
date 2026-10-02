<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>

<?php
    // 1. Declaration des variables
    $a = 42;
    $b = "42";
    $c = 15.8;
    $d = true;
    $e = false;
    $f = null;

    // 2. Affichage des types avec var_dump
    echo "<pre>";
    var_dump($a, $b, $c, $d, $e, $f);
    echo "</pre>";

    // 3. Conversion des types (Casting)
    $b_int = (int)$b;
    $c_int = (int)$c;
    $a_str = (string)$a;

    echo "<pre>";
    var_dump($b_int, $c_int, $a_str);
    echo "</pre>";

    // 4. Test d'affichage de true et false
    echo "Avec echo : <br>";
    echo "true : " . $d . "<br>";
    echo "false : " . $e . "<br><br>";

    echo "Avec var_dump : <br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br><br>";

    // 5. Conversion en booleen
    echo "<pre>";
    var_dump((bool)0);
    var_dump((bool)"0");
    var_dump((bool)"PHP");
    var_dump((bool)array());
    echo "</pre>";
?>

</body>
</html
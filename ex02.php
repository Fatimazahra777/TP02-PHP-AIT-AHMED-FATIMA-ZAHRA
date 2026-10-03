<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 02 - PHP</title>
</head>
<body>
<?php
    $nom = "AIT AHMED  <br>";
    $prenom = "FATIMA ZAHRA";
    $age = 20;
    $formation = "IAP";

    // 2. Construire une phrase de présentation en utilisant la concaténation '.'
    $presentation = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en formation " . $formation . ".";
    
    // 3. Compléter cette phrase avec '.=' pour ajouter " J'apprends PHP ."
    $presentation .= " J'apprends PHP.";

    // Affichage de la phrase
    echo $presentation . "<br><br>";

    // 4. Déclarer $note = 12 et $Note = 16, puis afficher les deux valeurs
    $note = 12;
    $Note = 16;

    echo "La première note (\$note) : " . $note . "<br>";
    echo "La deuxième note (\$Note) : " . $Note . "<br>";
?>

</body>
</html>
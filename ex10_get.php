<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement GET</title>
</head>
<body>

<?php
    // Verification de l'existence des champs et refus des valeurs vides
    if (isset($_GET['nom'], $_GET['prenom'], $_GET['groupe']) && 
        trim($_GET['nom']) !== "" && 
        trim($_GET['prenom']) !== "") {
        
        $nom = htmlspecialchars($_GET['nom'], ENT_QUOTES, 'UTF-8');
        $prenom = htmlspecialchars($_GET['prenom'], ENT_QUOTES, 'UTF-8');
        $groupe = htmlspecialchars($_GET['groupe'], ENT_QUOTES, 'UTF-8');

        echo "<h3>Bienvenue " . $prenom . " " . $nom . " du groupe " . $groupe . " !</h3>";
    } else {
        echo "<p style='color:red;'>Veuillez remplir tous les champs du formulaire !</p>";
    }
?>

</body>
</html>
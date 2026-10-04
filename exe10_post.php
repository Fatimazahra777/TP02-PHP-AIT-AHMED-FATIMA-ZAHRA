<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement POST</title>
</head>
<body>

<?php
    // Verification de l'existence des champs et refus des valeurs vides
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['groupe']) && 
        trim($_POST['nom']) !== "" && 
        trim($_POST['prenom']) !== "") {
        
        $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES, 'UTF-8');
        $prenom = htmlspecialchars($_POST['prenom'], ENT_QUOTES, 'UTF-8');
        $groupe = htmlspecialchars($_POST['groupe'], ENT_QUOTES, 'UTF-8');

        echo "<h3>Bienvenue " . $prenom . " " . $nom . " du groupe " . $groupe . " !</h3>";
    } else {
        echo "<p style='color:red;'>Veuillez remplir tous les champs du formulaire !</p>";
    }
?>

</body>
</html>
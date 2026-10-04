<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
    // Jeu de donnees fictives
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    // Variables d'accumulation
    $somme = 0;
    $nbValide = 0;
    $meilleureNote = -1;
    $meilleurEtudiant = "";

    // 1 & 2. Affichage du tableau HTML avec foreach
    echo "<h3>Liste des étudiants et leurs résultats :</h3>";
    echo "<table>";
    echo "<tr><th>Étudiant</th><th>Note</th><th>Statut</th></tr>";

    foreach ($notes as $nom => $note) {
        // Calcul de la somme
        $somme += $note;

        // Verification du statut (seuil = 10)
        if ($note >= 10) {
            $statut = "Validé";
            $nbValide++;
        } else {
            $statut = "Non validé";
        }

        // Determination de la meilleure note
        if ($note > $meilleureNote) {
            $meilleureNote = $note;
            $meilleurEtudiant = $nom;
        }

        echo "<tr>";
        echo "<td>" . $nom . "</td>";
        echo "<td>" . $note . "</td>";
        echo "<td>" . $statut . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    // 3. Calcul de la moyenne de la classe
    $totalEtudiants = count($notes);
    $moyenne = $somme / $totalEtudiants;

    // Affichage des statistiques
    echo "<h3>Statistiques de la classe :</h3>";
    echo "Moyenne de la classe : " . $moyenne . "<br>";
    echo "Nombre d'étudiants ayant validé : " . $nbValide . "<br>";
    echo "Meilleure note : " . $meilleurEtudiant . " avec " . $meilleureNote . "/20";
?>

</body>
</html>
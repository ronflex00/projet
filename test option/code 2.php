<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cartes Sélectionnées</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

    <h2>Cartes Sélectionnées</h2>

    <?php
    // Vérification si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cartes'])) {
        // Affichage des informations des cartes sélectionnées
        foreach ($_POST['cartes'] as $carteId) {
            // Connexion à la base de données
            $mysqli = new mysqli('localhost', 'systeme', 'password', 'jeux_carte');

            // Vérification de la connexion
            if ($mysqli->connect_error) {
                die('Erreur de connexion à la base de données : ' . $mysqli->connect_error);
            }

            // Sélection des données de la carte spécifique
            $sql = "SELECT * FROM carte WHERE id_carte = $carteId";
            $result = $mysqli->query($sql);

            // Vérification des résultats
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo '<p>';
                echo 'Nom de la carte: ' . $row['nom_carte'] . '<br>';
                echo 'Attaque: ' . $row['attaque_carte'] . '<br>';
                echo 'Vie: ' . $row['vie_carte'];
                echo '</p>';
            } else {
                echo 'Aucune carte trouvée dans la base de données.';
            }

            // Fermeture de la connexion
            $mysqli->close();
        }
    } else {
        echo 'Aucune carte sélectionnée.';
    }
    ?>

</body>
</html>

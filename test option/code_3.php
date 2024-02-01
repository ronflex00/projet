<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jeu de Cartes</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<?php
$host = 'localhost';
$user = 'systeme';
$password = 'password';
$database = 'jeux_carte';

// Connexion à la base de données
$mysqli = new mysqli($host, $user, $password, $database);

// Vérification de la connexion
if ($mysqli->connect_error) {
    die('Erreur de connexion à la base de données : ' . $mysqli->connect_error);
}

// Sélection des données de la table carte
$sql = "SELECT * FROM carte";
$result = $mysqli->query($sql);

// Vérification des résultats
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id_carte = $row['id_carte'];
        $nom_carte = $row['nom_carte'];
        $attaque_carte = $row['attaque_carte'];
        $vie_carte = $row['vie_carte'];

        // Affichage de la carte avec un lien
        echo '<a href="cartes_selectionnees.php?id=' . $id_carte . '">';
        echo '<div class="card" id="image_' . $id_carte . '">';
        echo '<div class="pv icone">';
        echo '<img src="icone/image_pv.jpg" alt="Points de Vie" class="icone-pv">';
        echo '<p>pv</p>';
        echo '</div>';
        echo '<div class="att icone">';
        echo '<img src="icone/image_att.jpg" alt="Points d\'Attaque" class="icone-att">';
        echo '<p>att</p>';
        echo '</div>';
        echo '</div>';
        echo '</a>';
    }
} else {
    echo 'Aucune carte trouvée dans la base de données.';
}

// Fermeture de la connexion
$mysqli->close();
?>

</body>
</html>

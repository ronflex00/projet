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
    // Initialisation du tableau à deux dimensions
    $carteArray = array();

    // Boucle pour récupérer les données et les stocker dans le tableau
    while ($row = $result->fetch_assoc()) {
        $carteArray[$row['id_carte']] = array(
            'nom_carte' => $row['nom_carte'],
            'attaque_carte' => $row['attaque_carte'],
            'vie_carte' => $row['vie_carte']
        );
    }

    // Affichage du tableau
    echo '<pre>';
    print_r($carteArray);
    echo '</pre>';
} else {
    echo 'Aucune carte trouvée dans la base de données.';
}

// Fermeture de la connexion
$mysqli->close();
?>

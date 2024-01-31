<?php

require '../doc 2/class/Carte.php';

// Fonction pour récupérer les cartes depuis la base de données
function recupererCartesDeLaBaseDeDonnees() {
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
        $tableau_carte = array();

        // Boucle pour récupérer les données et créer des objets Carte
        while ($row = $result->fetch_assoc()) {
            $carte = new Carte(
                $row['nom_carte'],
                $row['attaque_carte'],
                $row['vie_carte']
            );

            // Ajouter l'objet Carte au tableau
            $tableau_carte[] = $carte;
        }

        // Fermeture de la connexion
        $mysqli->close();

        return $tableau_carte;
    } else {
        echo 'Aucune carte trouvée dans la base de données.';
        return null;
    }
}

// Appel de la fonction pour récupérer les cartes
$tableau_carte = recupererCartesDeLaBaseDeDonnees();

?>
<?php
include('test1.php');

$cartesSelectionnees = filter_input(INPUT_POST, 'cartes', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

if (!empty($cartesSelectionnees)) {
    // Afficher les cartes sélectionnées
    foreach ($cartesSelectionnees as $id_carte) {
        afficherCarte($id_carte);
    }
} else {
    echo 'Aucune carte sélectionnée.';
}
?>

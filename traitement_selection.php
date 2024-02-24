<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si des cartes ont été sélectionnées
    if (isset($_POST['cartes'])) {
        // Récupère les cartes sélectionnées
        $cartes_selectionnees = $_POST['cartes'];

        // Faites ce que vous voulez avec les cartes sélectionnées...
        // Par exemple, affichez-les :
        echo "Cartes sélectionnées :<br>";
        foreach ($cartes_selectionnees as $carte) {
            echo $carte . "<br>";
        }
    } else {
        echo "Aucune carte sélectionnée.";
    }
}
?>

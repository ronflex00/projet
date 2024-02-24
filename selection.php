<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sélection de cartes</title>
</head>
<body>
    <h1>Sélectionnez vos cartes</h1>
    <form action="traitement_selection.php" method="post">
        <?php
        // Inclure le code pour récupérer les cartes
        require 'recuperer_cartes.php';

        // Vérifier si des cartes ont été récupérées
        if (!empty($tableau_carte)) {
            // Parcourir le tableau de cartes
            foreach ($tableau_carte as $carte) {
                ?>
                <input type="checkbox" name="cartes[]" value="<?php echo $carte->getNom(); ?>">
                <label><?php echo $carte->getNom(); ?></label>
                <br>
                <?php
            }
        } else {
            echo 'Aucune carte trouvée dans la base de données.';
        }
        ?>
        <br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
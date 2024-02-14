<?php
require_once 'recherche_carte.php'
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Jeu de Cartes</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    
    <div class="colonne gauche">
        <?php
        if (!empty($tableau_carte)) {
            for ($index = 0; $index < min(3, count($tableau_carte)); $index++) {
                $carte = $tableau_carte[$index];
                $image_id = $index + 1;
                ?>
                <div class="card" id="image_<?php echo $image_id; ?>">
                    <div class="icone pv">
                        <img src="icone/image_pv.jpg" alt="Points de Vie" class="icone-pv">
                        <p><?php echo $carte->getPV(); ?></p>
                    </div>
                    <div class="icone att">
                        <img src="icone/image_att.jpg" alt="Points d'Attaque" class="icone-att">
                        <p><?php echo $carte->getAttaque(); ?></p>
                    </div>
                </div>
                <?php
            }
        } else {
            echo '<p>Aucune carte trouvée dans la base de données.</p>';
        }
        ?>
    </div>
        <div class ="colonne_vide_1">

        </div>
    <div class="colonne" id="center">
        <?php
        if (!empty($tableau_carte) && count($tableau_carte) > 3) {
            for ($index = 3; $index < min(6, count($tableau_carte)); $index++) {
                $carte = $tableau_carte[$index];
                $image_id = $index + 1;
                ?>
                <div class="card" id="image_<?php echo $image_id; ?>">
                    <div class="icone pv">
                        <img src="icone/image_pv.jpg" alt="Points de Vie" class="icone-pv">
                        <p><?php echo $carte->getPV(); ?></p>
                    </div>
                    <div class="icone att">
                        <img src="icone/image_att.jpg" alt="Points d'Attaque" class="icone-att">
                        <p><?php echo $carte->getAttaque(); ?></p>
                    </div>
                </div>
                <?php
            }
            
            for ($index = 6; $index < min(9, count($tableau_carte)); $index++) {
                $carte = $tableau_carte[$index];
                $image_id = $index + 1;
                ?>
                <div class="card" id="image_<?php echo $image_id; ?>">
                    <div class="icone pv">
                        <img src="icone/image_pv.jpg" alt="Points de Vie" class="icone-pv">
                        <p><?php echo $carte->getPV(); ?></p>
                    </div>
                    <div class="icone att">
                        <img src="icone/image_att.jpg" alt="Points d'Attaque" class="icone-att">
                        <p><?php echo $carte->getAttaque(); ?></p>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
        <div class="colonne_vide_2">

        </div>
    <div class="colonne droite">
        <?php

        if (!empty($tableau_carte) && count($tableau_carte) > 9) {

            for ($index = 9; $index < min(12, count($tableau_carte)); $index++) {
                $carte = $tableau_carte[$index];
                $image_id = $index + 1;
                ?>
                <div class="card" id="image_<?php echo $image_id; ?>">
                    <div class="icone pv">
                        <img src="icone/image_pv.jpg" alt="Points de Vie" class="icone-pv">
                        <p><?php echo $carte->getPV(); ?></p>
                    </div>
                    <div class="icone att">
                        <img src="icone/image_att.jpg" alt="Points d'Attaque" class="icone-att">
                        <p><?php echo $carte->getAttaque(); ?></p>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>

</body>

</html>

CREATE USER 'systeme'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON jeux_carte.* TO 'systeme'@'localhost';
FLUSH PRIVILEGES;

create schema jeux_carte;
use jeux_carte;

CREATE TABLE carte (
    id_carte INT AUTO_INCREMENT PRIMARY KEY,
    nom_carte VARCHAR(30),
    attaque_carte INT(3),
    vie_carte INT(3)
);

INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('artemis nuits', '5', '6');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('Déméter', '4', '7');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('Éros', '8', '3');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('artemis nuits 2', '10', '2');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('Amphitrite', '1', '20');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('apollon', '5', '5');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('gaïa', '2', '16');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('Héra feu', '6', '9');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('hermes', '8', '3');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('Dionysos', '9', '2');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('Gaïa forme humaine', '4', '12');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('ares', '7', '9');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('Héra neutre', '4', '7');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('zeus', '7', '10');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('Niké', '10', '7');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('athena', '4', '16');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('Hécate', '6', '4');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('hephaïstos', '3', '14');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('thanatos', '15', '2');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('hades', '3', '15');
INSERT INTO `jeux_carte`.`carte` (`nom_carte`, `attaque_carte`, `vie_carte`) VALUES ('aphrodite', '4', '15');

<?php
class Carte {
    private $nom;
    private $attaque;
    private $pv;

    // Constructeur de la classe
    public function __construct($nom, $attaque, $pv) {
        $this->nom = $nom;
        $this->attaque = $attaque;
        $this->pv = $pv;
    }

    // Méthode pour obtenir le nom de la carte
    public function getNom() {
        return $this->nom;
    }

    // Méthode pour obtenir l'attaque de la carte
    public function getAttaque() {
        return $this->attaque;
    }

    // Méthode pour obtenir les points de vie de la carte
    public function getPV() {
        return $this->pv;
    }

    // Méthode pour afficher toutes les informations de la carte
    public function afficherInfosCarte() {
        echo "Nom : {$this->getNom()}<br>";
        echo "Attaque : {$this->getAttaque()}<br>";
        echo "Points de vie : {$this->getPV()}<br>";
    }
}
?>
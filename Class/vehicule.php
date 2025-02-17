<?php
class Vehicule{
    //Attribut
    private ?int $nbrRoue;
    private ?string $couleur;
    private ?string $proprietaire;
    private ?int $vitesseMax = 250;

    //Constructeur
    //De base, PHP possède déjà une méthode magique qui s'appelle __construc(), et servant à instancier des objets sans donner de valeur à leur attribut
    //Je peux cependant redéfinir le comportement du constructeur au sein d'un classe
    public function __construct(?int $nbrRoue, string $couleur = "Noire"){
        $this->nbrRoue = $nbrRoue;
        $this->couleur = $couleur;
    }

    //GETTER ET SETTER
    public function getNbrRoue():?int{
        return $this->nbrRoue;
    }

    public function getCouleur():?string{
        return $this->couleur;
    }

    public function getProprietaire():?string{
        return $this->proprietaire;
    }

    public function getVitesseMax():?int{
        return $this->vitesseMax;
    }

    public function setNbrRoue(?int $newNbrRoue):Vehicule{
        $this->nbrRoue = $newNbrRoue;
        return $this;
    }

    public function setCouleur(?string $newCouleur):Vehicule{
        $this->couleur = $newCouleur;
        return $this;
    }

    public function setVitesseMax(?int $newVitesseMax):Vehicule{
        $this->vitesseMax = $newVitesseMax;
        return $this;
    }

    //METHODE
    public function accelerer(?int $newVitesse):void{
        $this->setVitesseMax(($this->getVitesseMax() + $newVitesse));
        echo '<br>Je file maintenant à '.$this->getVitesseMax().' km/h !';
    }
}
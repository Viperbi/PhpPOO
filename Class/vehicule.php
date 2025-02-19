<?php
class Vehicule{
    //Attribut
    private ?int $nbrRoue;
    private ?string $couleur;
    private ?string $proprietaire;
    private ?int $vitesseMax = 250;
    private ?string $name;

    //Constructeur
    //De base, PHP possède déjà une méthode magique qui s'appelle __construc(), et servant à instancier des objets sans donner de valeur à leur attribut
    //Je peux cependant redéfinir le comportement du constructeur au sein d'un classe
    public function __construct(?string $name,?int $nbrRoue, string $couleur = "Noire"){
        $this->name = $name;
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

    public function getName():string{
        return $this->name;
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

    public function setName(?string $name):Vehicule{
        $this->name = $name;
        return $this;
    }

    //METHODE
    public function accelerer(?int $newVitesse):void{
        $this->setVitesseMax(($this->getVitesseMax() + $newVitesse));
        echo '<br>Je file maintenant à '.$this->getVitesseMax().' km/h !';
    }

    public function detect(): string{
        if($this -> nbrRoue ==2){
            return "Moto";
        }
        return "Voiture";
    }

    public function boost(): Vehicule{
        $this -> vitesseMax += 50;
        return $this;
    }

    public function plusRapide(Vehicule $v1): Vehicule|string{
        if ($v1 < $this) {
            return $this;
        }
        elseif ($this < $v1) {
            return $v1;
        }
        return "Les véhicule ont la même vitesse";
    }

}
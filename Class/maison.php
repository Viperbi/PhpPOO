<?php
class Maison{
    //Attribut
    private string $nom;
    private int $longueur;
    private int $largeur;
    private ?int $etage;


    public function __construct(string $nom, int $longueur, int $largeur, ?int $etage){
        $this->nom = $nom;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->etage = $etage;
    }

    public function getNom(): ?string{
        return $this->nom;
    }

    public function getLongueur(): int{
        return $this->longueur;
    }

    public function getLargeur(): int{
        return $this->largeur;
    }

    public function getEtage(): ?int{
        return $this->etage;
    }

    public function setNom(string $nom): Maison{
        $this->nom = $nom;
        return $this;
    }

    public function setLongueur(int $longueur): Maison{
        $this->longueur = $longueur;
        return $this;
    }

    public function setLargeur(int $largeur): Maison{
        $this->largeur = $largeur;
        return $this;
    }

    public function setEtage(?int $etage): Maison{
        $this->etage = $etage;
        return $this;
    }

    public function surface(): int{
        if ($this->etage == 0){

            return $this->getLongueur()*$this->getLargeur();
        }

        return $this->getLongueur()*$this->getLargeur()*$this->getEtage();
    }

}
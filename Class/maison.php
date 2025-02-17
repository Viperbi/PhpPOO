<?php
class Maison{
    //Attribut
    private ?string $nom;
    private ?string $longueur;
    private ?string $largeur;


    public function __construct(?string $nom, ?string $longueur, ?string $largeur){
        $this->nom = $nom;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function getNom(): ?string{
        return $this->nom;
    }

    public function getLongueur(): ?string{
        return $this->longueur;
    }

    public function getLargeur(): ?string{
        return $this->largeur;
    }

    public function setNom(string $nom): Maison{
        $this->nom = $nom;
        return $this;
    }

    public function setLongueur(string $longueur): Maison{
        $this->longueur = $longueur;
        return $this;
    }

    public function setLargeur(string $largeur): Maison{
        $this->largeur = $largeur;
        return $this;
    }

    public function surface(int $long, int $larg): int{
        return $long*$larg;
    }
}
<?php

abstract class AbstractPersonnage{
    //Attribut
    private ?string $nom;
    private ?InterfaceArme $arme;
    private ?string $type;
    private Stats $stats;

    public function __construct(string $nom, InterfaceArme $arme, string $type, Stats $stats){
        $this->nom = $nom;
        $this->type = $type;
        $this->arme = $arme;
        $this->stats = $stats;
    }

    public function getNom(): string{
        return $this->nom;
    }
    public function getArme(): InterfaceArme{
        return $this->arme;
    }
    public function getType(): string{
        return $this->type;
    }
    public function setNom(string $nom): AbstractPersonnage{
        $this->nom = $nom;
        return $this;
    }
    public function setArme(InterfaceArme $arme): AbstractPersonnage{
        $this->arme = $arme;
        return $this;
    }
    public function setType(string $type): AbstractPersonnage{
        $this->type = $type;
        return $this;
    }

    public abstract function afficher():void;

    public function attaquer():void{
        $temp = $this->getArme();
        if ($temp->getType() === "ProjectileMagique"){
            if ($this->getType() != 'Magicien'){
                echo "<p>Vous ne savez pas vous servir d'un baton magique en tant que ". $this->getType(). '.';
            }          
            }else{
            $temp->attaquer();
            echo '<p>Tu attaques avec ton '. $this->getArme()->getType() . ' et tu fais ' . $temp->attaquer(). ' points de dégats.';
        }
    }

    public function getStats(): Stats { return $this->stats; }
    public function setStats(Stats $stats): self { $this->stats = $stats; return $this; }
}
<?php

abstract class AbstractPersonnage{
    //Attribut
    private ?string $name;
    private ?interfaceWeapon $weapon;
    private ?string $type;


    public function __construct(string $name, interfaceWeapon $weapon, string $type){
        $this->name = $name;
        $this->type = $type;
        $this->weapon = $weapon;
    }

    public function getname(): string{
        return $this->name;
    }
    public function getweapon(): interfaceWeapon{
        return $this->weapon;
    }
    public function getType(): string{
        return $this->type;
    }
    public function setname(string $name): AbstractPersonnage{
        $this->name = $name;
        return $this;
    }
    public function setweapon(interfaceWeapon $weapon): AbstractPersonnage{
        $this->weapon = $weapon;
        return $this;
    }
    public function setType(string $type): AbstractPersonnage{
        $this->type = $type;
        return $this;
    }

    public abstract function afficher():void;

    public function attaquer():void{
        $temp = $this->getWeapon();
        if ($temp->getType() === "ProjectileMagique"){
            if ($this->getType() != 'Magicien'){
                echo "<p>Vous ne savez pas vous servir d'un baton magique en tant que ". $this->getType(). '.';
            }          
            }else{
            $temp->attaquer();
            echo '<p>Tu attaques avec ton '. $this->getweapon()->getType() . ' et tu fais ' . $temp->attaquer(). ' points de dégats.';
        }
    }
}
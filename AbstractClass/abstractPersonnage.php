<?php

abstract class AbstractCharacter{
    //Attribut
    private ?string $name;
    private ?InterfaceWeapon $weapon;
    private ?string $type;
    private Stats $stats;

    public function __construct(string $name, InterfaceWeapon $weapon, string $type, Stats $stats){
        $this->name = $name;
        $this->type = $type;
        $this->weapon = $weapon;
        $this->stats = $stats;
    }

    public function getName(): string{
        return $this->name;
    }
    public function getWeapon(): InterfaceWeapon{
        return $this->weapon;
    }
    public function getType(): string{
        return $this->type;
    }
    public function setName(string $name): AbstractCharacter{
        $this->name = $name;
        return $this;
    }
    public function setWeapon(InterfaceWeapon $weapon): AbstractCharacter{
        $this->weapon = $weapon;
        return $this;
    }
    public function setType(string $type): AbstractCharacter{
        $this->type = $type;
        return $this;
    }

    public abstract function display():void;

    public function attack():void{
        $temp = $this->getWeapon();
        if ($temp->getType() === "SpellBook"){
            if ($this->getType() != 'Mage'){
                echo "<p>Vous ne savez pas vous servir d'un baton magique en tant que ". $this->getType(). '.';
            }          
            }else{
            $temp->attack();
            echo '<p>Tu attaques avec ton '. $this->getWeapon()->getType() . ' et tu fais ' . $temp->attack(). ' points de dégats.';
        }
    }

    public function getStats(): Stats { return $this->stats; }
    public function setStats(Stats $stats): self { $this->stats = $stats; return $this; }
}
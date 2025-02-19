<?php
class Sword implements interfaceWeapon{
    private int $durability;
    private string $type;
    public function __construct(){
        $this->durability = 5;
        $this->type = "Sword";
    }
    public function afficher():void{
        echo "<p>Je suis une épée </p>";
    }

    public function getDurability(): int{
        return $this->durability;
    }
    public function getType(): string{
        return $this->type;
    }
    public function setMunition(int $munition): Sword{
        $this->munition = $munition;
        return $this;
    }
    public function setType(string $type): Sword{
        $this->type = $type;
        return $this;
    }
    public function attaquer(): int{
        if($this->durability>0){
        $temp = rand(1,10);
        if (rand(0,100)<= 10){
            $this->durability -=1;
            if($this->durability == 0){
                echo '<p>Votre weapon vient de se briser';
            }
        }
        return $temp;
        }
        echo "<p>Votre weapon est brisé vous ne pouvez pas attaquer";
        return 0;
    }
}
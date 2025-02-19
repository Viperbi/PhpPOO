<?php
class Sword implements InterfaceWeapon{
    private int $durability;
    private string $type;
    public function __construct(){
        $this->durability = 5;
        $this->type = "Sword";
    }
    public function display():void{
        echo "<p>Je suis une épée </p>";
    }

    public function getDurability(): int{
        return $this->durability;
    }
    public function getType(): string{
        return $this->type;
    }
    public function setDurability(int $durability): Sword{
        $this->durability = $durability;
        return $this;
    }
    public function setType(string $type): Sword{
        $this->type = $type;
        return $this;
    }
    public function attack(): int{
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
        echo "<p>Votre weapon est brisé vous ne pouvez pas attack";
        return 0;
    }
}
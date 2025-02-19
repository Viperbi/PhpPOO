<?php
class Bow implements InterfaceWeapon{
    private int $ammo;
    private string $type;
    public function __construct(){
        $this->ammo = 5;
        $this->type = "Bow";
    }

    public function getAmmo(): int{
        return $this->ammo;
    }
    public function getType(): string{
        return $this->type;
    }
    public function setAmmo(int $ammo): Bow{
        $this->ammo = $ammo;
        return $this;
    }
    public function setType(string $type): Bow{
        $this->type = $type;
        return $this;
    }
    public function display():void{
        echo "<p>Je suis un Bow</p>";
    }

    public function attack(): int{
        if($this->ammo>0){
            $temp = rand(3,7);
            $this->ammo -=1;
            if($this->ammo == 0){
                echo '<p>Vous venez de tirer votre dernière flèche';
            }
        return $temp;
        }
        echo "<p>Vous êtes à court de flèches, essayez de lancer votre Bow pour vous défendre !";
        return 0;
    }
}